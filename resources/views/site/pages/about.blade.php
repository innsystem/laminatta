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
                    <a href="{{ route('site.index') }}" class="cta-button">
                        <i class="fas fa-phone"></i>
                        Solicitar Orçamento
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('pageCSS')
<style>
    .about-section {
        position: relative;
        overflow: hidden;
    }
    
    .about-content {
        padding: 20px 0;
    }
    
    .about-title {
        font-size: 3rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        position: relative;
    }
    
    .about-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #8B4513, #A0522D);
        border-radius: 2px;
    }
    
    .about-subtitle {
        font-size: 1.3rem;
        color: #D2B48C;
        margin-bottom: 25px;
        font-style: italic;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    }
    
    .about-description {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #f8f9fa;
        margin-bottom: 40px;
        text-align: justify;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }
    
    .about-stats {
        display: flex;
        gap: 30px;
        margin-bottom: 30px;
        flex-wrap: wrap;
    }
    
    .stat-item {
        text-align: center;
        padding: 20px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: transform 0.3s ease;
    }
    
    .stat-item:hover {
        transform: translateY(-5px);
    }
    
    .stat-number {
        display: block;
        font-size: 2.5rem;
        font-weight: 700;
        color: #ffffff;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }
    
    .stat-label {
        font-size: 0.9rem;
        color: #D2B48C;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .about-image-wrapper {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease;
    }
    
    .about-image-wrapper:hover {
        transform: translateY(-5px);
    }
    
    .about-image {
        width: 100%;
        height: 500px;
        object-fit: cover;
        border-radius: 20px;
    }
    
    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, rgba(139, 69, 19, 0.3), rgba(160, 82, 45, 0.3));
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .about-image-wrapper:hover .image-overlay {
        opacity: 1;
    }
    
    .play-icon {
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: #8B4513;
        transition: transform 0.3s ease;
    }
    
    .play-icon:hover {
        transform: scale(1.1);
    }
    
    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #ffffff;
        text-align: center;
        margin-bottom: 50px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        position: relative;
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #8B4513, #A0522D);
        border-radius: 2px;
    }
    
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-bottom: 50px;
    }
    
    .service-card {
        background: rgba(255, 255, 255, 0.1);
        padding: 30px;
        border-radius: 20px;
        text-align: center;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
    }
    
    .service-card:hover {
        transform: translateY(-10px);
        background: rgba(255, 255, 255, 0.15);
    }
    
    .service-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(45deg, #8B4513, #A0522D);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 2rem;
        color: #ffffff;
        box-shadow: 0 10px 20px rgba(139, 69, 19, 0.3);
    }
    
    .service-card h3 {
        font-size: 1.5rem;
        color: #ffffff;
        margin-bottom: 15px;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    }
    
    .service-card p {
        color: #f8f9fa;
        line-height: 1.6;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }
    
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        margin-bottom: 50px;
    }
    
    .gallery-item {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease;
    }
    
    .gallery-item:hover {
        transform: scale(1.05);
    }
    
    .gallery-item img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    
    .gallery-item:hover img {
        transform: scale(1.1);
    }
    
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-bottom: 50px;
    }
    
    .team-card {
        background: rgba(255, 255, 255, 0.1);
        padding: 30px;
        border-radius: 20px;
        text-align: center;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: transform 0.3s ease;
    }
    
    .team-card:hover {
        transform: translateY(-10px);
    }
    
    .team-image {
        width: 120px;
        height: 120px;
        margin: 0 auto 20px;
        border-radius: 50%;
        overflow: hidden;
        border: 4px solid rgba(255, 255, 255, 0.3);
    }
    
    .team-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .team-card h4 {
        font-size: 1.3rem;
        color: #ffffff;
        margin-bottom: 10px;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    }
    
    .team-card p {
        color: #D2B48C;
        margin-bottom: 5px;
        font-weight: 600;
    }
    
    .team-card span {
        color: #f8f9fa;
        font-size: 0.9rem;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }
    
    .cta-section {
        background: linear-gradient(45deg, rgba(139, 69, 19, 0.2), rgba(160, 82, 45, 0.2));
        padding: 60px 40px;
        border-radius: 25px;
        text-align: center;
        backdrop-filter: blur(15px);
        border: 2px solid rgba(255, 255, 255, 0.1);
    }
    
    .cta-section h2 {
        font-size: 2.2rem;
        color: #ffffff;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }
    
    .cta-section p {
        font-size: 1.2rem;
        color: #f8f9fa;
        margin-bottom: 30px;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }
    
    .cta-button {
        background: #ffa400;
    color: #21130a;
        padding: 18px 40px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 1.1rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        transition: all 0.3s ease;
        box-shadow: 0 8px 25px rgba(139, 69, 19, 0.4);
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .cta-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(139, 69, 19, 0.6);
    }
    
    @media (max-width: 768px) {
        .about-title {
            font-size: 2.2rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .about-stats {
            gap: 15px;
        }
        
        .stat-item {
            padding: 15px;
            flex: 1;
        }
        
        .stat-number {
            font-size: 2rem;
        }
        
        .about-image {
            height: 350px;
        }
        
        .services-grid,
        .team-grid {
            grid-template-columns: 1fr;
        }
        
        .gallery-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }
        
        .cta-section {
            padding: 40px 20px;
        }
        
        .cta-section h2 {
            font-size: 1.8rem;
        }
    }
    
    @media (max-width: 480px) {
        .about-title {
            font-size: 1.8rem;
        }
        
        .section-title {
            font-size: 1.6rem;
        }
        
        .about-stats {
            flex-direction: column;
            gap: 10px;
        }
        
        .gallery-grid {
            grid-template-columns: 1fr;
        }
        
        .about-image {
            height: 300px;
        }
    }
</style>
@endsection