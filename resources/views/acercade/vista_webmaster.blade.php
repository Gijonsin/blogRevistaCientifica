@extends('layout.vista_menu')

@section('title', 'Webmasters')

@section('content')
    <div id="content" class="container mt-4">
        <h1>Equipo Responsable Del Desarrollo</h1>
        <div class="card">
            <div class="card-header">
                <h2>Edmalyon Core</h2>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex align-items-center">
                        <a href="https://github.com/Gijonsin" target="_blank">
                            <img src="{{ asset('resources/img/gijon.jpg') }}" alt="Jose Eduardo Gijon Mora"
                                class="img-thumbnail me-3" style="width: 50px; height: 50px;">
                        </a>
                        <div>
                            <strong>Jose Eduardo Gijon Mora</strong><br>
                            Desarrollador Frontend
                        </div>
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <a href="https://github.com/Edyaka02" target="_blank">
                            <img src="{{ asset('resources/img/edgar.jpg') }}" alt="Edgar Manuel Carrillo Muruato"
                                class="img-thumbnail me-3" style="width: 50px; height: 50px;">
                        </a>
                        <div>
                            <strong>Edgar Manuel Carrillo Muruato</strong><br>
                            Desarrollador Backend
                        </div>
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <a href="https://github.com/EmmaDX" target="_blank">
                            <img src="{{ asset('resources/img/emma.jpg') }}" alt="Jesus Emmanuel Llamas Hernandez"
                                class="img-thumbnail me-3" style="width: 50px; height: 50px;">
                        </a>
                        <div>
                            <strong>Jesus Emmanuel Llamas Hernandez</strong><br>
                            Diseñador UI/UX
                        </div>
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <a href="https://github.com/ValeryGuerrero" target="_blank">
                            <img src="{{ asset('resources/img/val.jpg') }}" alt="Valery Araceli Guerrero Rodriguez"
                                class="img-thumbnail me-3" style="width: 50px; height: 50px;">
                        </a>
                        <div>
                            <strong>Valery Araceli Guerrero Rodriguez</strong><br>
                            Tester
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection