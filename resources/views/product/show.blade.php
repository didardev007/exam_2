@extends('layouts.app')

@section('title')
    Show
@endsection

@section('main')
    <div class="container-xl">
        <div class="row text-danger">
            <div class="col-12 col-md-6 text-center text-md-start">
                <h4 class="h1 fw-normal pb-1">{{$product->name}}</h4>
                <div class=" h3 fw-normal pb-2">{{$product->price}} TMT</div>
                <div class="h5 fw-normal ">Model: {{$product->madel->name}}</div>
                <div class="h5 fw-normal ">Category: {{$product->category->name}}</div>
                <div class="h5 fw-normal">Brand: {{$product->brand->name}}</div>
                <div class="h5 fw-normal">Seller: {{$product->seller->name}}</div>
                <div class="h5 fw-normal">{{$product->country->name}}</div>
                <div class="h5 fw-normal">Material: {{$product->material->name}}</div>
                <div class="h5 fw-normal">Color: {{$product->color->name}}</div>
                <div class="h5 fw-normal">Guarantee: {{$product->guarantee->name}} Yyl</div>
                <div class="h5 fw-normal pb-2">{{$product->description}}</div>
            </div>
        </div>
    </div>
@endsection