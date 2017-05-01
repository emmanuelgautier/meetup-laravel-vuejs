@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if ($products->count() === 0)
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <span>Damn ! No product with query '{{ request()->get('q') }}'</span>
                </div>
            </div>
        </div>
        @endif

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
