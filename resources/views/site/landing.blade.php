<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InnSystem - Transforme sua presença digital</title>
    <meta name="description" content="Criação de sites profissionais e lojas virtuais personalizadas. Projetos rápidos, eficientes e com resultados. Desenvolvimento Web de alta qualidade." />
    <meta name="author" content="Desenvolvedor Web Profissional" />

    <meta property="og:title" content="Desenvolvimento Web | Sites e Lojas Virtuais Profissionais" />
    <meta property="og:description" content="Criação de sites profissionais e lojas virtuais personalizadas. Projetos rápidos, eficientes e com resultados." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://lovable.dev/opengraph-image-p98pqg.png" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@lovable_dev" />
    <meta name="twitter:image" content="https://lovable.dev/opengraph-image-p98pqg.png" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('/plugins/bootstrap-5.3.5/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free-6.7.2/css/all.min.css') }}">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('/plugins/animate.css/animate.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('tpl_site/style.css?1'.rand()) }}">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KKMSQ5ZTDZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-KKMSQ5ZTDZ');
    </script>

</head>

<body>
    <!-- Hero Section -->
    <section id="hero" class="hero-section">
        <div id="particles-js" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 0;"></div>
        <div class="bg-overlay"></div>
        <div class="animated-shape shape-1"></div>
        <div class="animated-shape shape-2"></div>

        <div class="container position-relative z-index-1">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 text-center">
                    <img src="{{ asset('/innsystem-logo-light.png') }}" alt="Logo" class="img-fluid mb-5" style="width: 250px;">

                    <h1 class="display-4 fw-bold mb-4 mt-3">
                        Transforme sua <br> <span class="gradient-text text-uppercase">presença digital</span> <br> <small> com site para sua empresa!</small>
                    </h1>
                    <p class="fs-5 text-white-50 mb-5">
                        Destaque-se da concorrência e conquiste mais clientes com um site profissional feito sob medida para o seu negócio
                    </p>
                    <a href="https://wa.me/5516992747526?text=Olá,%20gostaria%20de%20informações%20sobre%20criação%20de%20sites"
                        class="btn cta-button" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i> Fale agora pelo WhatsApp
                    </a>
                </div>
            </div>
        </div>

        <div class="diagonal-divider"></div>
    </section>

    <!-- Institutional Section -->
    <section id="institutional" class="py-5 bg-white">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="section-title mb-4">Criação de Site Institucional</h2>
                    <p class="section-text mb-5">
                        Seu negócio precisa de um site profissional que transmita confiança aos seus clientes. Através de um design moderno e funcional, desenvolvemos sites institucionais que convertem visitantes em clientes.
                    </p>

                    <div class="row g-4 mb-5">
                        <!-- Benefit 1 -->
                        <div class="col-md-6 col-lg-3">
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <i class="fas fa-layer-group"></i>
                                </div>
                                <h3 class="benefit-title">Design Profissional</h3>
                                <p class="benefit-text">Layout moderno e alinhado com a identidade da sua marca</p>
                            </div>
                        </div>

                        <!-- Benefit 2 -->
                        <div class="col-md-6 col-lg-3">
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <h3 class="benefit-title">Otimizado</h3>
                                <p class="benefit-text">Carregamento rápido e preparado para SEO</p>
                            </div>
                        </div>

                        <!-- Benefit 3 -->
                        <div class="col-md-6 col-lg-3">
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <h3 class="benefit-title">Responsivo</h3>
                                <p class="benefit-text">Adaptado para todos os dispositivos: desktop, tablet e celular</p>
                            </div>
                        </div>

                        <!-- Benefit 4 -->
                        <div class="col-md-6 col-lg-3">
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <h3 class="benefit-title">Rápida Entrega</h3>
                                <p class="benefit-text">Projetos prontos entre 7 e 15 dias úteis</p>
                            </div>
                        </div>
                    </div>

                    <a href="https://wa.me/5516992747526?text=Olá,%20tenho%20interesse%20em%20um%20site%20institucional"
                        class="btn cta-button" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i> Fale agora pelo WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- E-commerce Section -->
    <section id="ecommerce" class="py-5 bg-light">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="section-title mb-4">Loja Virtual / E-commerce</h2>
                    <p class="section-text mb-5">
                        Venda seus produtos online 24 horas por dia, 7 dias por semana! Criamos lojas virtuais completas, seguras e fáceis de gerenciar para impulsionar suas vendas.
                    </p>

                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="service-card">
                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGVjb21tZXJjZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=800&q=60"
                                    alt="E-commerce" class="img-fluid rounded mb-4">
                                <h3 class="service-title">Loja Virtual Completa</h3>
                                <ul class="feature-list">
                                    <li><i class="fas fa-check me-2"></i> Catálogo de produtos organizado</li>
                                    <li><i class="fas fa-check me-2"></i> Integração com meios de pagamento</li>
                                    <li><i class="fas fa-check me-2"></i> Cálculo de frete automático</li>
                                    <li><i class="fas fa-check me-2"></i> Painel administrativo intuitivo</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="service-card">
                                <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjJ8fG9ubGluZSUyMHN0b3JlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60"
                                    alt="Mobile E-commerce" class="img-fluid rounded mb-4">
                                <h3 class="service-title">Experiência Mobile Otimizada</h3>
                                <ul class="feature-list">
                                    <li><i class="fas fa-check me-2"></i> Design responsivo</li>
                                    <li><i class="fas fa-check me-2"></i> Checkout simplificado</li>
                                    <li><i class="fas fa-check me-2"></i> Carregamento rápido</li>
                                    <li><i class="fas fa-check me-2"></i> Experiência de compra intuitiva</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <a href="https://wa.me/5516992747526?text=Olá,%20tenho%20interesse%20em%20uma%20loja%20virtual"
                        class="btn cta-button" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i> Quero uma Loja Virtual
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Projects Section -->
    <section id="custom-projects" class="py-5 bg-white">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="section-title mb-4">Projetos Sob Medida</h2>
                    <p class="section-text mb-5">
                        Precisa de uma solução personalizada para seu negócio? Desenvolvemos projetos customizados que atendem às necessidades específicas da sua empresa.
                    </p>

                    <div class="row g-4 mb-5">
                        <div class="col-lg-4">
                            <div class="custom-card">
                                <div class="custom-icon">
                                    <i class="fas fa-code"></i>
                                </div>
                                <h3>Desenvolvimento Personalizado</h3>
                                <p>Soluções web criadas especificamente para atender às demandas únicas do seu negócio</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="custom-card">
                                <div class="custom-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h3>Sistemas de Gestão</h3>
                                <p>Automatize processos e aumente a produtividade com sistemas personalizados</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="custom-card">
                                <div class="custom-icon">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <h3>Suporte Dedicado</h3>
                                <p>Equipe especializada para dar todo o suporte necessário durante e após o desenvolvimento</p>
                            </div>
                        </div>
                    </div>

                    <a href="https://wa.me/5516992747526?text=Olá,%20tenho%20interesse%20em%20um%20projeto%20personalizado"
                        class="btn cta-button" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i> Solicitar orçamento
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Final Section -->
    <section id="contact" class="py-5 final-section">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center text-white">
                    <h2 class="display-6 fw-bold mb-4">Vamos transformar suas <br> ideias em realidade!</h2>
                    <p class="fs-5 mb-5">
                        Entre em contato agora mesmo e receba <br> uma proposta personalizada para o seu projeto
                    </p>

                    <a href="https://wa.me/5516992747526?text=Olá,%20gostaria%20de%20solicitar%20um%20orçamento"
                        class="btn btn-light btn-lg px-5 fw-bold" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i> Solicitar orçamento
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Copyright -->
    <footer class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="social-icons mb-3">
                        <a href="https://facebook.com/innsystem" target="_blank" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://instagram.com/innsystem" target="_blank" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UC4bXTS73cCs_qzY29M6J2lw" target="_blank" class="social-icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                    <small>
                        Todos os Direitos Reservados | Copyright © 2010 ~ {{ date('Y') }} <br>
                        InnSystem Inovação em Sistemas - CNPJ: 21.635.247/0001-54 Ribeirão Preto/SP
                    </small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <div class="whatsapp_futuante pulsaDelay animate__animated animate__tada">
        <a href="https://wa.me/5516992747526?text=Olá,%20gostaria%20de%20mais%20informações" target="_Blank"><i class="fab fa-whatsapp"></i></a>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="{{ asset('tpl_site/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/plugins/bootstrap-5.3.5/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('tpl_site/script.js') }}"></script>

    <!-- Particles.js -->
    <script src="{{ asset('/plugins/particles.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            /* Configuração do particles.js */
            particlesJS("particles-js", {
                "particles": {
                    "number": {
                        "value": 100,
                        "density": {
                            "enable": true,
                            "value_area": 1000
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "edge",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        }
                    },
                    "opacity": {
                        "value": 0.15,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#1290EF",
                        "opacity": 0.2,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": false
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 0.5
                            }
                        }
                    }
                },
                "retina_detect": true
            });
        });
    </script>
</body>

</html>