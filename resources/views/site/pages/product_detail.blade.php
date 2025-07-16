@extends('site.base')

@section('title', $product->title)

@section('content')
<section class="space-top space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="img-fluid mb-4">
                <h1 class="mb-3">{{ $product->title }}</h1>
                <p>{{ $product->description }}</p>
                <a href="{{ route('site.index') }}" class="th-btn2 th-icon mt-4">Voltar para a Home</a>
            </div>
        </div>
    </div>
</section>
@endsection 