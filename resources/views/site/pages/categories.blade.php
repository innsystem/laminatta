@extends('site.base')

@section('title', 'Conheça nossas lâminas de madeira')

@section('content')
<div class="container py-4">
    <div class="row my-3">
        <div class="col-12">
            <h1 class="h3 mb-2">@yield('title')</h1>
            <h4 class="h5 mb-4">Eleve seus projetos a um novo nível com a qualidade e a beleza única que só a madeira pode oferecer.</h4>
        </div>
    </div>

    <div class="row my-5 py-5">
        <div class="col-12 col-md-5">
            <img src="{{ asset('/storage/abouts/categories.png') }}" alt="" class="img-fluid rounded" style="height: 400px;object-fit: cover;border-radius: 10px;box-shadow: 0 0 20px rgba(0,0,0,0.2);">
        </div>
        <div class="col-12 col-md-7">
            <h3 class="h2 mb-4 text-white">Lâminas de Madeira</h3>
            <p class="fs-4">As lâminas de madeira são versáteis e elegantes, ideais para móveis, revestimentos e projetos de diferentes estilos. Disponíveis em diversas espécies e acabamentos, combinam beleza natural, durabilidade e sustentabilidade, valorizando ambientes e produtos com sofisticação e funcionalidade.</p>
        </div>
    </div>

    <div class="row my-5 py-5">
        @if(count($categories) > 0)
            @foreach($categories as $category)
            <div class="col-md-4 mb-4">
                <div class="card-laminas h-100 px-0 px-lg-4">
                    @if($category->image)
                    <a href="{{ route('site.products.category', $category->slug) }}"><img src="{{ asset('storage/'.$category->image) }}" class="card-img-top" alt="{{ $category->title }}" style="height: 600px;object-fit: cover;border-radius: 10px;box-shadow: 0 0 20px rgba(0,0,0,0.2);"></a>
                    @endif
                    <div class="card-body">
                        <h4 class="card-title text-center"><a href="{{ route('site.products.category', $category->slug) }}">{{ $category->title }}</a></h4>
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