<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cafetería Aroma</title>
  <link rel="stylesheet" href="tasa.css" />
  <link rel="stylesheet" href="registro.css"/>
</head>
<body>
  <header>
 <div class="logo">
  <a href="admin.html">
    <img src="aroma.png" alt="Logo Café Aroma">
  </a>
  <h1>CAFETERIA AROMA</h1>
</div>
  <nav>
    <ul>
      <li><a href="historia.html">CONOCENOS</a></li>
      <li><a href="index.html">INICIO</a></li>
      <li><a href="Alimentos.html">MENU</a></li>
      <li><a href="pedidos.html">PEDIDO</a></li>
    </ul>
  </nav>
</header>

<br>
<div class="form-wrapper">
  <video autoplay muted loop class="video-left">
    <source src="SPOT CAFÉ ☕️ _ Video Producto _ Broll(360P).mp4" type="video/mp4">
    Tu navegador no soporta el video.
  </video>

  <div class="form-container">
    <h2>☕ REGÍSTRATE</h2>

    <div class="form-group"> 
<input type="text" id="nombre" placeholder="Nombre completo">
    </div>

    <div class="form-group">
      <input type="email" id="correo" placeholder="Correo electrónico">
    </div>

    <div class="form-group">
      <input type="tel" id="telefono" placeholder="Número de teléfono">
    </div>


    <button class="btn-register" onclick="registrar()">Registrarse</button>

     
    <button class="btn-return" onclick="window.location.href='index.html'">Regresar</button>

    <div class="login-link">
      ¿Ya tienes cuenta? <a href="seccion.html">Inicia sesión</a>
    </div>
  </div>

  <video autoplay muted loop class="video-right">
    <source src="SPOT CAFÉ ☕️ _ Video Producto _ Broll(360P).mp4" type="video/mp4">
    Tu navegador no soporta el video.
  </video>
</div>


<br>
 <footer>
    <div class="footer-contenido">
      <div class="footer-texto">
        <p>Todos los derechos reservados</p>
        <p>@cafeteriaaroma</p>
        <p>Jonathan Jatsbany Nicolás Arzate<br>Juan Carlos Esquivel Rojas</p>
      </div>
      <div class="redes">
        <a href="https://wa.me/5210000000000" target="_blank">
          <img src="piewatsap.jpg" alt="WhatsApp" class="img-footer">
        </a>
        <a href="https://www.facebook.com/share/1Ami3KjsKd/" target="_blank">
          <img src="face.jpg" alt="Facebook" class="img-footer">
        </a>
        <a href="https://www.instagram.com/nicolas_j07j" target="_blank">
          <img src="instas.jpg" alt="Instagram" class="img-footer">
        </a>
      </div>
    </div>
  </footer>


<script>
  function registrar() {
    const nombre = document.getElementById('nombre').value.trim();
    const correo = document.getElementById('correo').value.trim();
    const telefono = document.getElementById('telefono').value.trim();

    if (nombre && correo && telefono) {
      // Simula registro exitoso
      alert("✅ Registro completado correctamente.");
      // Aquí podrías enviar los datos a PHP con fetch/AJAX si es necesario
    } else {
      alert("❌ Ha ocurrido un error inesperado. Por favor, completa todos los campos.");
    }
  }
</script>



</body>
</html>
