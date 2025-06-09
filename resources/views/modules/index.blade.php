@extends('layouts/main')

@section('banner')
    <div class="position-relative overflow-hidden">
        <div class="d-block d-md-none w-100 of-hidden height-200">
            <img src="{{ asset('assets/banner/banner-vet-3.webp') }}" class="w-100 h-100"
                style="object-fit: cover; object-position: right;" alt="Banner veterinaria">
        </div>
        <img src="{{ asset('assets/banner/banner-vet-3.webp') }}" class="img-fluid w-100 d-none d-md-block"
            alt="Banner veterinaria">
        <div
            class="card bg-secondary bg-opacity-25 position-absolute position-md-relative top-50 start-0 translate-middle-y text-white rounded ms-0 ms-md-0 col-12 col-md-6 text-center h-100">
            <div class="card-body fs-3 d-flex flex-column justify-content-center align-items-center h-100">
                <p class="card-text col-md-6">¡Cuidamos a tus mascotas con todo el amor que se merecen!</p>
                <a href="#" class="btn btn-vet text-dark w-auto">Conócenos</a>
            </div>
        </div>
    </div>
@endsection

@section('about-me')
    <div class="container mt-5">
        <div class="row flex-column flex-md-row align-items-center">

            <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end mb-4 mb-md-0">
                <img src="{{ asset('assets/secciones/about-me.webp') }}" class="rounded-circle w-75 w-md-50"
                    alt="Descripción de la foto">
            </div>

            <div class="col-12 col-md-6 d-flex flex-column align-items-center text-center">
                <h2 class="text-info fs-1 fw-bold">Sobre mí</h2>
                <p class="mt-3 px-3 px-md-0">
                    Veterinaria comprometida con la salud y el bienestar de perros y gatos. Brindo atención médica integral
                    con enfoque preventivo, basada en la ética, la ciencia y un profundo respeto por la vida animal.
                </p>
                <a href="#" class="btn btn-vet mt-3 w-auto">Leer más</a>
            </div>

        </div>
    </div>
@endsection

@section('services')
    <div class="row container col-12 m-auto mt-5">
        <h2 class="text-center text-info fs-1 fw-bold">Servicios</h2>
    </div>
    <div class="row container col-12 m-auto mt-5 d-flex justify-content-center gap-5">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/secciones/services-vacunacion.webp') }}" class="card-img-top rounded-circle"
                alt="...">
            <div class="card-body">
                <h5 class="card-title">Vacunacion</h5>
                <p class="card-text">Aplicamos vacunas esenciales para prevenir enfermedades y fortalecer su sistema
                    inmunológico.
                </p>
                <a href="{{ route('vacunacion') }}" class="btn btn-vet w-auto">Reservar</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/secciones/services-desparacitacion.webp') }}" class="card-img-top rounded-circle"
                alt="...">
            <div class="card-body">
                <h5 class="card-title">Desparacitacion</h5>
                <p class="card-text">Eliminamos parásitos internos y externos para proteger la salud de tu mascota y
                    prevenir enfermedades.
                </p>
                <a href="{{ route('desparasitacion') }}" class="btn btn-vet w-auto">Reservar</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/secciones/services-estetica.webp') }}" class="card-img-top rounded-circle"
                alt="...">
            <div class="card-body">
                <h5 class="card-title">Estetica canina</h5>
                <p class="card-text">Ofrecemos baño, corte y cuidado estético para mantener a tu perro limpio, sano y con
                    una apariencia impecable.
                </p>
                <a href="{{ route('estetica') }}" class="btn btn-vet w-auto">Reservar</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/secciones/services-consulta.webp') }}" class="card-img-top rounded-circle"
                alt="...">
            <div class="card-body">
                <h5 class="card-title">Consultas</h5>
                <p class="card-text">Evaluamos la salud de tu mascota con atención personalizada para diagnosticar, tratar y
                    prevenir enfermedades.
                </p>
                <a href="{{ route('consulta') }}" class="btn btn-vet w-auto">Reservar</a>
            </div>
        </div>
    </div>
@endsection

@section('testimonials')
    <div class="position-relative mt-5 bg-section w-100 h-100 px-2 py-3 border-0">
        <h2 class="text-center text-info fs-1 fw-bold mb-4">Testimonios</h2>
        <div class="d-flex flex-row flex-nowrap overflow-auto gap-4 pb-3 w-100">
            <div class="card mx-auto" style="width: 18rem; height: 350px; flex: 0 0 auto;">
                <div class="card-body">
                    <h2 class="card-title text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"
                            fill="#2e2e35">
                            <path
                                d="M7.5 9c1.38 0 2.5 1.12 2.5 2.5S8.88 14 7.5 14c-.17 0-.34-.02-.5-.05.33.61.73 1.26 1.17 1.92.19.29.12.67-.16.88a.644.644 0 0 1-.88-.16C5.51 14.77 4.5 12.96 4.5 11.5 4.5 10.12 5.62 9 7 9h.5zm9 0c1.38 0 2.5 1.12 2.5 2.5S17.88 14 16.5 14c-.17 0-.34-.02-.5-.05.33.61.73 1.26 1.17 1.92.19.29.12.67-.16.88a.644.644 0 0 1-.88-.16c-1.62-2.19-2.63-4-2.63-5.46C13.5 10.12 14.62 9 16 9h.5z" />
                        </svg>
                    </h2>
                    <p class="card-text"><strong>Consulta general</strong></p>
                    <p class="card-text">"Siempre llevo a mi perro a consulta aquí. La doctora es muy profesional y se nota
                        que ama lo que hace. ¡Total confianza!"</p>
                    <p class="card-name"> <em>Carla, dueña de Nala</em></p>
                </div>
            </div>
            <div class="card mx-auto" style="width: 18rem; height: 350px; flex: 0 0 auto;">
                <div class="card-body">
                    <h2 class="card-title text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"
                            fill="#2e2e35">
                            <path
                                d="M7.5 9c1.38 0 2.5 1.12 2.5 2.5S8.88 14 7.5 14c-.17 0-.34-.02-.5-.05.33.61.73 1.26 1.17 1.92.19.29.12.67-.16.88a.644.644 0 0 1-.88-.16C5.51 14.77 4.5 12.96 4.5 11.5 4.5 10.12 5.62 9 7 9h.5zm9 0c1.38 0 2.5 1.12 2.5 2.5S17.88 14 16.5 14c-.17 0-.34-.02-.5-.05.33.61.73 1.26 1.17 1.92.19.29.12.67-.16.88a.644.644 0 0 1-.88-.16c-1.62-2.19-2.63-4-2.63-5.46C13.5 10.12 14.62 9 16 9h.5z" />
                        </svg>
                    </h2>
                    <p class="card-text"><strong>Vacunacion</strong></p>
                    <p class="card-text">"Vacuné a mi gato sin problemas. Todo rápido, limpio y con la mejor atención.
                        ¡Gracias por cuidarlo tan bien!"</p>
                    <p class="card-name"> <em>Miguel, dueña de Gulin</em></p>
                </div>
            </div>
            <div class="card mx-auto" style="width: 18rem; height: 350px; flex: 0 0 auto;">
                <div class="card-body">
                    <h2 class="card-title text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"
                            fill="#2e2e35">
                            <path
                                d="M7.5 9c1.38 0 2.5 1.12 2.5 2.5S8.88 14 7.5 14c-.17 0-.34-.02-.5-.05.33.61.73 1.26 1.17 1.92.19.29.12.67-.16.88a.644.644 0 0 1-.88-.16C5.51 14.77 4.5 12.96 4.5 11.5 4.5 10.12 5.62 9 7 9h.5zm9 0c1.38 0 2.5 1.12 2.5 2.5S17.88 14 16.5 14c-.17 0-.34-.02-.5-.05.33.61.73 1.26 1.17 1.92.19.29.12.67-.16.88a.644.644 0 0 1-.88-.16c-1.62-2.19-2.63-4-2.63-5.46C13.5 10.12 14.62 9 16 9h.5z" />
                        </svg>
                    </h2>
                    <p class="card-text"><strong>Estetica Canina</strong></p>
                    <p class="card-text">"Mi perrita salió hermosa después de su baño y corte. ¡Hasta le pusieron un
                        moñito! Súper recomendados."</p>
                    <p class="card-name"> <em>Veronica, dueña de Pelusa</em></p>
                </div>
            </div>
            <div class="card mx-auto" style="width: 18rem; height: 350px; flex: 0 0 auto;">
                <div class="card-body">
                    <h2 class="card-title text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"
                            fill="#2e2e35">
                            <path
                                d="M7.5 9c1.38 0 2.5 1.12 2.5 2.5S8.88 14 7.5 14c-.17 0-.34-.02-.5-.05.33.61.73 1.26 1.17 1.92.19.29.12.67-.16.88a.644.644 0 0 1-.88-.16C5.51 14.77 4.5 12.96 4.5 11.5 4.5 10.12 5.62 9 7 9h.5zm9 0c1.38 0 2.5 1.12 2.5 2.5S17.88 14 16.5 14c-.17 0-.34-.02-.5-.05.33.61.73 1.26 1.17 1.92.19.29.12.67-.16.88a.644.644 0 0 1-.88-.16c-1.62-2.19-2.63-4-2.63-5.46C13.5 10.12 14.62 9 16 9h.5z" />
                        </svg>
                    </h2>
                    <p class="card-text"><strong>Desparacitacion</strong></p>
                    <p class="card-text">"Desde que seguimos el plan de desparasitación, mi gato está más activo y feliz.
                        Excelente orientación."</p>
                    <p class="card-name"> <em>Damian, dueño de Simba</em></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('gallery')
    <div class="container py-5">
        <h2 class="text-center text-info fs-1 fw-bold mb-3">Mascotas Felices</h2>
        <p class="m-auto mt-3 px-3 py-3 px-md-0 text-center fs-5">
            Clientes satisfechos comparten sus experiencias con nosotros. Aquí están algunas de las adorables
        </p>
        <div class="carousel-wrapper">
            <div class="carousel-track">
                <!-- Primer grupo de imágenes -->
                <div class="carousel-item-img"><img src="{{ asset('assets/testimonios/testimonio-1.jpg') }}"
                        alt="1"></div>
                <div class="carousel-item-img"><img src="{{ asset('assets/testimonios/testimonio-2.jpg') }}"
                        alt="2"></div>
                <div class="carousel-item-img"><img src="{{ asset('assets/testimonios/testimonio-3.jpg') }}"
                        alt="3"></div>
                <div class="carousel-item-img"><img src="{{ asset('assets/testimonios/testimonio-4.jpg') }}"
                        alt="4"></div>
                <div class="carousel-item-img"><img src="{{ asset('assets/testimonios/testimonio-5.jpg') }}"
                        alt="5"></div>
                <div class="carousel-item-img"><img src="{{ asset('assets/testimonios/testimonio-6.jpg') }}"
                        alt="5"></div>

                <!-- Duplicado para bucle infinito -->
                <div class="carousel-item-img"><img src="{{ asset('assets/testimonios/testimonio-1.jpg') }}"
                        alt="1"></div>
                <div class="carousel-item-img"><img src="{{ asset('assets/testimonios/testimonio-2.jpg') }}"
                        alt="2"></div>
                <div class="carousel-item-img"><img src="{{ asset('assets/testimonios/testimonio-3.jpg') }}"
                        alt="3"></div>
                <div class="carousel-item-img"><img src="{{ asset('assets/testimonios/testimonio-4.jpg') }}"
                        alt="4"></div>
                <div class="carousel-item-img"><img src="{{ asset('assets/testimonios/testimonio-5.jpg') }}"
                        alt="5"></div>
                <div class="carousel-item-img"><img src="{{ asset('assets/testimonios/testimonio-6.jpg') }}"
                        alt="5"></div>
            </div>
        </div>
    </div>
@endsection

@section('horary')
    <div class="position-relative overflow-hidden mt-5">
        <div class="d-block d-md-none w-100 of-hidden height-200">
            <img src="{{ asset('assets/banner/banner-horary.webp') }}" class="w-100 h-100"
                style="object-fit: cover; object-position: right;" alt="Banner veterinaria">
        </div>
        <img src="{{ asset('assets/banner/banner-horary.webp') }}" class="img-fluid w-100 d-none d-md-block"
            alt="Banner horarios veterinaria">
        <div
            class="card bg-dark bg-opacity-75 position-absolute position-md-relative top-50 start-0 translate-middle-y text-white rounded ms-0 ms-md-0 col-12 col-md-6 text-center h-100 w-100">
            <div class="card-body fs-3 d-flex flex-column justify-content-center align-items-center h-100">
                <p class="card-text col-md-6 fs-3 fw-bold">Horarios de atencion!</p>
                <p class="card-text col-md-6 fs-5">Lunes a Sabado de 11:00 a 17:00 hrs</p>
                <p class="card-text col-md-6 fs-5">Domingo cerrado</p>
            </div>
        </div>
    </div>
@endsection
