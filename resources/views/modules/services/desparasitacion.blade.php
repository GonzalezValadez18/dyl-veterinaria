@extends('layouts/services/desparasitacion')

@section('banner')
    <div class="position-relative overflow-hidden">
        <div class="d-block d-md-none w-100 of-hidden height-200">
            <img src="{{ asset('assets/banner/banner-desparacitacion.png') }}" class="w-100 h-100"
                style="object-fit: cover; object-position: center;" alt="Banner desparasitacion veterinaria">
        </div>
        <img src="{{ asset('assets/banner/banner-desparacitacion.png') }}" class="img-fluid w-100 d-none d-md-block"
            alt="Banner desparasitacion veterinaria">
        <div
            class="card bg-dark bg-opacity-50 position-absolute position-md-relative top-50 start-0 translate-middle-y text-white rounded ms-0 ms-md-0 col-12 col-md-6 text-center h-100 w-100">
            <div class="card-body fs-3 d-flex flex-column justify-content-center align-items-center h-100">
                <p class="card-text col-md-6 fs-1 fw-bold">Desparasitación</p>
            </div>
        </div>
    </div>
@endsection

@section('information')
    <div class="container mt-1">
        <div class="row flex-column flex-md-row align-items-center">

            <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end mb-4 mb-md-0">
                <img src="{{ asset('assets/servicios/desparasitacion-1.webp') }}" class="rounded-circle w-75 w-md-50"
                    alt="Descripción de la foto">
            </div>

            <div class="col-12 col-md-6 d-flex flex-column align-items-center text-center">
                <h2 class="text-info fs-1 fw-bold">Prevención frente a parásitos internos</h2>
                <p class="mt-3 px-3 px-md-0">
                    Si su mascota presenta nematodos (gusanos redondos) o cestodos (gusanos planos o tenias), tu veterinario
                    hará un chequeo exhaustivo para determinar tanto la especie como la gravedad de la infestación.
                </p>
            </div>

        </div>
    </div>
@endsection

@section('what-is')
    <div class="container mt-5 bg-light">
        <div class="row p-5">
            <div class="col-12 col-md-6 d-flex flex-column align-items-center text-center justify-content-center m-auto">
                <h2 class="text-info fs-1 fw-bold">¿Qué es la desparasitación?</h2>
                <p class="mt-3 px-3 px-md-0 fs-6" style="text-align: justify;">
                    Tanto los animales como los humanos pueden presentar distintos tipos de parásitos internos.<br><br>

                    Los principales parásitos internos que presentan nuestras mascotas son los nematodos intestinales y los
                    cestodos (tenias), aunque también existen nematodos pulmonares, cardiacos y oculares.<br><br>

                    Las mascotas pueden contraerlos al entrar en contacto con alimentos, agua, tierra, heces o roedores
                    contaminados. Además, muchos cachorros se parasitan directamente a través de la leche materna.<br><br>

                    Muchos de estos parásitos producen enfermedades zoonósicas, lo que quiere decir que se transmiten a los
                    humanos.<br><br>

                    Por todo esto, es muy importante desparasitar periódicamente a nuestras mascotas con el fin de prevenir
                    las enfermedades parasitarias en ellas y en nuestras familias.
                </p>
            </div>

        </div>
    </div>
@endsection

@section('symptoms')
    <div class="container mt-5">
        <div class="row flex-column flex-md-row align-items-center">

            <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end mb-4 mb-md-0">
                <img src="{{ asset('assets/servicios/desparasitacion-2.webp') }}" class="w-75 w-md-50"
                    alt="Descripción de la foto">
            </div>

            <div class="col-12 col-md-6 d-flex flex-column align-items-center text-center">
                <h2 class="text-info fs-1 fw-bold">¿Cuáles son los síntomas de los parásitos internos en nuestras mascotas?
                </h2>
                <p class="mt-3 px-3 px-md-0 fs-5">
                    Los nematodos y cestodos pueden causar:
                </p>
                <ul class="mt-3 px-3 px-md-0 text-start fs-6">
                    <li>Vómitos y diarreas</li>
                    <li>Pérdida de peso</li>
                    <li>Aumento del apetito</li>
                    <li>Debilidad</li>
                    <li>Dilatación abdominal</li>
                    <li>Toses y problemas respiratorios</li>
                    <li>Insuficiencia cardiaca</li>
                    <li>Conjuntivitis</li>
                </ul>
            </div>

        </div>
    </div>
@endsection

@section('faq')
    <div class="row container col-12 m-auto mt-5">
        <h2 class="text-info fs-1 fw-bold text-center">Preguntas frecuentes sobre desparasitación de mascotas</h2>
        <div class="d-block mt-3">
            <div class="accordion" id="accordionFaq">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfaq1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFaq1" aria-expanded="false" aria-controls="collapseFaq1">
                            <strong>¿Pueden contagiarse los humanos?</strong>
                        </button>
                    </h2>
                    <div id="collapseFaq1" class="accordion-collapse collapse" aria-labelledby="headingFaq1"
                        data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            Los humanos pueden ser infestados por nemátodos y cestodos, siendo los niños los más
                            vulnerables. Los síntomas incluyen tos, dolores de cabeza y dolor de estómago. En raras
                            ocasiones, las larvas de nemátodos pueden infectar órganos y causar síntomas graves como fatiga
                            y pérdida de peso.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfaq2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFaq2" aria-expanded="false" aria-controls="collapseFaq2">
                            <strong> ¿Como puedo proteger a mi mascotas contra parasitos internos?</strong>
                        </button>
                    </h2>
                    <div id="collapseFaq2" class="accordion-collapse collapse" aria-labelledby="headingFaq2"
                        data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            La mejor forma de proteger a su mascota es con desparasitaciones periódicas y frecuentes. No
                            dudes en consultar a tu veterinario sobre las mejores opciones de tratamiento disponibles.
                            También debes llevar a cabo otras medidas preventivas como desinfectar regularmente los cuencos
                            de comida y agua de tu mascota, retirar los excrementos de tu mascota, desinfectar las zonas
                            donde defecan y lavarte bien las manos después.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('direction')
    <div class="container mt-5 mb-5 bg-light text-center">
        <div class="container mt-5 p-md-5 m-auto">
            <div class="row flex-column flex-md-row align-items-center">
                <div class="col-12 col-md-6 d-flex flex-column align-items-center text-center ">
                    <h2 class="text-info fs-1 fw-bold d-flex align-items-center gap-2 pt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                        </svg>
                        Ubicación
                    </h2>

                    <p class="mt-3 px-3 px-md-0 fs-4 text-center">
                        Espárrago 1002, Geovillas Santa Barbara, 56535 Ixtapaluca, Méx.
                    </p>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end mb-4 mb-md-0">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('whatsapp')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <div class="whatsapp-container">
        <a href="https://wa.me/5550673454?text=Hola, buenas tardes, me gustaria agendar una cita para desparasitar a mi mascota.🐶🐱💊"
            target="_blank" class="whatsapp-btn">
            <i class="bi bi-whatsapp"></i>
            <span class="whatsapp-text">Agendar Ahora</span>
        </a>
    </div>
@endsection

