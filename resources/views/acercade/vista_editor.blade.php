@extends('layout.vista_menu')

@section('title', 'Editor responsable')

@section('content')
    <div id="content" class="container mt-4">

        <div class="card mt-4">
            <div class="title h1 text-center">Editor Responsable</div>
            <div class="card mt-4">
                <div class="row">
                    <div class="col-md-7 px-3">
                        <div class="card-block px-6">
                            <h4 class="card-title"><strong> Tecnológico de la Laguna</strong></h4>
                            <p class="card-text">
                                Blvd. Revolución y Av. Instituto Tecnológico de La Laguna<br>
                                Torreón, Coahuila<br>
                                C.P. 27000
                            </p>
                            <br>
                            <a href="http://www.itlalaguna.edu.mx/" target="_blank" class="btn btn-dark mb-4">Visitar
                                Sitio</a>
                        </div>
                    </div>
                    <!-- Carousel start -->
                    <div class="col-md-5">
                        <div id="CarouselEditor" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#CarouselEditor" data-slide-to="0" class="active"></li>
                                <li data-target="#CarouselEditor" data-slide-to="1"></li>
                                <li data-target="#CarouselEditor" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('resources/img/tecnologico.jpg') }}"
                                        alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('resources/img/tecnologico2.jpg') }}"
                                        alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('resources/img/tecnologico3.jpg') }}"
                                        alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('resources/img/tecnologico1.jpg') }}"
                                        alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#CarouselEditor" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#CarouselEditor" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!-- End of carousel -->
                </div>
            </div>
        </div>
    </div>
@endsection
