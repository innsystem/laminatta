@extends('site.base')

@section('title', 'Categorias')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Categorias</h1>
        </div>
    </div>

    <div class="row">
        @if(count($categories) > 0)
            @foreach($categories as $category)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($category->image)
                    <img src="{{ $category->image }}" class="card-img-top" alt="{{ $category->title }}" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->title }}</h5>
                        @if($category->description)
                        <p class="card-text">{{ Str::limit($category->description, 120) }}</p>
                        @endif
                        <a href="{{ route('site.products.category', $category->slug) }}" class="btn btn-primary">Ver Produtos</a>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-12">
                <div class="alert alert-info">
                    <h4>Nenhuma categoria encontrada</h4>
                    <p>Não há categorias disponíveis no momento.</p>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection