<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
       $categories = Category::withCount('products')
            ->orderBy('products_count', 'desc')
            ->take(8)
            ->get();

        $categoryProducts = [];
        foreach ($categories as $category) {
            $categoryProducts[] = [
                'category' => $category,
                'products' => Product::where('category_id', $category->id)
                    ->with('category', 'seller')
                    ->take(4)
                    ->get(),
            ];
        }

        return view('home.index')
            ->with([
                'categoryProducts' => $categoryProducts,
            ]);
    }


    public function locale($locale)
    {
        if ($locale == 'tm') {
            session()->put('locale', 'tm');
            return redirect()->back();
        } elseif ($locale == 'en') {
            session()->put('locale', 'en');
            return redirect()->back();
        }
        elseif ($locale == 'ru') {
            session()->put('locale', 'ru');
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}
