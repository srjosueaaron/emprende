<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EMPRENDE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

   <!-- Topbar Start -->
<div class="container-fluid bg-dark px-3 py-2 d-sm-block">
    <div class="row gx-0">
        <div class="col-sm-8 text-center text-sm-start mb-2 mb-sm-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-2 me-sm-3 text-light"><i class="fa fa-map-marker-alt me-1"></i>Calle 14 de abril #10, Santa María Tonanitla, México</small>
                <small class="text-light d-none d-sm-inline"><i class="fa fa-envelope-open me-1"></i>enlacescomercialesemprende@gmail.com</small>
            </div>
        </div>
        <div class="col-sm-4 text-center text-sm-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/emprendesi?mibextid=ZbWKwL"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://api.whatsapp.com/send?phone=5646974462"><i class="fab fa-whatsapp fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->



    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-3 py-3 py-lg-0">
        <a href="{{ route('index') }}" class="navbar-brand p-0">
            <img src="{{ asset('assets/img/logos/emprende.png') }}" alt="Logo" height="90">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-2 py-lg-0">
               <a href="{{ route('index') }}" class="nav-item nav-link active" style="color: black; font-size: 18px;">Inicio</a>
                <a href="#acerca-de" class="nav-item nav-link" style="color: black; font-size: 18px;">Acerca de</a>
                <a href="#beneficios" class="nav-item nav-link" style="color: black; font-size: 18px;">Beneficios</a>
                <a href="#membresia" class="nav-item nav-link" style="color: black; font-size: 18px;">Membres&iacutea</a>
                <a href="#directorio" class="nav-item nav-link" style="color: black; font-size: 18px;">Directorio</a>
                <a href="#proyectos" class="nav-item nav-link" style="color: black; font-size: 18px;">Proyectos</a>
                <a href="#contacto" class="nav-item nav-link" style="color: black; font-size: 18px;">Contacto</a>
                <button class="btn btn-primary nav-item nav-link" style="color: black; font-size: 18px;" onclick="window.location.href='/egresados'">Iniciar Sesión</button>
            
            </div>
        </div>
    </nav>
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('assets/img/logos/prueba.jpeg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-5 text-white mb-4 animated zoomIn">Reci&eacuten egresas y no sabes cómo empezar?</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/img/carousel-2.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-5 text-white mb-4 animated zoomIn">Juntos logramos m&aacutes</h1>
                        <a href="https://api.whatsapp.com/send?phone=5646974462" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Quiero participar</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
    <!-- Navbar & Carousel End -->

    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0 justify-content-center"> <!-- Añadimos justify-content-center para centrar las columnas horizontalmente -->
            <div class="col-lg-4 wow zoomIn d-flex justify-content-center" data-wow-delay="0.1s"> <!-- Añadimos d-flex y justify-content-center para centrar el contenido horizontalmente -->
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 180px; width:600px">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <img src="{{ asset('assets/img/logos/mision.png') }}" width="80" height="80">
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Misi&oacuten</h5>
                        <p style="text-align: justify;">Proporcionar una alternativa que incentive a profesionales mediante herramientas y espacios para el auge emprendedor.</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn d-flex justify-content-center" data-wow-delay="0.3s"> <!-- Añadimos d-flex y justify-content-center para centrar el contenido horizontalmente -->
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 180px; width:600px">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <img src="{{ asset('assets/img/logos/vision.png') }}" width="80" height="80">
                    </div>
                    <div class="ps-4">
                        <h5 class="text-primary mb-0">Visi&oacuten</h5>
                        <p style="text-align: justify;">Incorporar el modelo de negocio dentro de las comunidades locales para lograr un posicionamiento importante dentro del ramo  emprendedor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Facts Start -->


    <!-- About Start -->
    <div id="acerca-de" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        
                        <h1 class="mb-0">Acerca de...</h1>
                    </div>
                    <p class="mb-4">Emprende es....</p>
                    <p class="mb-4">Sus valores son:</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Innovaci&oacuten</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Trabajo cooperativo</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Pasi&oacuten</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Transparencia</h5>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/acerca.jpeg') }}" wigth="100">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- BENEFICIOS -->
    <div id="beneficios" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">¿Por qué unirte a emprende?</h5>
                <h1 class="mb-0">Beneficios</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Experiencia</h4>
                            <p class="mb-0">Mejora tus habilidades incursionando en trabajos de la localidad.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Posicionamiento</h4>
                            <p class="mb-0">Sé reconocido por la comunidad de Nextlalpan y sus alrededores mediante tus aptitudes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{ asset('assets/img/beneficios.jpeg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Difusi&oacuten</h4>
                            <p class="mb-0">Personal capacitado para mejorar e incrementar tu &eacutexito por medio de difusi&oacuten digital. </p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>Soporte</h4>
                            <p class="mb-0">Disponibles para resolver todas tus dudas los 365 di&aacutes del año.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN BENEFICIOS -->


    <!-- INICIO MEMEBRESÍA -->
    <div id="membresia" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Planes de Membres&iacutea</h5>
                <h1 class="mb-0">Estos son los costos para interesados en colaborar</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Plan B&aacutesico</h4>
                            <small class="text-uppercase">Paquete por renta mensual</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>500.00<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ MXN</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Difusi&oacuten en redes sociales</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Cub&iacuteculo amueblado</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Acceso a Internet</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Membres&iacutea f&iacutesica</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span >Solo 10 horas por utilización de espacio</span><i class="fas fa-exclamation-circle text-warning pt-1"></i></div>
                            <a href="https://api.whatsapp.com/send?phone=5646974462" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Plan Est&aacutendar</h4>
                            <small class="text-uppercase">Paquete por renta mensual</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>1,000.00<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ MXN</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Difusi&oacuten en redes sociales</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Cub&iacuteculo amueblado</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Acceso a Internet</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Membres&iacutea f&iacutesica</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span >Solo 25 horas por utilización de espacio</span><i class="fas fa-exclamation-circle text-warning pt-1"></i></div>
                            <a href="https://api.whatsapp.com/send?phone=5646974462" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Plan Premium</h4>
                            <small class="text-uppercase">Paquete por renta mensual</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>3,000.00<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ MXN</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Difusi&oacuten en redes sociales</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Cub&iacuteculo amueblado</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Acceso a Internet</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Membres&iacutea f&iacutesica</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Solo 60 horas por utilización de espacio</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="https://api.whatsapp.com/send?phone=5646974462" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN MEMBRESIA-->


     <!-- DIRECTORIO  -->
    <div id="directorio" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
    
                @foreach ($publicaciones as $egresado)
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex justify-content-center align-items-center border-bottom pt-5 pb-4 px-5">
                        <img width="360" height="360" class="img-fluid rounded" src="{{ asset('storage').'/'.$egresado->foto }}" alt="{{ $egresado->nombre }}">
                    </div>
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">{{ $egresado->nombre }}</h4>
                            <small class="text-uppercase">{{ $egresado->profesion }}</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        {{ $egresado->universidad }}
                        <br>
                        <a class="btn btn-primary btn-square me-2" href=" {{ $egresado->red1 }}"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-primary btn-square me-2" href=" {{ $egresado->red2 }}"><i class="fab fa-whatsapp fw-normal"></i></a>

                    </div>
                </div>
                @endforeach
    
            </div>   <!-- DIRECTORIO  -->
    
        </div>
    </div>
    


    <!-- INICIO CATEGORÍAS -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Miembros del equipo</h5>
                <h1 class="mb-0">Listos para lograr un posicionamiento</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-2.jpg') }}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/team-3.jpg') }}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN CATEGORÍAS -->

    <!-- INICIO LOGOS -->
    <div id="proyectos" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Conoce todos nuestros proyectos</h1>
            </div>
            <div class="bg-white">
            <div class="owl-carousel vendor-carousel">
                 <img src="{{ asset('assets/img/logos/vicorla.jpeg') }}" alt="">
                 <img src="{{ asset('assets/img/logos/red.jpeg') }}" alt="">
                 <img src="{{ asset('assets/img/logos/enlaces.jpeg') }}" alt="" height="100">
                 <img src="{{ asset('assets/img/logos/local.jpeg') }}" alt="">
                 <img src="{{ asset('assets/img/logos/kaisa.jpeg') }}" alt="">
                 <img src="{{ asset('assets/img/logos/entregas.jpeg') }}" alt="">
                 <img src="{{ asset('assets/img/logos/taxia.jpeg') }}" alt="">
                 <img src="{{ asset('assets/img/logos/park.jpeg') }}" alt="">
                 <img src="{{ asset('assets/img/logos/card.jpeg') }}" alt="">  
             </div>
            </div>
        </div>
    </div>
    <!-- FIN LOGOS -->
 

    <!-- INICIO CONTACTO -->
    <div id="contacto" class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Ubicación</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Calle 14 de abril #10, Santa María Tonanitla, México</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">enlacescomerciales@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+5646974462</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="https://www.facebook.com/emprendesi?mibextid=ZbWKwL"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://api.whatsapp.com/send?phone=5646974462"><i class="fab fa-whatsapp fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="https://instagram.com/emprende.ofc?igshid=MzRlODBiNWFlZA=="><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-8">
                            <div class="section-title section-title-sm position-relative pb-3 mb-8">
                            <h3 class="text-light mb-0 text-center"> &nbsp  &nbsp Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="https://www.facebook.com/vicorlaholding"><i class="bi bi-arrow-right text-primary me-2"></i>Vicorla</a>
                                <a class="text-light mb-2" href="https://www.facebook.com/reddeempresariosmx"><i class="bi bi-arrow-right text-primary me-2"></i>Red de empresarios</a>
                                <a class="text-light mb-2" href="https://www.facebook.com/EnlacesComercialesMex"><i class="bi bi-arrow-right text-primary me-2"></i>Enlaces comerciales</a>
                                <a class="text-light mb-2" href="https://www.facebook.com/profile.php?id=100093140826820"><i class="bi bi-arrow-right text-primary me-2"></i>Local Places</a>
                                <a class="text-light mb-2" href="https://www.facebook.com/GrupoKaisa"><i class="bi bi-arrow-right text-primary me-2"></i>Grupo Kaisa</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="https://www.facebook.com/profile.php?id=100091282137047"><i class="bi bi-arrow-right text-primary me-2"></i>Entregas</a>
                                <a class="text-light mb-2" href="https://www.facebook.com/profile.php?id=100091765893852"><i class="bi bi-arrow-right text-primary me-2"></i>Taxia</a>
                                <a class="text-light mb-2" href="https://www.facebook.com/profile.php?id=100091728976596"><i class="bi bi-arrow-right text-primary me-2"></i>E-Park</a>
                                <a class="text-light mb-2" href="https://www.facebook.com/profile.php?id=100095151096623"><i class="bi bi-arrow-right text-primary me-2"></i>Ecard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center" style="height: 75px;">
                    <p class="mb-0 text-center">
                        &copy; <a class="text-white border-bottom" href="#">VICORLA S.A de C.V</a>. All Rights Reserved. <br>
                        Designed by <a class="text-white">Karen Vázquez & Aaron Rivero</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>

