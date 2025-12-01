<?php require_once 'auth.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecosistemas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body class="biologia-body">
  <header class="biologia-header">
    <h1 class="biologia-h1">Ecosistemas</h1>
    
  </header>

  <div class="container mt-4">

    

  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('graficaBio');
    if (ctx) {
      new Chart(ctx.getContext('2d'), {
        type: 'line',
        data: {
          labels: ['Semana 1', 'Semana 2', 'Semana 3', 'Semana 4'],
          datasets: [{
            label: 'Crecimiento de una planta',
            data: [2, 5, 9, 14],
            borderWidth: 2
          }]
        },
        options: { responsive: true }
      });
    }
  </script>

    <div class="biologia-container-box container">
      <div class="biologia-icon">🌲</div>
      <h2 class="biologia-h2">Reforestación</h2>
      <p>La reforestación es el proceso de plantar árboles en zonas donde el bosque ha sido talado o dañado. Ayuda a restaurar ecosistemas, proteger especies, mejorar la calidad del aire y reducir el impacto del cambio climático.</p>
      <h3>Importancia de la Reforestación</h3>
      <ul>
        <li>🌿 Recupera hábitats naturales para plantas y animales.</li>
        <li>🌎 Reduce los niveles de CO₂ en la atmósfera.</li>
        <li>💧 Mantiene los ciclos del agua y protege ríos y suelos.</li>
        <li>🌱 Mejora la fertilidad del suelo y evita la erosión.</li>
      </ul>
    </div>

</body>
</html>
