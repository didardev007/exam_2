<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Seller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request) {
        $request->validate([
            'categories' => 'nullable|array|min:0',
            'categories.*' => 'nullable|integer|min:1',
            'brands' => 'nullable|array|min:0',
            'brands.*' => 'nullable|integer|min:1',
            'sellers' => 'nullable|array|min:0',
            'sellers.*' => 'nullable|integer|min:1',
            'sort' => 'nullable|string|in:new-to-old,old-to-new,low-to-high,high-to-low',
            'page' => 'nullable|integer|min:1',
            'perPage' => 'nullable|integer|in:15,30,60,120',
        ]);

        $f_categories = $request->has('categories') ? $request->categories : [];
        $f_brands = $request->has('brands') ? $request->brands : [];
        $f_sellers = $request->has('sellers') ? $request->sellers : [];
        $f_sort = $request->has('sort') ? $request->sort : null;
        $f_page = $request->has('page') ? $request->page : 1;
        $f_perPage = $request->has('perPage') ? $request->perPage : 15;


        $products = Product::when($f_categories, function ($query, $f_categories) {
            $query->whereIn('category_id', $f_categories);
        })

            ->when($f_brands, function ($query) use ($f_brands) {
                $query->whereIn('brand_id', $f_brands);
            })

            ->when($f_sellers, function ($query) use ($f_sellers) {
                $query->whereIn('seller_id', $f_sellers);
            })

            ->with('seller')

            ->when(isset($f_sort), function ($query) use ($f_sort) {
                if ($f_sort == 'old-to-new') {
                    $query->orderBy('id');
                } elseif ($f_sort == 'high-to-low') {
                    $query->orderBy('price', 'desc');
                } elseif ($f_sort == 'low-to-high') {
                    $query->orderBy('price');
                } else {
                    $query->orderBy('id', 'desc');
                }
            }, function ($query) {
                $query->orderBy('id', 'desc');
            })
            ->paginate($f_perPage, ['*'], 'page', $f_page)
            ->withQueryString();

        $categories = Category::orderBy('name')
            ->get();

        $brands = Brand::orderBy('name')
            ->get();

        $sellers = Seller::orderBy('name')
            ->get();

        return view('product.index')
            ->with([
                'products' => $products,
                'brands' => $brands,
                'categories' => $categories,
                'sellers' => $sellers,
                'f_sellers' => $f_sellers,
                'f_brands' => $f_brands,
                'f_categories' => $f_categories,
                'f_sort' => $f_sort,
                'f_perPage' => $f_perPage,
            ]);
    }

    public function show ($id) {

        $product = Product::find ($id);

        return view('product.show',['product' => $product]);
    }
}
