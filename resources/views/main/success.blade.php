@extends('main.layout')
@section('content')
    <section class="section">
        <div class="background-overlay" style="background-color: rgba(1,192,225,1);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-left element-top-70 element-bottom-70 text-light big">Casos de éxito.</h1> </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="background-overlay grid-overlay-0" style="background-color: rgba(250,250,250,1);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="divider-border divider-border-center element-top-10 element-bottom-10 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                        <div class="divider-border-inner" style="width:60px;"> </div>
                    </div>
                    <div class="element-bottom-50 recent-simple-os-container row">
                        <div class="col-md-4" data-os-animation="none" data-os-animation-delay="0s">
                            <article class="post-grid post-grid-overlay element-bottom-20 text-left" style="background-image: url(/images/fca.jpeg)">
                                <a href="{{ route('main.success.item', 'fiat-chrysler') }}">
                                    <div class="post-grid-content">
                                        <h3 class="post-grid-content-title">Fiat Chrysler.</h3>
                                        <div class="post-grid-content-footer"> Julio 20, 2015.</div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="col-md-4" data-os-animation="none" data-os-animation-delay="0s">
                            <article class="post-grid post-grid-overlay element-bottom-20 text-left" style="background-image: url(/images/comanches.jpg)">
                                <a href="{{ route('main.success.item', 'corporativo-crocsa') }}">
                                    <div class="post-grid-content">
                                        <h3 class="post-grid-content-title">Los Comanches Monterrey.</h3>
                                        <div class="post-grid-content-footer"> Mayo 18, 2015.</div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="col-md-4" data-os-animation="none" data-os-animation-delay="0s">
                            <article class="post-grid post-grid-overlay element-bottom-20 text-left" style="background-image: url(/images/torre.jpg)">
                                <a href="{{ route('main.success.item', 'departamento-torre-sofia') }}">
                                    <div class="post-grid-content">
                                        <h3 class="post-grid-content-title">Departamento Torre Sofía.</h3>
                                        <div class="post-grid-content-footer"> Abril 18, 2015. </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="col-md-4" data-os-animation="none" data-os-animation-delay="0s">
                            <article class="post-grid post-grid-overlay element-bottom-20 text-left" style="background-image: url(/images/casapriv.jpeg)">
                                <a href="{{ route('main.success.item', 'casa-particular') }}">
                                    <div class="post-grid-content">
                                        <h3 class="post-grid-content-title">Casa particular</h3>
                                        <div class="post-grid-content-footer"> Julio 6, 2015. </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="col-md-4" data-os-animation="none" data-os-animation-delay="0s">
                            <article class="post-grid post-grid-overlay element-bottom-20 text-left" style="background-image: url(/images/hospital.jpg)">
                                <a href="{{ route('main.success.item', 'christus-muguerza') }}">
                                    <div class="post-grid-content">
                                        <h3 class="post-grid-content-title">Christus Muguerza.</h3>
                                        <div class="post-grid-content-footer"> Junio 2, 2015. </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="col-md-4" data-os-animation="none" data-os-animation-delay="0s">
                            <article class="post-grid post-grid-overlay element-bottom-20 text-left" style="background-image: url(/images/superior-industries.jpg)">
                                <a href="{{ route ('main.success.item', 'superior-industries') }}">
                                    <div class="post-grid-content">
                                        <h3 class="post-grid-content-title">Superior Industries.</h3>
                                        <div class="post-grid-content-footer"> Abril 13, 2015. </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- CODIGO PARA CASOS DE EXITO CON UN ESTILO DIFERENTE, EL ERROR ESTABA EN LA CLASE class="figure-image magnific-gallery"
