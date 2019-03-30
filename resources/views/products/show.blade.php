@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Product details</h2>
            @isset($product)
                <div class="">
                    <div class="">
                        <h4 class="">{{ $product->name }}</h4>
                        <div class="">{{ $product->details }}</div>
                        <div class="currency">{{ $product->unit_price }}<span> Taka</span></div>
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
                {{-- <form action="" method="post">
                        {{ csrf_field() }} --}}
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="hidden" name="name" value="{{$product->name}}">
                        <input type="hidden" name="price" value="{{$product->unit_price}}">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                {{-- </form> --}}
            @endisset
        </div>
    </div>
</div>
@endsection