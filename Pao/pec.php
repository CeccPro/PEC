<?php require_once 'auth.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto de Reforestación</title>
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <style>
    .user-info {
      position: absolute;
      top: 10px;
      right: 20px;
      background: rgba(255,255,255,0.9);
      padding: 10px 20px;
      border-radius: 20px;
      display: flex;
      align-items: center;
      gap: 15px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .user-info span {
      font-weight: bold;
      color: #333;
    }
    .btn-logout {
      background: #dc3545;
      color: white;
      border: none;
      padding: 5px 15px;
      border-radius: 15px;
      cursor: pointer;
      text-decoration: none;
      font-size: 0.9rem;
    }
    .btn-logout:hover {
      background: #c82333;
      color: white;
    }
  </style>
</head>
<body class="pec-body">
  <div class="user-info">
    <span>👤 <?php echo htmlspecialchars($_SESSION['username']); ?></span>
    <a href="logout.php" class="btn-logout">Cerrar Sesión</a>
  </div>
  
  <header class="pec-header">
    🌲 Reforestación Ambiental 🌲´
    
  </header>
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <!-- TODO: Cambia esto -->
      <img src="https://placehold.co/1200x400/4caf50/ffffff?text=Imagen+Proyecto+Reforestacion+1" alt="Reforestación 1" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <!-- TODO: Cambia esto -->
      <img src="https://placehold.co/1200x400/3caf60/ffffff?text=Imagen+Proyecto+Reforestacion+2" alt="Reforestación 2" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <!-- TODO: Cambia esto -->
      <img src="https://placehold.co/1200x400/7cff90/000000?text=Imagen+Proyecto+Reforestacion+3" alt="Reforestación 3" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

  <main class="pec-main">
    <section class="pec-section">
      <h2>Materias</h2>
      <div class="pec-materias">
        <div class="pec-materia"><button class="pec-button"><a href="pec2.php">Inglés</a></button></div>
        <div class="pec-materia"><button class="pec-button"><a href="español.php">Español</a></button></div>
        <div class="pec-materia"><button class="pec-button"><a href="pec3.php">Matemáticas</a></button></div>
        <div class="pec-materia"><button class="pec-button"><a href="biologia.php">Ecosistemas</a></button></div>
        <div class="pec-materia"><button class="pec-button"><a href="humanidades.php">Humanidades</a></button></div>
        <div class="pec-materia"><button class="pec-button"><a href="socioemocionales.php">Socio</a></button></div>
      </div>

      <div class="pec-botones">
        <button class="pec-button" onclick="mostrarCuestionario()">Cuestionario</button>
        <button class="pec-button" onclick="mostrarCalculadora()">Calculadora</button>
      </div>
    </section>

    <section id="cuestionario" class="pec-cuestionario" style="display:none;">
      <h2>Cuestionario sobre Reforestación</h2>
      <label>1. ¿Por qué es importante reforestar?</label>
      <input type="text" placeholder="Tu respuesta...">
      <label>2. ¿Qué tipo de árboles se deben plantar?</label>
      <input type="text" placeholder="Tu respuesta...">
      <label>3. ¿Cómo ayuda la reforestación al planeta?</label>
      <input type="text" placeholder="Tu respuesta...">
    </section>

    <section id="calculadora" class="pec-calculadora" style="display:none;">
      <h2>Calculadora de Reforestación</h2>
      <p>Calcula cuántos árboles compensan tus emisiones 🌳</p>
      <input type="number" id="co2" placeholder="kg CO₂">
      <button class="pec-button" onclick="calcularArboles()">Calcular</button>
      <p id="resultado"></p>
    </section>

    <section class="pec-section">
      <div class="pec-bloque">Fotos de los trabajos</div>

      <div class="pec-fotos">
        <!-- TODO: Cambia esto -->
        <img src="https://placehold.co/180x120/66bb6a/ffffff?text=Trabajo+1" alt="Trabajo 1">
        <!-- TODO: Cambia esto -->
        <img src="https://placehold.co/180x120/66bb6a/ffffff?text=Trabajo+2" alt="Trabajo 2">
        <!-- TODO: Cambia esto -->
        <img src="https://placehold.co/180x120/66bb6a/ffffff?text=Trabajo+3" alt="Trabajo 3">
      </div>
    </section>  </main>

  <script>
    // Mostrar/ocultar secciones
    function mostrarCuestionario() {
      document.getElementById('cuestionario').style.display = 'block';
      document.getElementById('calculadora').style.display = 'none';
    }

    function mostrarCalculadora() {
      document.getElementById('calculadora').style.display = 'block';
      document.getElementById('cuestionario').style.display = 'none';
    }

    // Calculadora de árboles
    function calcularArboles() {
      const co2 = parseFloat(document.getElementById('co2').value);
      if (isNaN(co2) || co2 <= 0) {
        document.getElementById('resultado').innerText = "Por favor ingresa un valor válido.";
        return;
      }
      const arboles = (co2 / 22).toFixed(1);
      document.getElementById('resultado').innerText = `Necesitas plantar aproximadamente ${arboles} árboles 🌳`;
    }
  </script>
  <!-- Bootstrap JS para que funcione el carrusel -->
  <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
  <!-- SECCIÓN DE EMISIONES GLOBALES -->
<section style="padding: 40px; background-color: #f4f4f4; text-align: center;">
  <h2 style="font-size: 28px; font-weight: bold; margin-bottom: 30px;">
    Distribución de las Emisiones Globales por Sector:
  </h2>

  <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">

    <div style="width: 200px; margin: 20px;">
      <div style="font-size: 40px; font-weight: bold; color: #ff8800;">40%</div>
      <h4>Desglose de Desechos</h4>
      <p>Los residuos orgánicos constituyen la mayor parte. Su manejo es clave para la sostenibilidad.</p>
    </div>

    <div style="width: 200px; margin: 20px;">
      <div style="font-size: 40px; font-weight: bold; color: #ff8800;">30%</div>
      <h4>Plásticos en el Medio Ambiente</h4>
      <p>El plástico es una amenaza significativa y tarda años en degradarse.</p>
    </div>

    <div style="width: 200px; margin: 20px;">
      <div style="font-size: 40px; font-weight: bold; color: #ff8800;">20%</div>
      <h4>Impacto Ambiental</h4>
      <p>Los desechos peligrosos requieren manejo especial por su alto impacto.</p>
    </div>

    <div style="width: 200px; margin: 20px;">
      <div style="font-size: 40px; font-weight: bold; color: #ff8800;">10%</div>
      <h4>Proporción de Otros</h4>
      <p>Papel, metales y vidrio generan menor impacto comparado con plásticos.</p>
    </div>

  </div>
</section>

  <!-- REDES SOCIALES + FORMULARIO -->
<section style="background-color: #000; color: #fff; padding: 40px;">
  <div style="display: flex; justify-content: space-between; flex-wrap: wrap;">

    <!-- Redes -->
    <div style="width: 45%; min-width: 250px;">
      <h3>Síguenos en nuestras Redes Sociales</h3>

      <div style="display: flex; gap: 15px; margin: 20px 0;">

        <!-- Instagram -->
        <a href="#" target="_blank">
          <img src="images/instagram.webp"
               alt="Instagram"
               style="width:45px;">
        </a>

        <!-- YouTube -->
        <a href="#" target="_blank">
          <img src="images/youtube.webp"
               alt="YouTube"
               style="width:70px;">
      
        </a>

        <!-- TikTok -->
        <a href="#" target="_blank">
          <!-- TODO: Cambia esto -->
          <img src="https://placehold.co/45x45/000000/ffffff?text=TT"
               alt="TikTok"
               style="width:45px;">
        </a>

        <!-- Facebook -->
        <a href="#" target="_blank">
          <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
               alt="Facebook"
               style="width:45px;">
        </a>

      </div>

      <p style="font-size: 18px;">Correo:</p>
      <p style="font-size: 20px; font-weight: bold;">
       paola.sa230957cbta35.edu.mx
      </p>
    </div>

    <!-- Formulario -->
    <div style="width: 45%; min-width: 250px; background: #fff; color: #000; padding: 20px; border-radius: 10px;">
      <h3>Cuestionario</h3>

      <form>
        <label>Nombre</label>
        <input type="text" style="width: 100%; margin-bottom: 10px; padding: 8px;">

        <label>Correo Electrónico</label>
        <input type="email" style="width: 100%; margin-bottom: 10px; padding: 8px;">

        <label>Mensaje</label>
        <textarea style="width: 100%; margin-bottom: 10px; padding: 8px;"></textarea>

        <button style="background-color: #ffbb00; border: none; padding: 10px 20px; cursor: pointer;">
          Enviar
        </button>
      </form>
    </div>

  </div>
</section>

</body>
</html>
