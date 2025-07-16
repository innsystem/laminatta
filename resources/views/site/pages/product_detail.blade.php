@extends('site.base')

@section('title', $product->title)

@section('content')
<section class="space-top space-bottom product-detail-section">
    <div class="container product-container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="product-image-wrapper">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="product-image">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-content">
                    <h1 class="product-title">{{ $product->title }}</h1>
                    <p class="product-description">{{ $product->description }}</p>
                    <a href="{{ route('site.index') }}" class="back-button">
                        <i class="fas fa-home"></i>
                        Início
                    </a>
                    <a href="{{ route('site.categories.index') }}" class="back-button ms-4">
                        <i class="fas fa-bars"></i>
                        Ver categoria
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('pageCSS')
<style>
    .product-detail-section {
        position: relative;
        overflow: hidden;
    }

    .product-container {
        position: relative;
        z-index: 2;
        animation: fadeInUp 0.8s ease-out;
    }

    .product-image-wrapper {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
        margin-bottom: 30px;
        padding: 40px 60px;
    }

    .product-image-wrapper:hover {
        transform: translateY(-5px);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
    }

    .product-image {
        width: 100%;
        height: auto;
        border-radius: 20px;
        transition: transform 0.3s ease;
    }

    .product-image:hover {
        transform: scale(1.02);
    }

    .product-content {
        position: relative;
        padding: 20px 0;
    }

    .product-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 25px;
        position: relative;
        line-height: 1.2;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .product-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 120px;
        height: 3px;
        background: linear-gradient(90deg, #795640, #311e11);
        border-radius: 2px;
    }

    .product-description {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #f8f9fa;
        margin-bottom: 30px;
        text-align: justify;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    .back-button {
        background: #FFF;
        color: #311e11;
        padding: 15px 30px;
        border: none;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgb(255 255 255 / 13%);
        position: relative;
        overflow: hidden;
    }

    .back-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .back-button:hover::before {
        left: 100%;
    }

    .back-button:hover {
        color: #311e11;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgb(255 255 255 / 14%);
    }

    .back-button i {
        font-size: 1.2rem;
        transition: transform 0.3s ease;
    }

    .back-button:hover i {
        transform: translateX(-3px);
    }

    @media (max-width: 768px) {
        .product-title {
            font-size: 2rem;
        }

        .product-content {
            padding: 15px 0;
            margin-top: 20px;
        }

        .product-description {
            font-size: 1rem;
        }

        .back-button {
            padding: 12px 25px;
            font-size: 0.9rem;
        }

        .product-image-wrapper {
            margin-bottom: 20px;
        }
    }

    @media (max-width: 480px) {
        .product-title {
            font-size: 1.8rem;
        }

        .product-content {
            padding: 10px 0;
        }
    }
</style>
@endsection