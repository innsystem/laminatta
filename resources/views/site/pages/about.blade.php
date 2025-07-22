@extends('site.base')

@section('title', 'Sobre - Laminatta')

@section('content')
<section class="about-section space-top space-bottom">
    <div class="container">
        <!-- Hero Section -->
        <div class="row justify-content-center align-items-center mb-5">
            <div class="col-lg-6">
                <div class="about-content">
                    <h1 class="about-title">Sobre a Laminatta</h1>
                    <p class="about-subtitle">Tradição e qualidade em lâminas</p>
                    <p class="about-description">Na Laminatta, dedicamo-nos a oferecer as melhores lâminas naturais e compostas, com um serviço de prensagem de alta precisão. Seu feedback é essencial para nós, e graças à satisfação de nossos clientes, a empresa cresce e se moderniza a cada ano.</p>
                    <div class="about-stats">
                        <div class="stat-item">
                            <span class="stat-number">100+</span>
                            <span class="stat-label">Clientes Satisfeitos</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">15+</span>
                            <span class="stat-label">Anos de Experiência</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-image-wrapper">
                    <img src="{{ asset('/storage/abouts/image_404-633.png') }}" alt="Laminatta Marcenaria" class="about-image">
                </div>
            </div>
        </div>

        <!-- Contact CTA -->
        <div class="row">
            <div class="col-12">
                <div class="cta-section">
                    <h2>Pronto para realizar seu projeto?</h2>
                    <p>Entre em contato conosco e transforme sua ideia em realidade</p>
                    @if(isset($getSettings['cellphone']) && $getSettings['cellphone'] != '')
                    <a href="https://wa.me/@formatPhone($getSettings['cellphone'])" target="_Blank" class="cta-button">
                        <i class="fab fa-whatsapp"></i>
                        Solicitar Orçamento
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

