@extends('main.layout')
@section('content')
    <section class="section">
        <div class="background-media" data-0-top-bottom="background-position: 50% 50px" data-start="background-position: 50% -31px" style="background-image: url(/images/contact-pape.jpg); background-repeat:no-repeat; background-size:cover; background-attachment:fixed; background-position: 50% 0%;">
        </div>
        <div class="background-overlay" style="background-color: rgba(1,192,225,0.8);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-2 text-center"></div>
                <div class="col-md-8 text-center">
                    <h1 class="element-top-70 text-light os-animation big" data-os-animation="fadeIn" data-os-animation-delay="0s">
                        ¡Empecemos tu sueño hoy!</h1>
                    <div class="divider-border divider-border-center element-top-10 element-bottom-10 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                        <div class="divider-border-inner" style="background:#ffffff; width:60px;"></div>
                    </div>
                    <p class="lead text-center center text-light element-bottom-70" data-os-animation="none" data-os-animation-delay="0s">"Los sueños no se hacen realidad por arte de magia, se requiere dedicación,
                        <br> estudio, determinación y trabajo duro".</p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="background-overlay" style="background-color: rgba(255,255,255,0);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center col-border-bottom">
                    <div class="row">
                        <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
                            <div class="divider-wrapper">
                                <div class="visible-xs element-height-60"></div>
                                <div class="visible-sm element-height-60"></div>
                                <div class="visible-md element-height-60"></div>
                                <div class="visible-lg element-height-60"></div>
                            </div>
                            <form id="contactForm" action="contact_mailer.php" class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-icon-group"> <i class="fa fa-user"></i>
                                            <input class="form-control" id="name" name="name" placeholder="Nombre *" type="text" required=""> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-icon-group"> <i class="fa fa-envelope"></i>
                                            <input class="form-control" id="email" name="email" placeholder="Correo Electronico *" type="email" required=""> </div>
                                    </div>
                                </div>
                                <div class="form-group form-icon-group"> <i class="fa fa-pencil"></i>
                                    <textarea class="form-control" id="message" name="message" placeholder="Escribe aqui tu mensaje" rows="10" required=""></textarea>
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Enviar" class="btn btn-primary"> </div>
                                <div class="messages text-center"></div>
                            </form>
                            <div class="divider-wrapper">
                                <div class="visible-xs element-height-60"></div>
                                <div class="visible-sm element-height-60"></div>
                                <div class="visible-md element-height-60"></div>
                                <div class="visible-lg element-height-60"></div>
                            </div>
                        </div>
                        <div class="col-md-6 text-left small-screen-left os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">
                            <div class="divider-wrapper">
                                <div class="visible-xs element-height-60"></div>
                                <div class="visible-sm element-height-60"></div>
                                <div class="visible-md element-height-60"></div>
                                <div class="visible-lg element-height-60"></div>
                            </div>
                            <div class="google-map" data-os-animation="none" data-os-animation-delay="0s" id="map" style="height:355px"></div>
                            <div class="divider-wrapper">
                                <div class="visible-xs element-height-60"></div>
                                <div class="visible-sm element-height-60"></div>
                                <div class="visible-md element-height-60"></div>
                                <div class="visible-lg element-height-60"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="background-media" data-0-top-bottom="background-position: 50% 50px" data-start="background-position: 50% -31px" style="background-image: url(assets/images/corporate/blog06.jpg); background-repeat:no-repeat; background-size:cover; background-attachment:fixed; background-position: 50% 0%;">
        </div>
        <div class="background-overlay grid-overlay-0" style="background-color: rgba(3,194,227,0.9);"></div>
        <div class="container-fullwidth container-vertical-middle">
            <div class="row vertical-middle">
                <div class="col-md-6 text-center" style="background:rgba(0, 0, 0, 0.2);">
                    <div class="divider-wrapper">
                        <div class="visible-xs element-height-40"></div>
                        <div class="visible-sm element-height-40"></div>
                        <div class="visible-md element-height-40"></div>
                        <div class="visible-lg element-height-40"></div>
                    </div> <i class="fa fa-home text-light" style="font-size:24px"></i>
                    <p class="lead text-center center text-light element-top-20 element-bottom-20 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s"> Corporativo
                        <br> Via Latina #109 Oficina 2 Col. Del Valle 66220, NL, México</p>
                    <div class="divider-wrapper">
                        <div class="visible-xs element-height-30"></div>
                        <div class="visible-sm element-height-30"></div>
                        <div class="visible-md element-height-30"></div>
                        <div class="visible-lg element-height-30"></div>
                    </div>
                </div>
                <div class="col-md-6 text-center small-screen-default" style="background:rgba(0, 0, 0, 0.15);">
                    <div class="divider-wrapper">
                        <div class="visible-xs element-height-40"></div>
                        <div class="visible-sm element-height-40"></div>
                        <div class="visible-md element-height-40"></div>
                        <div class="visible-lg element-height-40"></div>
                    </div> <i class="fa fa-envelope text-light" style="font-size:24px"></i>
                    <p class="lead text-center center text-light element-top-20 element-bottom-20 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s"> info@taucontrol.com
                        <br> ¡Mandanos un mensaje!</p>
                    <div class="divider-wrapper">
                        <div class="visible-xs element-height-30"></div>
                        <div class="visible-sm element-height-30"></div>
                        <div class="visible-md element-height-30"></div>
                        <div class="visible-lg element-height-30"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        window.map = {
            map_type: 'ROADMAP',
            map_zoom: 15,
            map_style: '',
            map_scrollable: 'on',
            marker: 'show',
            label: ['Tau Control'],
            address: '',
            latlng: ['25.664049, -100.369845'],
            center_latlng: '25.664611, -100.369845',
            markerURL: '/images/marker.png',
            auto_center: false,
        };
    </script>
    <script src="/js/map.js"></script>
@endsection