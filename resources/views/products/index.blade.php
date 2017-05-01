@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>{{ $product->name }}</h2>

                    <p>{{ $product->description }}</p>

                    <a href="{{ route('products.show', compact('product')) }}"><span class="glyphicon glyphicon-eye-open"></span></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{ $products->links() }}    
</div>
@endsection
