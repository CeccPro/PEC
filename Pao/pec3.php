<?php require_once 'auth.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Proyecto Español - Reforestación</title>
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" href="css/styles.css">
</head>
<body class="matematicas-body">
  <header>
    <h1 class="matematicas-h1">Matemáticas</h1>
  </header>

<section class="matematicas-box reforestacion">
  <h2>Relación entre Matemáticas y Reforestación</h2>
  <p>Las matemáticas ayudan a comprender y planificar los procesos de reforestación. Permiten calcular cuántos árboles se necesitan plantar, estimar el crecimiento de un bosque, analizar la erosión del suelo y modelar el impacto ambiental a lo largo del tiempo.</p>

  <h3>¿Por qué es importante la reforestación?</h3>
  <ul>
    <li><strong>Reduce el CO₂:</strong> Los árboles absorben dióxido de carbono y ayudan a combatir el cambio climático.</li>
    <li><strong>Protege el suelo:</strong> Sus raíces evitan la erosión y mantienen la fertilidad.</li>
    <li><strong>Favorece la biodiversidad:</strong> Crea hábitats para plantas y animales.</li>
    <li><strong>Regula el agua:</strong> Ayuda a mantener ríos y mantos acuíferos.</li>
  </ul>

  <h3>Cálculo básico para reforestación</h3>
  <p>Ejemplo: Si una zona necesita plantar 2 árboles por cada metro cuadrado, y el área total es de 150 m²:</p>
  <p><strong>Árboles necesarios = 2 × 150 = 300 árboles</strong></p>
  <p>Estas operaciones se pueden modelar con gráficas usando funciones simples como proporciones, lineales o exponenciales.</p>
</section>

  <section class="matematicas-box intro">
    <h2>¿Qué es una gráfica?</h2>
    <p>Una gráfica es una representación visual de datos o funciones matemáticas. Nos permite observar el comportamiento de una ecuación, comparar valores y entender relaciones entre variables.</p>
  </section>

  <section class="matematicas-box matematicas-calculadora calculator">
    <h2>Calculadora de Funciones</h2>
    <p>Escribe una función en <strong>x</strong> para graficarla. Ejemplo: <code>x*x</code>, <code>Math.sin(x)</code>, <code>2*x+3</code></p>

    <input type="text" id="funcion" placeholder="Ingresa la función aquí" />
    <button onclick="graficar()">Graficar</button>
  </section>

  <section class="matematicas-box grafica">
    <h2>Gráfica</h2>
    <canvas id="canvasGrafica" class="matematicas-grafica"></canvas>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    let chart;

    function graficar() {
      const expresion = document.getElementById('funcion').value;
      const xValores = [];
      const yValores = [];

      for (let x = -10; x <= 10; x += 0.5) {
        try {
          const y = eval(expresion);
          xValores.push(x);
          yValores.push(y);
        } catch (error) {
          alert('Error en la función. Asegúrate de escribirla correctamente.');
          return;
        }
      }

      if (chart) chart.destroy();

      const ctx = document.getElementById('canvasGrafica').getContext('2d');
      chart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: xValores,
          datasets: [{
            label: 'Gráfica de la función',
            data: yValores,
            borderWidth: 2
          }]
        },
        options: {
          responsive: true,
          scales: {
            y: { beginAtZero: false }
          }
        }
      });
    }
  </script>
</body>
</html>
