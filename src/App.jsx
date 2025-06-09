import React from 'react'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import Header from './components/Header'
import Footer from './components/Footer'
import Home from './pages/Home'
import Vacunacion from './pages/services/Vacunacion'
import Desparasitacion from './pages/services/Desparasitacion'
import Estetica from './pages/services/Estetica'
import Consulta from './pages/services/Consulta'
import WhatsAppButton from './components/WhatsAppButton'

function App() {
  return (
    <Router>
      <div className="App">
        <Header />
        <main className="fade-in">
          <Routes>
            <Route path="/" element={<Home />} />
            <Route path="/vacunacion" element={<Vacunacion />} />
            <Route path="/desparasitacion" element={<Desparasitacion />} />
            <Route path="/estetica" element={<Estetica />} />
            <Route path="/consulta" element={<Consulta />} />
          </Routes>
        </main>
        <WhatsAppButton />
        <Footer />
      </div>
    </Router>
  )
}

export default App