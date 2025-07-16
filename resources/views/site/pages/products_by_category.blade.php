@extends('site.base')

@section('title', 'Produtos - ' . $category->title)

@section('content')
<div class="container py-5">
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
                <a href="{{ route('site.categories.index') }}" class="btn btn-outline-primary">Todos</a>
                @foreach($categories as $cat)
                <a href="{{ route('site.products.category', $cat->slug) }}" class="btn {{ $cat->id == $category->id ? 'btn-primary' : 'btn-outline-primary' }}">{{ $cat->title }}</a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row">
        @if(count($products) > 0)
        @foreach($products as $product)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="product-card">
                @if($product->image)
                <div class="product-image-container">
                    <a href="{{ route('site.product.detail', $product->slug) }}">
                        <img src="{{ asset('storage/'.$product->image) }}" class="product-image" alt="{{ $product->title }}">
                    </a>
                    <div class="product-category-badge">{{ $category->title }}</div>
                </div>
                @endif
                <div class="product-info">
                    <h5 class="product-title"><a href="{{ route('site.product.detail', $product->slug) }}">{{ $product->title }}</a></h5>
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

@section('pageCSS')
<style>
    .product-card {
        background: transparent;
        border: none;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-5px);
    }

    .product-image-container {
        position: relative;
        margin-bottom: 15px;
    }

    .product-image {
        width: 100%;
        height: 280px;
        object-fit: cover;
        border-radius: 20px;
        border: 2px solid #8B6F47;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .product-category-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background-color: #8B6F47;
        color: white;
        padding: 5px 12px;
        border-radius: 15px;
        font-size: 12px;
        font-weight: 500;
        text-transform: uppercase;
    }

    .product-info {
        padding: 0 10px;
    }

    .product-title {
        color: #8B6F47;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 8px;
        text-align: center;
    }

    .product-price {
        color: #A0845C;
        font-size: 16px;
        font-weight: 500;
        margin: 0;
        text-align: center;
    }

    /* Category Navigation Buttons */
    .btn-outline-primary,
    .btn-primary {
        font-size: 14px;
        padding: 6px 16px;
        border-radius: 20px;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid #8B6F47;
    }

    .btn-outline-primary {
        background-color: transparent;
        color: #8B6F47;
        border-color: #8B6F47;
    }

    .btn-outline-primary:hover {
        background-color: #8B6F47;
        color: white;
        border-color: #8B6F47;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(139, 111, 71, 0.3);
    }

    .btn-primary {
        background-color: #8B6F47;
        color: white;
        border-color: #8B6F47;
        box-shadow: 0 2px 6px rgba(139, 111, 71, 0.3);
    }

    .btn-primary:hover {
        background-color: #7A5F3F;
        border-color: #7A5F3F;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(139, 111, 71, 0.4);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .product-image {
            height: 220px;
        }

        .product-title {
            font-size: 16px;
        }

        .product-price {
            font-size: 14px;
        }
    }

    @media (max-width: 576px) {
        .product-image {
            height: 200px;
            border-radius: 15px;
        }

        .product-category-badge {
            font-size: 10px;
            padding: 4px 8px;
        }
    }
</style>
@endsection