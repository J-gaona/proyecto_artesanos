<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Productos del Artesano</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
      display: flex;
    }
    .container {
      display: flex;
      margin: 20px;
      width: 100%;
      gap: 20px;
    }
    .profile {
      width: 25%;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      padding: 20px;
    }
    .profile img {
      width: 100%;
      border-radius: 10px;
    }
    .profile h2 {
      text-align: center;
      margin: 15px 0 5px;
    }
    .contact-info {
      text-align: center;
      font-size: 0.9em;
      margin-bottom: 15px;
      color: #444;
    }
    .contact-info a {
      display: block;
      color: #555;
      text-decoration: none;
      margin-top: 4px;
    }
    .contact-info a:hover {
      text-decoration: underline;
    }
    .history {
      background-color: #ffe8dd;
      padding: 10px;
      border-left: 5px solid #c84c36;
      border-radius: 5px;
    }
    .history strong {
      display: block;
      margin-bottom: 5px;
      color: #c84c36;
    }
    .products {
      width: 75%;
    }
    .products h2 {
      margin-bottom: 20px;
      color: #772727;
    }
    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 20px;
    }
    .product-card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }
    .product-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }
    .product-card h3 {
      margin: 10px;
      font-size: 1.1em;
    }
    .product-card p {
      margin: 0 10px 10px;
      font-size: 0.9em;
      color: #444;
    }
    .product-card button {
      margin: 10px;
      padding: 8px;
      background-color: #8b3e3e;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .product-card button:hover {
      background-color: #6d2f2f;
    }
  </style>
</head>
<body>
<div class="container">
  <!-- Columna de perfil -->
  <div class="profile">
    <img src="../images/martha aguirre.png" alt="Foto Carmen Rodríguez">
    <h2>Martha Lucia Aguirre</h2>
    <div class="contact-info">
      <a href="mailto:creacionesmalu@gmail.com">creacionesmalu@gmail.com</a>
      <a href="tel:+573114931433">Tel: 311 4931433</a>
      <a href="https://www.instagram.com/creaciones_malu72" target="_blank">Instagram: @creaciones_malu72</a>
    </div>
    <div class="history">
      <strong>Historia:</strong>
      <p>Martha Aguirre es una artesana apasionada y una mujer resiliente. Junto a su esposo, enfrenta con coraje una difícil prueba: hace cinco años, él perdió la visión. Lejos de rendirse, convirtieron este reto en una oportunidad para unirse aún más. Hoy, él colabora en la creación de manillas artesanales, aportando con sus manos y su corazón. Para ellos, la artesanía es más que un oficio: es una forma de sanar, de amar y de seguir adelante, juntos. 
      </p>
    </div>
  </div>
  <!-- Columna de productos -->
  <div class="products">
    <h2>Productos de Creaciones Malu</h2>
    <div class="product-grid">
      <div class="product-card">
        <img src="../images/manilla 7 nudos.jpg" alt="Manilla 7 nudos de San Benito" />
        <h3>Manilla 7 nudos de San Benito</h3>
        <p>Manilla diseñada en hilo terlenca #15, con medalla de San Benito hecha de acero.</p>
        <button>Ver más</button>
      </div>
      <div class="product-card">
        <img src="../images/pesebre de gruta.png" alt="Pesebre en gruta de icopor" />
        <h3>Pesebre en gruta de icopor</h3>
        <p>Pesebre hecho en icopor, calceta de platano, base en madera y las figuras hechas en arcilla.</p>
        <button>Ver más</button>
      </div>
      <div class="product-card">
        <img src="../images/Manilla de mostacillacheca.png" alt="Manilla de Mostacilla Checa" />
        <h3>Manilla de Mostacilla Checa</h3>
        <p>Esta elaborada por mostacilla de colores y hilo de marroquineria.</p>
        <button>Ver más</button>
      </div>
      <div class="product-card">
        <img src="../images/Bolso imitacion guayu.png" alt="Bolso Imitacion Guayu" />
        <h3>Bolso Imitacion Guayu</h3>
        <p>Esta hecho a base de Hilo crochet de colores, aguja de crochet.</p>
        <button>Ver más</button>
      </div>
      <div class="product-card">
        <img src="../images/Tarjeteroenguadua.png" alt="Tarjeteros en Guadua" />
        <h3>Tarjeteros en Guadua</h3>
        <p>Esta elaborada en guadua y sesina.</p>
        <button>Ver más</button>
      </div>
      <div class="product-card">
        <img src="../images/Monederodetotumo.png" alt="Monedero de Totumo" />
        <h3>Monedero de Totumo</h3>
        <p>Esta diseñado con totumo, pinturas acrilica, tintilla, laca y cremallera.</p>
        <button>Ver más</button>
      </div>
       <div class="product-card">
        <img src="../images/Monederodecoco.png" alt="Monedero de Coco" />
        <h3>Monedero de Coco</h3>
        <p>Esta elaborado con cascara de coco, lija, cremallera y cera vegetal.</p>
        <button>Ver más</button>
      </div>
       <div class="product-card">
        <img src="../images/Llaveroentagua.jpg" alt="Llavero en Tagua" />
        <h3>Llavero en Tagua</h3>
        <p>Esta hecho en Tagua, pinturas acrílicas, cordón cola de rata, herraje de llavero y resina.</p>
        <button>Ver más</button>
      </div>
      <div class="product-card">
        <img src="../images/Bolsodetotumo.jpg" alt="Monedero de Coco" />
        <h3>Bolso de Totumo</h3>
        <p>Esta elaborado de hilo terlenca #5, totumo, tintilla, pinturas acrilicas y resina.</p>
        <button>Ver más</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>