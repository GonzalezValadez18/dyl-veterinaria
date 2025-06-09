<header>
    <nav class="navbar navbar-expand-lg navbar-ligth bg-vet-primary d-block fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="{{ route('index') }}">
                <img src="{{ asset('assets/logo/logo-main.svg') }}" alt="" width="120" height="auto"
                    class="d-inline-block align-text-center">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: auto;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#about-me">Nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarScrollingDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="{{ route('vacunacion') }}">Vacunacion</a></li>
                            <li><a class="dropdown-item" href="{{ route('desparasitacion') }}">Desparasitación</a></li>
                            <li><a class="dropdown-item" href="{{ route('consulta') }}">Consulta general</a></li>
                            <li><a class="dropdown-item" href="{{ route('estetica') }}">Estetica canina</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#date" aria-disabled="true">Citas</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </nav>
</header>
<div class="mt-5 pt-4"></div>
