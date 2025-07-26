<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Local Artesanal - Creaciones Malú</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 20px;
    }
    .container {
      max-width: 1000px;
      margin: 0 auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    h1, h2, h3 {
      color: #8b3e3e;
    }
    .section {
      margin-bottom: 40px;
    }
    .local-img, .user-img {
      max-width: 200px;
      border-radius: 10px;
    }
    .info-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      align-items: flex-start;
    }
    .productos {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
    }
    .producto {
      background-color: #fffaf7;
      border-radius: 10px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
      padding: 15px;
    }
    .producto img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 8px;
    }
    .producto h4 {
      margin: 10px 0 5px;
    }
    .producto p {
      font-size: 0.9em;
      color: #444;
    }
    .producto button {
      margin-top: 10px;
      padding: 8px;
      background-color: #8b3e3e;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
    }
    .producto button:hover {
      background-color: #6d2f2f;
    }
  </style>
</head>
<body>
  <div class="container">

    <!-- Local -->
    <div class="section">
      <h1>Creaciones Malú</h1>
      <div class="info-grid">
        <img src="../images/local.jpg" alt="Imagen del local" class="local-img">
        <div>
          <h3>Descripción del Local</h3>
          <p>Local especializado en productos artesanales elaborados completamente a mano, utilizando diversas técnicas como tejido, ensartado, ensamble, corte, tinturado y resinado. Ofrecemos una amplia variedad de creaciones hechas con hilo crochet, hilo macramé, calceta de plátano y cabuya. Cada pieza refleja la riqueza de nuestras tradiciones y el cuidado artesanal en cada detalle.</p>

          <p><strong>Dirección:</strong> Calle 123 #45-67, Barrio Artesanos</p>
          <p><strong>Teléfono:</strong> 311 4931433</p>
          <p><strong>WhatsApp:</strong> 311 4931433</p>
          <p><strong>Correo:</strong> creacionesmalu@gmail.com</p>
          <p><strong>Instagram:</strong> @creaciones_malu72</p>
          <p><strong>Facebook:</strong> Creaciones Malú</p>
        </div>
      </div>
    </div>

    <!-- Historia -->
    <div class="section">
      <h2>Historia del Local</h2>
      <p>Martha Aguirre es una artesana apasionada y una mujer resiliente. Junto a su esposo, enfrenta con coraje una difícil prueba: hace cinco años, él perdió la visión. Lejos de rendirse, convirtieron este reto en una oportunidad para unirse aún más. Hoy, él colabora en la creación de manillas artesanales, aportando con sus manos y su corazón. Para ellos, la artesanía es más que un oficio: es una forma de sanar, de amar y de seguir adelante, juntos.</p>
    </div>

    <!-- Usuario -->
    <div class="section">
      <h2>Artesano Responsable</h2>
      <div class="info-grid">
        <img src="../images/marthalucia.png" alt="Foto del usuario" class="user-img">
        <div>
          <p><strong>Nombre:</strong> Martha Lucia Aguirre</p>
          <p><strong>Correo:</strong> creacionesmalu@gmail.com</p>
        </div>
      </div>
    </div>

    <!-- Productos -->
    <div class="section">
      <h2>Productos Artesanales</h2>
      <div class="productos">

        <div class="producto">
          <img src="../images/manilla7nudos.jpg" alt="Manilla 7 nudos">
          <h4>Manilla 7 nudos de San Benito</h4>
          <p>Diseñada con hilo terlenca #15 y medalla de San Benito en acero.</p>
          <p><strong>Precio:</strong> $7.000</p>
          <button>Ver más</button>
        </div>

        <div class="producto">
          <img src="../images/pesebreengruta.png" alt="Pesebre artesanal">
          <h4>Pesebre en gruta de icopor</h4>
          <p>Hecho con icopor, calceta de plátano, base en madera y figuras de arcilla.</p>
          <p><strong>Precio:</strong> $20.000</p>
          <button>Ver más</button>
        </div>

        <div class="producto">
          <img src="../images/manillademostacilla.png" alt="Manilla checa">
          <h4>Manilla de Mostacilla Checa</h4>
          <p>Elaborada con mostacilla de colores y hilo de marroquinería.</p>
          <p><strong>Precio:</strong> $15.000</p>
          <button>Ver más</button>
        </div>

        <div class="producto">
          <img src="../images/bolsoimitacion.png" alt="Bolso Guayu">
          <h4>Bolso Imitación Guayu</h4>
          <p>Hecho con hilo crochet de colores y aguja de crochet.</p>
          <p><strong>Precio:</strong> $35.000</p>
          <button>Ver más</button>
        </div>

        <div class="producto">
          <img src="../images/tarjeteroenguadua.png" alt="Tarjetero">
          <h4>Tarjetero en Guadua</h4>
          <p>Elaborado en guadua y sesina.</p>
          <p><strong>Precio:</strong> $20.000</p>
          <button>Ver más</button>
        </div>

        <div class="producto">
          <img src="../images/monederodetotumo.png" alt="Monedero Totumo">
          <h4>Monedero de Totumo</h4>
          <p>Diseñado con totumo, pinturas acrílicas, tintilla, laca y cremallera.</p>
          <p><strong>Precio:</strong> $20.000</p>
          <button>Ver más</button>
        </div>

        <div class="producto">
          <img src="../images/monederodecoco.png" alt="Monedero Coco">
          <h4>Monedero de Coco</h4>
          <p>Hecho con cáscara de coco, lija, cremallera y cera vegetal.</p>
          <p><strong>Precio:</strong> $25.000</p>
          <button>Ver más</button>
        </div>

        <div class="producto">
          <img src="../images/llaveroentagua.jpg" alt="Llavero Tagua">
          <h4>Llavero en Tagua</h4>
          <p>Tagua, pinturas acrílicas, cordón cola de rata, herraje y resina.</p>
          <p><strong>Precio:</strong> $10.000</p>
          <button>Ver más</button>
        </div>

        <div class="producto">
          <img src="../images/bolsodetotumo.jpg" alt="Bolso Totumo">
          <h4>Bolso de Totumo</h4>
          <p>Hilo terlenca #5, totumo, tintilla, pinturas acrílicas y resina.</p>
          <p><strong>Precio:</strong> $35.000</p>
          <button>Ver más</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>