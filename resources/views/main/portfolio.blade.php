@extends('main.layout')
@section('content')
    <section class="section">
        <div class="background-overlay" style="background-color: rgba(1,192,225,1);"></div>
        <div class="container">
            <div class="row">
                <header class="portfolio-header col-md-12 text-light">
                    <h1 class="text-left element-top-70 element-bottom-70 text-light big">{{ $title }}</h1>
                    <nav class="portfolio-nav element-top-70">
                        <ul>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                        <g>
                                            <polyline fill="none" stroke-width="3" stroke-miterlimit="10" points="68.692,16.091 33.146,50 68.692,83.906"></polyline>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                        <g>
                                            <polyline fill="none" stroke-width="3" stroke-miterlimit="10" points="33.146,16.091 68.692,50 33.146,83.906"></polyline>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </header>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="flexslider flex-controls-bottom element-top-50 element-bottom-0 os-animation" data-flex-animation="slide" data-flex-captionhorizontal="left" data-flex-controls="show" data-flex-controlsalign="center" data-flex-controlsposition="inside"
                         data-flex-controlsvertical="bottom" data-flex-directions="hide" data-flex-duration="600" data-flex-sliderdirection="horizontal" data-flex-slideshow="true" data-flex-speed="7000" data-os-animation="fadeInLeft" data-os-animation-delay="0s"
                         id="flexslider-60">
                        <ul class="slides">
                            <li>
                                <figure> <img alt="p09" class="attachment-full wp-post-image" height="800" src="/images/{{ $img }}" width="1200">
                                   {{-- <figcaption>
                                        <h3>Get a brand</h3>
                                        <p></p>
                                        <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.</p>
                                        <p>
                                    </figcaption> --}}
                                </figure>
                            </li>
                           {{-- <li>
                                <figure> <img alt="p07" class="attachment-full wp-post-image" height="800" src="assets/images/corporate/p07.jpg" width="1200">
                                    <figcaption>
                                        <h3>Some thinking</h3>
                                        <p></p>
                                        <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
                                        <p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li>
                                <figure> <img alt="p12" class="attachment-full wp-post-image" height="800" src="assets/images/corporate/p12.jpg" width="1200">
                                    <figcaption>
                                        <h3>Amazing company</h3>
                                        <p></p>
                                        <p>Proactively envisioned multimedia based expertise and cross-media growth strategies.</p>
                                        <p>
                                    </figcaption>
                                </figure>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h2 class="text-left element-top-50 os-animation normal regular" data-os-animation="fadeInRight" data-os-animation-delay="0.1s">Objetivo:</h2>
                    <div class="divider-border divider-border-left element-top-10 element-bottom-10 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.2s">
                        <div class="divider-border-inner"></div>
                    </div>
                    <div class="col-text-1 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">
                        <p>{!! $objectives !!}</p>
                    </div>
                    <h2 class="text-left os-animation normal regular" data-os-animation="fadeInRight" data-os-animation-delay="0.1s">Solucion:</h2>
                    <div class="divider-border divider-border-left element-top-10 element-bottom-10 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.2s">
                        <div class="divider-border-inner"></div>
                    </div>
                    <div class="col-text-1 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">
                        <p>{!! $solutions !!}</p>
                    </div>
                    <h2 class="text-left os-animation normal regular" data-os-animation="fadeInRight" data-os-animation-delay="0.1s">Productos:</h2>
                    <div class="divider-border divider-border-left element-top-10 element-bottom-10 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.2s">
                        <div class="divider-border-inner"></div>
                    </div>
                    <div class="col-text-1 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">
                        <p>{!! $products !!}</p>
                    </div>
                    <h2 class="text-left os-animation normal regular" data-os-animation="fadeInRight" data-os-animation-delay="0.1s">Resultado:</h2>
                    <div class="divider-border divider-border-left element-top-10 element-bottom-10 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.2s">
                        <div class="divider-border-inner"></div>
                    </div>
                    <div class="col-text-1 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">
                        <p>{!! $result !!} <br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--<section class="section portfolio-related">--}}
        {{--<div class="container">--}}
            {{--<div class="row element-bottom-80 text-center">--}}
                {{--<h3 class="element-top-30 element-bottom-30">Other related--}}
                    {{--items</h3>--}}
                {{--<div class="col-md-4 col-sm-4">--}}
                    {{--<div class="figure fade-in text-center vertical-middle">--}}
                        {{--<a class="figure-image" href="corporate-gallery-item.html"> <img alt="The black straw" src="assets/images/corporate/p15.jpg">--}}
                            {{--<div class="figure-overlay">--}}
                                {{--<div class="figure-overlay-container">--}}
                                    {{--<div class="figure-caption">--}}
                                        {{--<h3>The black straw</h3> </div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-4">--}}
                    {{--<div class="figure fade-in text-center vertical-middle">--}}
                        {{--<a class="figure-image" href="corporate-gallery-item.html"> <img alt="Orange Company" src="assets/images/corporate/p14.jpg">--}}
                            {{--<div class="figure-overlay">--}}
                                {{--<div class="figure-overlay-container">--}}
                                    {{--<div class="figure-caption">--}}
                                        {{--<h3>Orange Company</h3> </div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-4">--}}
                    {{--<div class="figure fade-in text-center vertical-middle">--}}
                        {{--<a class="figure-image" href="corporate-gallery-item.html"> <img alt="Corporate animation" src="assets/images/corporate/p03.jpg">--}}
                            {{--<div class="figure-overlay">--}}
                                {{--<div class="figure-overlay-container">--}}
                                    {{--<div class="figure-caption">--}}
                                        {{--<h3>Corporate animation</h3> </div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
@endsection
