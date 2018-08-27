@extends('main.layout')
@section('content')
    @include('main.partials.carrousel')

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center element-top-70 os-animation big" data-os-animation="fadeIn" data-os-animation-delay="0s">
                        Algunos de nuestros servicios
                    </h1>
                    <div class="divider-border divider-border-center element-top-10 element-bottom-10 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                        <div class="divider-border-inner" style="width:60px;"> </div>
                    </div>
                    <div class="list-container row element-bottom-50 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">
                        <div class="col-md-3 element-bottom-20 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s"> <span class="service-simple-image">
                                <img alt="Visualise" src="/images/cctv.png" style="width: 60%">
                            </span>
                            <h2>CCTV</h2>
                            <p>Sistemas de Circuito Cerrado (“Closed Circuit TV”), detección inteligente para control.</p>
                        </div>
                        <div class="col-md-3 element-bottom-20 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s"> <span class="service-simple-image">
                                <img alt="Research" src="/images/voz-y-datos.png" style="width: 60%">
                            </span>
                            <h2>Voz y Datos</h2>
                            <p>Redes, conmutadores y enlaces para la comunicación efectiva y entretenimiento.</p>
                        </div>
                        <div class="col-md-3 element-bottom-20 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.3s"> <span class="service-simple-image">
                                <img alt="Develop" src="/images/control.png" style="width: 60%">
                            </span>
                            <h2>Control de Acceso</h2>
                            <p>Sistemas que dan seguridad y control para áreas restringidas y de peligro.</p>
                        </div>
                        <div class="col-md-3 element-bottom-20 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.3s"> <span class="service-simple-image">
                                <img alt="Develop" src="/images/safety.png" style="width: 60%">
                            </span>
                            <h2>Seguridad</h2>
                            <p>Sistemas de Detección y Prevención de Accidentes reduciendo los riesgos .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="background-overlay" style="background-color: rgba(1,192,225,1);"></div>
        <div class="container container-vertical-middle">
            <div class="row vertical-middle">
                <div class="col-md-10">
                    <h2 class="text-center element-top-60 element-bottom-60 text-light os-animation big light" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                        ¡Empecemos tu Proyecto HOY!
                    </h2>
                </div>
                <div class="col-md-2 text-center">
                    <a class="btn btn-primary btn-lg text-light btn-icon-right element-top-60 element-bottom-60" data-os-animation="none" data-os-animation-delay="0s" href="{{ route('main.contact') }}" target="_self">
                        Contactanos
                        <i class="fa fa-comment-o" data-animation="tada"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{--<section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center element-top-70 os-animation big" data-os-animation="fadeIn" data-os-animation-delay="0s">
                        “Vivamos nuestro futuro hoy y nuestros sueños serán la realidad del mañana”
                    </h1>
                    <div class="divider-border divider-border-center element-top-10 element-bottom-10 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                        <div class="divider-border-inner" style="width:60px;"> </div>
                    </div>
                    <p class="lead text-center center element-bottom-40 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">  Nos apasiona la tecnología, nada nos gusta mas que soñar con nuestros clientes y trabajar con sudor, determinación y pasión.
                        Cada proyecto es una nueva oportunidad para reinventarnos, cada proyecto nuevo, es <strong>NUESTRO PROYECTO!</strong>
                        Si soñamos juntos soñamos el doble.
                </div>
            </div>
        </div>
    </section>--}}
    <section class="section">
        <div class="background-overlay grid-overlay-0" style="background-color: rgba(250,250,250,1);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center element-top-70 os-animation big" data-os-animation="fadeIn" data-os-animation-delay="0s">
                        Casos de Éxito.
                    </h1>
                    <div class="divider-border divider-border-center element-top-10 element-bottom-10 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                        <div class="divider-border-inner" style="width:60px;"> </div>
                    </div>
                    <p class="lead text-center center element-bottom-40" data-os-animation="none" data-os-animation-delay="0s"> Cuando la pasión de nuestros clientes se combina con la nuestra, cosas increíbles son posibles.</p>
                    <div class="element-bottom-50 recent-simple-os-container row">
                        <div class="col-md-4" data-os-animation="none" data-os-animation-delay="0s">
                            <article class="post-grid post-grid-overlay element-bottom-20 text-left" style="background-image: url(/images/fiat.jpg)">
                                <a href="{{ route('main.success.item', 'fiat-chrysler') }}">
                                    <div class="post-grid-content">
                                        <h3 class="post-grid-content-title">Fiat Chrysler.</h3>
                                        <div class="post-grid-content-footer"> Julio 20, 2017.</div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="col-md-4" data-os-animation="none" data-os-animation-delay="0s">
                            <article class="post-grid post-grid-overlay element-bottom-20 text-left" style="background-image: url(/images/comanches.jpg)">
                                <a href="{{ route('main.success.item', 'corporativo-crocsa') }}">
                                    <div class="post-grid-content">
                                        <h3 class="post-grid-content-title">Los Comanches Monterrey.</h3>
                                        <div class="post-grid-content-footer"> Mayo 18, 2017.</div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="col-md-4" data-os-animation="none" data-os-animation-delay="0s">
                            <article class="post-grid post-grid-overlay element-bottom-20 text-left" style="background-image: url(/images/torre.jpg)">
                                <a href="{{ route('main.success.item', 'departamento-torre-sofia') }}">
                                    <div class="post-grid-content">
                                        <h3 class="post-grid-content-title">Departamento Torre Sofía.</h3>
                                        <div class="post-grid-content-footer"> Abril 18, 2016. </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="col-md-4" data-os-animation="none" data-os-animation-delay="0s">
                            <article class="post-grid post-grid-overlay element-bottom-20 text-left" style="background-image: url(/images/casapriv.jpeg)">
                                <a href="{{ route('main.success.item', 'casa-particular') }}">
                                    <div class="post-grid-content">
                                        <h3 class="post-grid-content-title">Casa particular</h3>
                                        <div class="post-grid-content-footer"> Julio 6, 2016. </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="col-md-4" data-os-animation="none" data-os-animation-delay="0s">
                            <article class="post-grid post-grid-overlay element-bottom-20 text-left" style="background-image: url(/images/hospital.jpg)">
                                <a href="{{ route('main.success.item', 'christus-muguerza') }}">
                                    <div class="post-grid-content">
                                        <h3 class="post-grid-content-title">Christus Muguerza.</h3>
                                        <div class="post-grid-content-footer"> Junio 2, 2017. </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="col-md-4" data-os-animation="none" data-os-animation-delay="0s">
                            <article class="post-grid post-grid-overlay element-bottom-20 text-left" style="background-image: url(/images/superior-industries.jpg)">
                                <a href="{{ route ('main.success.item', 'superior-industries') }}">
                                    <div class="post-grid-content">
                                        <h3 class="post-grid-content-title">Superior Industries.</h3>
                                        <div class="post-grid-content-footer"> Abril 13, 2017. </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
