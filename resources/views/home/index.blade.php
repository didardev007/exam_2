@extends('layouts.app')

@section('title')
    Home page
@endsection

@section('main')
    @foreach($categoryProducts as $categoryProduct)
        <div class="container-xl">
            <div class="display-4 text-danger pt-5">
                <a href="{{ route('product.index', ['categories' => [$categoryProduct['category']->id]]) }}" class="link-danger text-decoration-none">
                    {{ $categoryProduct['category']->name }}
                </a>
                <span class="text-warning h4 fw-normal">({{$categoryProduct['category']->products_count}})</span>
            </div>


            <div class="row align-items-center py-4 justify-content-center">
                @foreach($categoryProduct['products'] as $product)
                    <div class="col-md-6 col-xxl-3 col-sm-12 col-lg-4">
                        <a href="{{route('show', $product->id)}}" class="text-decoration-none link-danger">
                            <div class="card bg-dark text-danger border-danger" style="width:20rem;margin:20px 0 24px 0">
                                <div class="card-body">
                                    <h4 class="card-title">{{$product->name}}</h4>
                                    <div class="card-text pb-3">{{ round($product->price, 2) }} <small>TMT</small> </div>
                                    <h5 class="card-text pb-3"> {{$product->seller->name}} </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection