@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Shop Index</h2>
            <div class="row">
                @isset($products)    
                    @forelse ($products as $product)
                    <div class="col">
                        <div class="card p-4 mb-4">
                            <div class="card-block">
                                <h4 class="card-title">{{ $product->name }}</h4>
                                <p class="card-text p-y-1">{{ $product->details }}</p>
                                <a href="#" class="card-link">{{ $product->unit_price }}</a>
                                <a href="#" class="card-link">{{ $product->quantity_in_stock }}</a>
                            </div>
                            <div class="btn-group" role="group" aria-label="">
                                <a type="button" class="btn btn-primary" href="#">Add to card</a>
                                <a type="button" class="btn btn-secondary" href="{{ $product->path() }}">View Detail</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <h4>No products found.</h4>
                    @endforelse
                @endisset
            </div>
        </div>
    </div>
</div>
@endsection