DONDE HACIA FALTA -gallery en alguna de las clases--}}

    {{--<section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-container element-top-10 element-bottom-10">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-header clearfix">
                                    <div class="portfolio-filters pull-right"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio masonry no-transition" data-col-lg="3" data-col-md="3" data-col-sm="2" data-col-xs="2" data-layout="fitRows" data-padding="20">
                            <div class="masonry-item portfolio-item filter-drinks filter-people" data-title="Corporate animation">
                                <div class="figure portfolio-os-animation image-filter-sepia image-filter-onhover fade-in from-top text-center figcaption-middle normalwidth" data-os-animation="fadeIn" data-os-animation-delay="0s">
                                    <a class="figure-image magnific-gallery" href="{{ route('main.success.item', 'fiat-chrysler') }}">
                                        <img alt="Corporate animation" class="normalwidth" src="/images/fca.jpeg">
                                        <div class="figure-overlay">
                                            <div class="figure-overlay-container">
                                                <div class="figure-caption">
                                                    <h3 class="figure-caption-title ">Fiat Chrysler.</h3>
                                                    <p class="figure-caption-description"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="masonry-item portfolio-item filter-people" data-title="Freshquote co">
                                <div class="figure portfolio-os-animation image-filter-sepia image-filter-onhover fade-in from-top text-center figcaption-middle normalwidth" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
                                    <a class="figure-image magnific-gallery" data-links="" href="{{ route('main.success.item', 'corporativo-crocsa') }}">
                                        <img alt="Freshquote co" class="normalwidth" src="/images/comanches.jpg">
                                        <div class="figure-overlay">
                                            <div class="figure-overlay-container">
                                                <div class="figure-caption">
                                                    <h3 class="figure-caption-title ">Los Comanches Monterrey.</h3>
                                                    <p class="figure-caption-description"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="masonry-item portfolio-item filter-people" data-title="Rapid Longitude branding">
                                <div class="figure portfolio-os-animation image-filter-sepia image-filter-onhover fade-in from-top text-center figcaption-middle normalwidth" data-os-animation="fadeIn" data-os-animation-delay="0.6s">
                                    <a class="figure-image magnific-gallery" href="{{ route('main.success.item', 'departamento-torre-sofia') }}" >
                                        <img alt="Rapid Longitude branding" class="normalwidth" src="/images/torre.jpg">
                                        <div class="figure-overlay">
                                            <div class="figure-overlay-container">
                                                <div class="figure-caption">
                                                    <h3 class="figure-caption-title ">Departamento Torres Sofía.</h3>
                                                    <p class="figure-caption-description"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="masonry-item portfolio-item filter-people" data-title="Risky Heart magazine">
                                <div class="figure portfolio-os-animation image-filter-sepia image-filter-onhover fade-in from-top text-center figcaption-middle normalwidth" data-os-animation="fadeIn" data-os-animation-delay="0.9s">
                                    <a class="figure-image magnific-gallery" href="{{ route('main.success.item', 'casa-particular') }}" >
                                        <img alt="Risky Heart magazine" class="normalwidth" src="/images/casapriv.jpeg">
                                        <div class="figure-overlay">
                                            <div class="figure-overlay-container">
                                                <div class="figure-caption">
                                                    <h3 class="figure-caption-title ">Casa privada.</h3>
                                                    <p class="figure-caption-description"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="masonry-item portfolio-item filter-people" data-comments="0" data-date="2014-09-23T02:03:17+00:00" data-menu-order="6" data-title="Stationary Concept">
                                <div class="figure portfolio-os-animation image-filter-sepia image-filter-onhover fade-in from-top text-center figcaption-middle normalwidth" data-os-animation="fadeIn" data-os-animation-delay="1.2s">
                                    <a class="figure-image magnific-gallery" href="{{ route('main.success.item', 'christus-muguerza') }}">
                                        <img alt="Stationary Concept" class="normalwidth" src="/images/hospital.jpg">
                                        <div class="figure-overlay">
                                            <div class="figure-overlay-container">
                                                <div class="figure-caption">
                                                    <h3 class="figure-caption-title ">Hospital.</h3>
                                                    <p class="figure-caption-description"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="masonry-item portfolio-item filter-drinks" data-title="Lambda Magazine">
                                <div class="figure portfolio-os-animation image-filter-sepia image-filter-onhover fade-in from-top text-center figcaption-middle normalwidth" data-os-animation="fadeIn" data-os-animation-delay="1.5s">
                                    <a class="figure-image magnific-gallery" data-links="" href="{{ route ('main.success.item', 'superior-industries') }}">
                                        <img alt="Lambda Magazine" class="normalwidth" src="/images/superior-industries.jpg">
                                        <div class="figure-overlay">
                                            <div class="figure-overlay-container">
                                                <div class="figure-caption">
                                                    <h3 class="figure-caption-title ">Superior Industries.</h3>
                                                    <p class="figure-caption-description"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <section class="section text-center">
        <div class="background-media" data-0-top-bottom="background-position: 50% -80px" data-start="background-position: 50% 0px" style="background-image: url(&#039;&#039;); background-repeat:no-repeat; background-size:cover; background-attachment:fixed; background-position: 50% 0%;">
        </div>
        <div class="background-overlay" style="background-color: rgba(1,192,225,1);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h2 class="text-center element-top-70 element-bottom-20 text-light os-animation normal light" data-os-animation="fadeInDown" data-os-animation-delay="0s">¡Permitenos ayudarte!</h2> <a href="{{ route ('main.contact') }}" class="btn btn-primary btn-lg  text-light btn-icon-right  element-top-20 element-bottom-70 os-animation animated fadeIn" target="_self" data-os-animation="fadeIn" data-os-animation-delay="0.3s" style="-webkit-animation-delay: 0.3s;">
                        ¡Contactanos!
                        <i class="fa fa-comment-o" data-animation="tada"></i>
                    </a> </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
@endsection
