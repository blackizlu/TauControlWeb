@extends('main.layout')
@section('content')
    <section class="section">
        <div class="background-media" data-0-top-bottom="background-position: 50% -80px" data-start="background-position: 50% 0px" style="background-image: url(assets/images/creative/bg-01.jpg); background-repeat:no-repeat; background-size:cover; background-attachment:fixed; background-position: 50% 0%;">
        </div>
        <div class="background-overlay" style="background-color: rgba(125,201,255,1);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-2 text-center"></div>
                <div class="col-md-8 text-center">
                    <div class="figure element-top-60 element-bottom-60 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s"> <span class="figure-image">
                            <img alt="404" src="/images/404.png" style="width:350px;">
                        </span> </div>
                    <h1 class="text-center element-top-40 element-bottom-20 text-light normal" data-os-animation="none" data-os-animation-delay="0.1s">La página no existe :(</h1>
                    <div class="divider-border divider-border-center element-top-20 element-bottom-20" data-os-animation="none" data-os-animation-delay="0.2s">
                        <div class="divider-border-inner" style="background:rgba(255, 255, 255, 0.9);"></div>
                    </div>
                    <h2 class="text-center element-top-20 element-bottom-20 text-light normal light" data-os-animation="none" data-os-animation-delay="0.3s">
                        Realmente nunca existió
                    </h2> <a class="btn btn-primary btn-lg text-light btn-icon-right element-top-20 element-bottom-20 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s" href="{{route('main.home')}}">
                        Regresar a Inicio <i class="fa fa-home" data-animation="fadeIn"></i>
                    </a>
                    {{--CODIGO PARA INGRESAR LAS REDES SOCIALES POR SI ALGUN DIA EXISTEN--}}
                    {{--<div class="element-top-20 element-bottom-80 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
                        <ul class="social-icons text-normal social-lg social-simple social-circle text-light">
                            <li>
                                <a href="#" target="_self" data-iconcolor="#ea4c89"> <i class="fa fa-dribbble"></i> </a>
                            </li>
                            <li>
                                <a href="#" target="_self" data-iconcolor="#82c9ed"> <i class="fa fa-facebook"></i> </a>
                            </li>
                            <li>
                                <a href="#" target="_self" data-iconcolor="#82c9ed"> <i class="fa fa-github"></i> </a>
                            </li>
                            <li>
                                <a href="#" target="_self" data-iconcolor="#E45135"> <i class="fa fa-google-plus"></i> </a>
                            </li>
                            <li>
                                <a href="#" target="_self" data-iconcolor="#82c9ed"> <i class="fa fa-linkedin"></i> </a>
                            </li>
                            <li>
                                <a href="#" target="_self" data-iconcolor="#00acee"> <i class="fa fa-twitter"></i> </a>
                            </li>
                        </ul>
                    </div>--}}
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    @endsection