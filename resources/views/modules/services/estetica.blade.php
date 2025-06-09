@extends('layouts/services/estetica')

@section('banner')
    <div class="position-relative overflow-hidden">
        <div class="d-block d-md-none w-100 of-hidden height-200">
            <img src="{{ asset('assets/banner/banner-estetica.jpg') }}" class="w-100 h-100"
                style="object-fit: cover; object-position: center;" alt="Banner veterinaria">
        </div>
        <img src="{{ asset('assets/banner/banner-estetica.jpg') }}" class="img-fluid w-100 d-none d-md-block"
            alt="Banner horarios veterinaria">
        <div
            class="card bg-dark bg-opacity-50 position-absolute position-md-relative top-50 start-0 translate-middle-y text-white rounded ms-0 ms-md-0 col-12 col-md-6 text-center h-100 w-100">
            <div class="card-body fs-3 d-flex flex-column justify-content-center align-items-center h-100">
                <p class="card-text col-md-6 fs-1 fw-bold">Estetica Canina</p>
            </div>
        </div>
    </div>
@endsection

@section('title')
    <div class="container col-12 m-auto mt-5">
        <h2 class="text-info fs-1 fw-bold text-center">¡Agenda abierta!</h2>
        <hr class="hr" />
    </div>
@endsection

@section('includes')
    <div class="container mt-5 bg-light">
        <div class="container mt-5 p-5">
            <div class="row flex-column flex-md-row align-items-center">

                <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end mb-4 mb-md-0">
                    <img src="{{ asset('assets/servicios/estetica-1.webp') }}" class="rounded-circle w-75 w-md-50"
                        alt="Descripción de la foto">
                </div>

                <div class="col-12 col-md-6 d-flex flex-column align-items-center text-center">
                    <h2 class="text-info fs-1 fw-bold">Servicio de estetica canina</h2>
                    <p class="mt-3 px-3 px-md-0 fs-4" style="text-align: justify;">
                        Todos los servicios de estética canina incluyen

                    <ul class="mt-3 px-3 px-md-0 fs-5" style="text-align: justify;">
                        <li>Corte y baño (o solo baño)</li>
                        <li>Corte de uñas</li>
                        <li>Limpieza de glándulas perianales</li>
                        <li>Aplicación de talco antipulgas y perfume</li>
                    </ul>

                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('faq')
    <div class="row container col-12 m-auto mt-5">
        <h2 class="text-info fs-1 fw-bold text-center">Preguntas Frecuentes</h2>
        <div class="d-block mt-3">
            <div class="accordion" id="accordionFaq">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfaq1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFaq1" aria-expanded="false" aria-controls="collapseFaq1">
                            <strong>¿Cada cuánto tiempo debo llevar a mi perro a la estética?</strong>
                        </button>
                    </h2>
                    <div id="collapseFaq1" class="accordion-collapse collapse" aria-labelledby="headingFaq1"
                        data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            La frecuencia recomendada depende del tipo de pelaje, raza y estilo de vida de tu mascota. En
                            general, se aconseja llevarlo cada 4 a 6 semanas. Esto ayuda a mantener su piel y pelo en buenas
                            condiciones, prevenir nudos, controlar la muda y detectar a tiempo posibles problemas
                            dermatológicos. En razas de pelo largo o con doble capa, la frecuencia puede ser incluso mayor.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfaq2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFaq2" aria-expanded="false" aria-controls="collapseFaq2">
                            <strong>¿Es seguro llevar a mi perro a una estética canina?
                            </strong>
                        </button>
                    </h2>
                    <div id="collapseFaq2" class="accordion-collapse collapse" aria-labelledby="headingFaq2"
                        data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            Sí, siempre que el lugar cuente con personal capacitado y protocolos adecuados de higiene y
                            manejo. Los groomers (estilistas caninos) están entrenados para trabajar con distintas razas y
                            temperamentos. Además, se usan productos específicos para perros y herramientas esterilizadas.
                            La seguridad, comodidad y bienestar del perro es la prioridad durante todo el proceso.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfaq3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFaq3" aria-expanded="false" aria-controls="collapseFaq3">
                            <strong> ¿Qué pasa si mi perro es muy inquieto, nervioso o no se deja tocar?</strong>
                        </button>
                    </h2>
                    <div id="collapseFaq3" class="accordion-collapse collapse" aria-labelledby="headingFaq3"
                        data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            Muchos perros se sienten nerviosos durante sus primeras visitas, y eso es completamente normal.
                            En estos casos, el proceso se adapta al ritmo del perro, utilizando técnicas de manejo positivo
                            y, si es necesario, haciendo descansos. Si tu perro tiene antecedentes de agresividad o ansiedad
                            severa, es importante informarlo antes de la cita para tomar precauciones o evaluar si necesita
                            una sesión más especializada o acompañamiento veterinario.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfaq4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFaq4" aria-expanded="false" aria-controls="collapseFaq4">
                            <strong> ¿Puedo quedarme durante el servicio?</strong>
                        </button>
                    </h2>
                    <div id="collapseFaq4" class="accordion-collapse collapse" aria-labelledby="headingFaq4"
                        data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            Aunque entendemos que quieras estar cerca de tu mascota, generalmente se recomienda no
                            permanecer en el área de trabajo. La presencia del dueño puede alterar al perro, hacerlo más
                            inquieto o dificultar que el profesional haga su trabajo de forma segura. Te avisaremos tan
                            pronto esté listo para que puedas recogerlo sin esperas.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfaq5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFaq5" aria-expanded="false" aria-controls="collapseFaq5">
                            <strong> ¿Cuánto tiempo toma una sesión de estética?</strong>
                        </button>
                    </h2>
                    <div id="collapseFaq5" class="accordion-collapse collapse" aria-labelledby="headingFaq5"
                        data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            El tiempo puede variar mucho según el tamaño del perro, el tipo de pelaje, el comportamiento y
                            los servicios contratados. En promedio, una sesión completa puede tardar entre 1 y 3 horas. Si
                            tu perro requiere cuidados especiales o si hay otros turnos antes, es posible que se alargue un
                            poco. Siempre procuramos ser puntuales y avisarte si hay algún retraso.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('packages')
    <div class="row container col-12 m-auto mt-5 d-flex justify-content-center gap-5" style="align-items: flex-start;">
        <h2 class="text-info fs-1 fw-bold text-center">Tamaños de perro</h2>
        <p class="text-center fs-4">El costo del servicio dependera del tamaño de su mascota</p>

        <div class="d-block d-md-none w-100 mb-4">
            <div class="accordion" id="dogSizeAccordion">
                {{-- Perros pequeños --}}
                <div class="accordion-item">
                    <div class="text-center pt-3">
                        <img src="{{ asset('assets/servicios/estetica-2.webp') }}"
                            style="width: 150px; height: 150px; object-fit: cover;" alt="Imagen del servicio">
                    </div>
                    <h2 class="accordion-header" id="headingSmall">
                        <button class="accordion-button justify-content-center" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSmall" aria-expanded="true" aria-controls="collapseSmall"
                            style="background: none; box-shadow: none; font-size: 1.3rem;">
                            Perros pequeños (chicos)
                        </button>
                    </h2>
                    <div id="collapseSmall" class="accordion-collapse collapse show" aria-labelledby="headingSmall"
                        data-bs-parent="#dogSizeAccordion">
                        <div class="accordion-body">
                            <strong>Características:</strong>
                            <ul class="mt-3 px-3 px-md-0 fs-6" style="text-align: justify;">
                                <li>Peso: Hasta 10 kg</li>
                                <li>Altura: Menos de 30 cm al hombro</li>
                                <li>Esperanza de vida: 12–16 años (a veces más)</li>
                                <li>Temperamento: Vivos, alertas, pueden ser territoriales</li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- Perros medianos --}}
                <div class="accordion-item">
                    <div class="text-center pt-3">
                        <img src="{{ asset('assets/servicios/estetica-3.webp') }}"
                            style="width: 150px; height: 150px; object-fit: cover;" alt="Imagen del servicio">
                    </div>
                    <h2 class="accordion-header" id="headingMedium">
                        <button class="accordion-button justify-content-center collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseMedium" aria-expanded="false"
                            aria-controls="collapseMedium" style="background: none; box-shadow: none; font-size: 1.3rem;">
                            Perros medianos
                        </button>
                    </h2>
                    <div id="collapseMedium" class="accordion-collapse collapse" aria-labelledby="headingMedium"
                        data-bs-parent="#dogSizeAccordion">
                        <div class="accordion-body">
                            <strong>Características:</strong>
                            <ul class="mt-3 px-3 px-md-0 fs-6" style="text-align: justify;">
                                <li>Peso: 10 a 25 kg</li>
                                <li>Altura: 30 a 50 cm al hombro</li>
                                <li>Esperanza de vida: 10–14 años</li>
                                <li>Temperamento: Sociables, activos, equilibrados</li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- Perros grandes --}}
                <div class="accordion-item">
                    <div class="text-center pt-3">
                        <img src="{{ asset('assets/servicios/estetica-4.webp') }}"
                            style="width: 150px; height: 150px; object-fit: cover; " alt="Imagen del servicio">
                    </div>
                    <h2 class="accordion-header" id="headingLarge">
                        <button class="accordion-button justify-content-center collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseLarge" aria-expanded="false"
                            aria-controls="collapseLarge" style="background: none; box-shadow: none; font-size: 1.3rem;">
                            Perros grandes
                        </button>
                    </h2>
                    <div id="collapseLarge" class="accordion-collapse collapse" aria-labelledby="headingLarge"
                        data-bs-parent="#dogSizeAccordion">
                        <div class="accordion-body">
                            <strong>Características:</strong>
                            <ul class="mt-3 px-3 px-md-0 fs-6" style="">
                                <li>Peso: Más de 25 kg</li>
                                <li>Altura: Más de 50 cm al hombro</li>
                                <li>Esperanza de vida: 8–12 años</li>
                                <li>Temperamento: Tranquilos, protectores, requieren espacio</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Cards solo visibles en desktop/tablet --}}

        <div class="card info-hover-card d-none d-md-flex" id="card1" style="width: 20rem;">
            <img src="{{ asset('assets/servicios/estetica-2.webp') }}" class="card-img-top  img-uniforme"
                alt="Imagen del servicio">
            <div class="card-body">
                <h5 class="card-title">Perros pequeños (chicos)</h5>
                <div class="card-info">
                    Características:
                    <ul class="mt-3 px-1 px-md-0 fs-6" style="text-align: justify;">
                        <li>Peso: Hasta 10 kg</li>
                        <li>Altura: Menos de 30 cm al hombro</li>
                        <li>Esperanza de vida: 12–16 años (a veces más)</li>
                        <li>Temperamento: Vivos, alertas, pueden ser territoriales</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card info-hover-card d-none d-md-flex" id="card2" style="width: 20rem;">
            <img src="{{ asset('assets/servicios/estetica-3.webp') }}" class="card-img-top  img-uniforme"
                alt="Imagen del servicio">
            <div class="card-body">
                <h5 class="card-title">Perros medianos</h5>
                <div class="card-info">
                    <strong>Características:</strong>
                    <ul class="mt-3 px-3 px-md-0 fs-6" style="text-align: justify;">
                        <li>Peso: 10 a 25 kg</li>
                        <li>Altura: 30 a 50 cm al hombro</li>
                        <li>Esperanza de vida: 10–14 años</li>
                        <li>Temperamento: Sociables, activos, equilibrados</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card info-hover-card d-none d-md-flex" id="card3" style="width: 20rem;">
            <img src="{{ asset('assets/servicios/estetica-4.webp') }}" class="card-img-top  img-uniforme"
                alt="Imagen del servicio">
            <div class="card-body">
                <h5 class="card-title">Perros grandes</h5>
                <div class="card-info">
                    <strong>Características:</strong>
                    <ul class="mt-3 px-3 px-md-0 fs-6" style="text-align: justify;">
                        <li>Peso: Más de 25 kg</li>
                        <li>Altura: Más de 50 cm al hombro</li>
                        <li>Esperanza de vida: 8–12 años (algunos gigantes, menos)</li>
                        <li>Temperamento: Leales, protectores, a menudo tranquilos en casa</li>
                    </ul>
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
        <a href="https://wa.me/5550673454?text=Hola, buenas tardes, me gustaria agendar una cita para estetica🐶"
            target="_blank" class="whatsapp-btn">
            <i class="bi bi-whatsapp"></i>
            <span class="whatsapp-text">Agendar Ahora</span>
        </a>
    </div>
@endsection
