import React from 'react'
import { Link, useLocation } from 'react-router-dom'

const Header = () => {
  const location = useLocation()

  return (
    <header>
      <nav className="navbar navbar-expand-lg navbar-ligth bg-vet-primary d-block fixed-top">
        <div className="container-fluid">
          <Link className="navbar-brand me-5" to="/">
            <img src="/assets/logo/logo-main.svg" alt="" width="120" height="auto"
              className="d-inline-block align-text-center" />
          </Link>
          <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span className="navbar-toggler-icon"></span>
          </button>
          <div className="collapse navbar-collapse " id="navbarScroll">
            <ul className="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style={{"--bs-scroll-height": "auto"}}>
              <li className="nav-item">
                <Link className={`nav-link ${location.pathname === '/' ? 'active' : ''}`} to="/">Inicio</Link>
              </li>
              <li className="nav-item">
                <a className="nav-link active" href="#about-me">Nosotros</a>
              </li>
              <li className="nav-item dropdown">
                <a className="nav-link active dropdown-toggle" href="#" id="navbarScrollingDropdown"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Servicios
                </a>
                <ul className="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarScrollingDropdown">
                  <li><Link className="dropdown-item" to="/vacunacion">Vacunacion</Link></li>
                  <li><Link className="dropdown-item" to="/desparasitacion">Desparasitación</Link></li>
                  <li><Link className="dropdown-item" to="/consulta">Consulta general</Link></li>
                  <li><Link className="dropdown-item" to="/estetica">Estetica canina</Link></li>
                </ul>
              </li>
              <li className="nav-item">
                <a className="nav-link active" href="#date" aria-disabled="true">Citas</a>
              </li>
            </ul>
            <form className="d-flex">
              <input className="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
              <button className="btn btn-outline-success" type="submit">
                <i className="fa-solid fa-magnifying-glass"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
      <div className="mt-5 pt-4"></div>
    </header>
  )
}

export default Header