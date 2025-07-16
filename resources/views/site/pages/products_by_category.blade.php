@extends('site.base')

@section('title', 'Produtos - ' . $category->title)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-2">{{ $category->title }}</h1>
            @if($category->description)
            <p class="text-muted mb-4">{{ $category->description }}</p>
            @endif
        </div>
    </div>

    <!-- Categories Navigation -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex flex-wrap gap-2">
                <a href="{{ route('site.products.index') }}" class="btn btn-outline-primary">Todos</a>
                @foreach($categories as $cat)
                <a href="{{ route('site.products.category', $cat->slug) }}" class="btn {{ $cat->id == $category->id ? 'btn-primary' : 'btn-outline-primary' }}">{{ $cat->title }}</a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row">
        @if(count($products) > 0)
            @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($product->image)
                    <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->title }}" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        @if($product->description)
                        <p class="card-text">{{ Str::limit($product->description, 120) }}</p>
                        @endif
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="h5 text-success">{{ $product->formatted_price }}</span>
                            @if($product->stock > 0)
                            <span class="text-success"><small>Em estoque: {{ $product->stock }}</small></span>
                            @else
                            <span class="text-danger"><small>Fora de estoque</small></span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-12">
                <div class="alert alert-info">
                    <h4>Nenhum produto encontrado</h4>
                    <p>Não há produtos disponíveis nesta categoria no momento.</p>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection