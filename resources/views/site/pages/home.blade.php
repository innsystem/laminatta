@extends('site.base')

@section('title', 'Lâminas Naturais e Compostas de Alta Qualidade')

@section('content')
<div class="th-hero-wrapper hero-3 hero-4 slider-area" id="hero">
    <div class="swiper th-slider" id="heroSlide4" data-slider-options='{"effect":"fade","autoHeight":true}'>
        <div class="swiper-wrapper">
            @forelse($sliders as $slider)
            <div class="swiper-slide" data-bg-src="{{ asset('storage/' . $slider->image) }}">
                <div class="hero-inner">
                    <div class="container">
                        <div class="hero-style4">
                            <div class="hero-star-rating" data-ani="slideinup" data-ani-delay="0.4s">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.6s">{{ $slider->title }}</h1>
                            @if($slider->subtitle)
                            <p class="hero-text" data-ani="slideinup" data-ani-delay="0.7s">{{ $slider->subtitle }}</p>
                            @endif
                            @if($slider->href)
                            <div class="btn-group mt-1" data-ani="slideinup" data-ani-delay="0.8s">
                                <a href="{{ $slider->href }}" class="th-btn2 th-icon" target="{{ $slider->target }}">SAIBA MAIS<i class="fas fa-arrow-right"></i></a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @empty
            {{-- Fallback content if no sliders are available --}}
            <div class="swiper-slide" data-bg-src="{{ asset('/storage/sliders/slider_1.png') }}">
                <div class="hero-inner">
                    <div class="container">
                        <div class="hero-style4">
                            <div class="hero-star-rating" data-ani="slideinup" data-ani-delay="0.4s">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.6s">Bem-vindo à Laminatta: Sua Experiência em Lâminas de Alta Qualidade </h1>
                            <p class="hero-text" data-ani="slideinup" data-ani-delay="0.7s">A Laminatta oferece o que há de melhor em lâminas naturais e compostas, proporcionando projetos únicos e duradouros com nossa expertise em prensagem.</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse
        </div>

        <button class="slider-arrow slider-prev slider-prev-bg"
            style="background-image: url({{ asset('/storage/sliders/slider_1.png') }});">
            <span class="arrow">
                <img src="{{ asset('tpl_site/img/icon/hero-arrow-left.svg') }}" alt="">
            </span>
        </button>
        <button class="slider-arrow slider-next slider-next-bg"
            style="background-image: url({{ asset('/storage/sliders/slider_2.png') }});">
            <span class="arrow">
                <img src="{{ asset('tpl_site/img/icon/hero-arrow-right.svg') }}" alt="">
            </span>
        </button>
    </div>
</div>

<div class=" overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="about-wrap4">
            <div class="row gx-0 gy-40">
                <div class="col-12">
                    <div class="about-wrap4-right">
                        <div class="about-wrap4-content">
                            <div class="about-content-wrap">
                                <div class="title-area mb-45">
                                    <span class="sub-title2 style1">SOBRE NÓS</span>
                                    <h2 class="sec-title">Bem-vindo à Laminatta: A Excelência em Lâminas e Prensagem</h2>
                                    <p class="sec-text mt-35 mb-20">Na Laminatta, dedicamo-nos a oferecer as melhores lâminas naturais e compostas, com um serviço de prensagem de alta precisão. Seu feedback é essencial para nós, e graças à satisfação de nossos clientes, a empresa cresce e se moderniza a cada ano.</p>
                                    <p class="sec-text">Se nossos produtos ou serviços não atenderem às suas expectativas, por favor, entre em contato. Faremos o possível para resolver suas necessidades. Nossa equipe está sempre à disposição, com mais de 15 anos de experiência e um forte senso de hospitalidade e dedicação ao seu projeto.</p>
                                </div>
                                <div class="btn-group mt-1">
                                    <a href="about.html" class="th-btn2 th-icon">SAIBA MAIS</a>
                                </div>
                            </div>
                            <div class="slider-wrap">
                                <div class="swiper th-slider about-room-slider" id="aboutroomSlider1"
                                    data-slider-options='{"slidesPerView":"1", "effect": "fade", "aautoHeight": "true"}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="about-room-card">
                                                <div class="box-img global-img">
                                                    <img src="{{ asset('/storage/abouts/image_402-393.png') }}" alt="imagem de lâmina">
                                                </div>
                                                <div class="box-content">
                                                    <div class="box-icon"><img
                                                            src="{{ asset('tpl_site/img/icon/feature_card_3.svg') }}" alt="ícone de característica">
                                                    </div>
                                                    <h3 class="box-title"><a href="room.html">Portfólio Completo de Lâminas</a></h3>
                                                    <p class="box-text">Descubra nossa vasta gama de lâminas naturais e compostas, cuidadosamente selecionadas para a máxima beleza e durabilidade em seus projetos.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="about-room-card">
                                                <div class="box-img global-img">
                                                    <img src="{{ asset('storage/abouts/image_402-393.png') }}" alt="imagem de serviço">
                                                </div>
                                                <div class="box-content">
                                                    <div class="box-icon"><img
                                                            src="{{ asset('tpl_site/img/icon/feature_card_2.svg') }}" alt="ícone de serviço">
                                                    </div>
                                                    <h3 class="box-title"><a href="room.html">Prensagem Térmica de Alta Precisão</a></h3>
                                                    <p class="box-text">Nosso serviço de prensagem térmica garante acabamentos perfeitos e a máxima adesão, ideal para marcenaria profissional e projetos sob medida.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="about-room-card">
                                                <div class="box-img global-img">
                                                    <img src="{{ asset('storage/abouts/image_402-393.png') }}" alt="imagem de segurança">
                                                </div>
                                                <div class="box-content">
                                                    <div class="box-icon"><img
                                                            src="{{ asset('tpl_site/img/icon/feature_card_1.svg') }}" alt="ícone de qualidade">
                                                    </div>
                                                    <h3 class="box-title"><a href="room.html">Compromisso com a Qualidade</a></h3>
                                                    <p class="box-text">Na Laminatta, cada detalhe é importante. Garantimos a qualidade superior de nossas lâminas e a excelência em todos os nossos processos.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="slider-pagination style2" data-slider-id="#aboutroomSlider1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="img-box7-2">
                            <div class="img1">
                                <img src="{{ asset('storage/abouts/image_544-777.png') }}" alt="imagem de design">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="offer-area5 position-relative overflow-hidden space-bottom overflow-hidden" id="offer-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="title-area">
                    <span class="sub-title2">LÂMINAS</span>
                    <h2 class="sec-title text-white">Naturais & Compostas</h2>
                </div>
            </div>
        </div>
        <div class="slider-area">
            <div class="laminas-container">
                <div class="laminas-scroll">
                    @forelse($products as $product)
                    <a href="{{ route('site.product.detail', $product->slug) }}" class="lamina-item">
                        <div class="lamina-img">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}">
                        </div>
                        <div class="lamina-title">
                            <h3>{{ $product->title }}</h3>
                        </div>
                    </a>
                    @empty
                    <p>Nenhum produto disponível no momento.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>


<section class="overflow-hidden space-bottom overflow-hidden" id="service-sec">
    <div class="container">
        <div class="row gy-60">
            <div class="col-12 service-card-wrap">
                <div class="service-card style3">
                    <div class="box-img">
                        <img src="{{ asset('/storage/services/image_970-450.png') }}" alt="Serviço de Prensagem">
                    </div>
                    <div class="box-content">
                        <h6 class="box-subtitle">Alta Precisão e Produtividade</h6>
                        <h3 class="box-title"><a href="service-details.html">Prensagem Térmica Profissional</a></h3>
                        <p class="box-text">Com mais de 30 anos de experiência com lâminas naturais e compostas, nossa empresa oferece um serviço de prensagem térmica altamente técnico e confiável, desenvolvido para atender as exigências da marcenaria profissional.</p>
                        <a href="#" class="th-btn2 style2 th-icon">SAIBA MAIS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('pageMODAL')
@endsection

@section('pageJS')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const laminasScroll = document.querySelector('.laminas-scroll');

        if (!laminasScroll) return;

        // Variáveis para controle de touch/drag
        let isDown = false;
        let startX;
        let scrollLeft;

        // Configurar eventos de mouse para desktop (drag to scroll)
        laminasScroll.addEventListener('mousedown', (e) => {
            isDown = true;
            laminasScroll.style.cursor = 'grabbing';
            startX = e.pageX - laminasScroll.offsetLeft;
            scrollLeft = laminasScroll.scrollLeft;
        });

        laminasScroll.addEventListener('mouseleave', () => {
            isDown = false;
            laminasScroll.style.cursor = 'grab';
        });

        laminasScroll.addEventListener('mouseup', () => {
            isDown = false;
            laminasScroll.style.cursor = 'grab';
        });

        laminasScroll.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - laminasScroll.offsetLeft;
            const walk = (x - startX) * 2; // Velocidade do scroll
            laminasScroll.scrollLeft = scrollLeft - walk;
        });

        // Configurar cursor para indicar que é arrastável
        laminasScroll.style.cursor = 'grab';

        // Navegação por teclado (setas esquerda/direita)
        laminasScroll.addEventListener('keydown', (e) => {
            const itemWidth = laminasScroll.querySelector('.lamina-item').offsetWidth + 20; // width + gap

            if (e.key === 'ArrowLeft') {
                e.preventDefault();
                laminasScroll.scrollBy({
                    left: -itemWidth,
                    behavior: 'smooth'
                });
            } else if (e.key === 'ArrowRight') {
                e.preventDefault();
                laminasScroll.scrollBy({
                    left: itemWidth,
                    behavior: 'smooth'
                });
            }
        });

        // Tornar focusável para navegação por teclado
        laminasScroll.setAttribute('tabindex', '0');

        // Configurar eventos de touch para mobile
        let touchStartX = 0;
        let touchEndX = 0;

        laminasScroll.addEventListener('touchstart', (e) => {
            touchStartX = e.touches[0].clientX;
        }, {
            passive: true
        });

        laminasScroll.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].clientX;
            handleSwipe();
        }, {
            passive: true
        });

        function handleSwipe() {
            const swipeThreshold = 50; // Distância mínima para considerar swipe
            const difference = touchStartX - touchEndX;

            if (Math.abs(difference) > swipeThreshold) {
                const itemWidth = laminasScroll.querySelector('.lamina-item').offsetWidth + 20;

                if (difference > 0) {
                    // Swipe para esquerda (próximo)
                    laminasScroll.scrollBy({
                        left: itemWidth,
                        behavior: 'smooth'
                    });
                } else {
                    // Swipe para direita (anterior)
                    laminasScroll.scrollBy({
                        left: -itemWidth,
                        behavior: 'smooth'
                    });
                }
            }
        }

        // Adicionar indicadores de início/fim do scroll (opcional)
        function updateScrollIndicators() {
            const container = document.querySelector('.laminas-container');
            const scrollWidth = laminasScroll.scrollWidth;
            const clientWidth = laminasScroll.clientWidth;
            const scrollLeft = laminasScroll.scrollLeft;

            // Remover classes existentes
            container.classList.remove('scroll-start', 'scroll-end', 'scroll-middle');

            if (scrollLeft <= 0) {
                container.classList.add('scroll-start');
            } else if (scrollLeft >= scrollWidth - clientWidth - 1) {
                container.classList.add('scroll-end');
            } else {
                container.classList.add('scroll-middle');
            }
        }

        // Atualizar indicadores no scroll
        laminasScroll.addEventListener('scroll', updateScrollIndicators);

        // Inicializar indicadores
        updateScrollIndicators();

        // Redimensionar handler para recalcular indicadores
        window.addEventListener('resize', () => {
            setTimeout(updateScrollIndicators, 100);
        });

        // Adicionar efeito de foco para acessibilidade
        const laminaItems = document.querySelectorAll('.lamina-item');

        laminaItems.forEach((item, index) => {
            item.setAttribute('tabindex', '0');
            item.setAttribute('role', 'button');
            item.setAttribute('aria-label', `Lâmina ${item.querySelector('h3').textContent}`);

            // Scroll para o item quando focado via teclado
            item.addEventListener('focus', () => {
                const itemRect = item.getBoundingClientRect();
                const containerRect = laminasScroll.getBoundingClientRect();

                if (itemRect.left < containerRect.left || itemRect.right > containerRect.right) {
                    item.scrollIntoView({
                        behavior: 'smooth',
                        block: 'nearest',
                        inline: 'center'
                    });
                }
            });

            // Ação no Enter/Space
            item.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    item.click();
                }
            });
        });
    });
</script>
@endsection

@section('pageCSS')
<style>
    .offer-area5 {
        min-height: 840px;
    }

    @media (max-width: 768px) {
        .offer-area5 {
            min-height: auto;
        }
    }

    /* Container principal das lâminas */
    .laminas-container {
        width: 100%;
        overflow: hidden;
        padding: 20px 0;
    }

    /* Scroll horizontal */
    .laminas-scroll {
        display: flex;
        gap: 60px;
        overflow-x: auto;
        overflow-y: hidden;
        scroll-behavior: smooth;
        padding: 10px 0 20px 0;
        -webkit-overflow-scrolling: touch;
        /* Smooth scroll no iOS */
    }

    /* Esconder scrollbar mas manter funcionalidade */
    .laminas-scroll::-webkit-scrollbar {
        height: 6px;
    }

    .laminas-scroll::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 3px;
    }

    .laminas-scroll::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.3);
        border-radius: 3px;
    }

    .laminas-scroll::-webkit-scrollbar-thumb:hover {
        background: rgba(255, 255, 255, 0.5);
    }

    /* Item individual da lâmina */
    .lamina-item {
        flex: 0 0 auto;
        text-align: center;
        cursor: pointer;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .lamina-item:hover {
        transform: translateY(-5px);
    }

    /* Container da imagem */
    .lamina-img {
        width: 100%;
        height: 450px;
        overflow: hidden;
        border-radius: 8px;
        margin-bottom: 15px;
        position: relative;
    }

    .lamina-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .lamina-item:hover .lamina-img img {
        transform: scale(1.05);
    }

    /* Título da lâmina */
    .lamina-title h3 {
        font-size: 16px;
        font-weight: 600;
        color: white;
        margin: 0;
        line-height: 1.4;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Desktop - 5 itens visíveis */
    @media (min-width: 992px) {
        .lamina-item {
            width: calc((100vw - 120px) / 5 - 16px);
            max-width: 250px;
            min-width: 200px;
        }
    }

    /* Tablet - 3 itens visíveis */
    @media (min-width: 768px) and (max-width: 991px) {
        .lamina-item {
            width: calc((100vw - 100px) / 3 - 14px);
            min-width: 180px;
        }

        .lamina-img {
            height: 180px;
        }
    }

    /* Mobile - 2 itens visíveis */
    @media (max-width: 767px) {
        .laminas-container {
            padding: 15px 0;
        }

        .laminas-scroll {
            gap: 15px;
            padding: 5px 0 15px 0;
        }

        .lamina-item {
            width: calc((100vw - 80px) / 2 - 8px);
            min-width: 140px;
            padding: 15px;
        }

        .lamina-img {
            height: 150px;
            margin-bottom: 10px;
        }

        .lamina-title h3 {
            font-size: 14px;
        }
    }

    /* Mobile pequeno */
    @media (max-width: 480px) {
        .lamina-item {
            width: calc((100vw - 70px) / 2 - 6px);
            min-width: 120px;
            padding: 12px;
        }

        .lamina-img {
            height: 120px;
        }

        .lamina-title h3 {
            font-size: 12px;
        }
    }

    /* Indicador visual de scroll */
    .laminas-container::after {
        content: '';
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        width: 30px;
        height: 30px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        pointer-events: none;
        opacity: 0.7;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='white' viewBox='0 0 16 16'%3E%3Cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 0.5;
        }

        50% {
            opacity: 1;
        }
    }

    /* Esconder indicador em desktop quando não há scroll */
    @media (min-width: 992px) {
        .laminas-container::after {
            display: none;
        }
    }

    /* Estados dos indicadores de scroll */
    .laminas-container {
        position: relative;
    }

    /* Gradientes laterais para indicar scroll disponível */
    .laminas-container.scroll-middle::before,
    .laminas-container.scroll-start::after,
    .laminas-container.scroll-end::before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        width: 30px;
        z-index: 10;
        pointer-events: none;
    }

    .laminas-container.scroll-middle::before,
    .laminas-container.scroll-end::before {
        left: 0;
        background: linear-gradient(to right, rgba(0, 0, 0, 0.3), transparent);
    }

    .laminas-container.scroll-middle::after,
    .laminas-container.scroll-start::after {
        right: 0;
        background: linear-gradient(to left, rgba(0, 0, 0, 0.3), transparent);
    }

    /* Animação suave para transições de estado */
    .laminas-container::before,
    .laminas-container::after {
        transition: opacity 0.3s ease;
    }

    /* Melhorar performance em dispositivos móveis */
    .laminas-scroll {
        transform: translateZ(0);
        will-change: scroll-position;
    }

    .lamina-item {
        transform: translateZ(0);
        will-change: transform;
    }

    /* Estado de carregamento (opcional) */
    .laminas-scroll.loading .lamina-item {
        opacity: 0;
        animation: fadeInUp 0.6s ease forwards;
    }

    .laminas-scroll.loading .lamina-item:nth-child(1) {
        animation-delay: 0.1s;
    }

    .laminas-scroll.loading .lamina-item:nth-child(2) {
        animation-delay: 0.2s;
    }

    .laminas-scroll.loading .lamina-item:nth-child(3) {
        animation-delay: 0.3s;
    }

    .laminas-scroll.loading .lamina-item:nth-child(4) {
        animation-delay: 0.4s;
    }

    .laminas-scroll.loading .lamina-item:nth-child(5) {
        animation-delay: 0.5s;
    }

    .laminas-scroll.loading .lamina-item:nth-child(6) {
        animation-delay: 0.6s;
    }

    .laminas-scroll.loading .lamina-item:nth-child(7) {
        animation-delay: 0.7s;
    }

    .laminas-scroll.loading .lamina-item:nth-child(8) {
        animation-delay: 0.8s;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endsection