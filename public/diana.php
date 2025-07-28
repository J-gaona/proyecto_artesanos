<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Local Artesanal - Dicaro</title>
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
      <h1>Dicaro</h1>
      <div class="info-grid">
        <img src="../images/localdiana.jpeg" alt="Imagen del local" class="local-img">
        <div>
          <h3>Descripción del Local</h3>
          <p>El nombre Dicaro nace de las iniciales de su fundadora, Diana Carmenza Ramírez Orozco, como reflejo de identidad, esfuerzo y pasión por el arte. Este emprendimiento colombiano se especializa en la creación de joyas y accesorios artesanales únicos, elaborados totalmente a mano con técnicas tradicionales y contemporáneas. Dicaro ofrece una amplia variedad de productos hechos con amor y detalle: Joyas artesanales como collares, pulseras, anillos y tobilleras. Accesorios únicos como balacas, bolsos y más.</p>
          <p><strong>Dirección:</strong> Calle 4 No. 11 – 37 Centro</p>
          <p><strong>Teléfono:</strong> 3225341136</p>
          <p><strong>WhatsApp:</strong> 3225341136</p>
          <p><strong>Correo:</strong> dicaroaccesorios28@gmail.com</p>
          <p><strong>Instagram:</strong> @dicaro.accesorios</p>
          <p><strong>Facebook:</strong> @dicaro.accesorios</p>
        </div>
      </div>
    </div>
    <!-- Historia -->
    <div class="section">
      <h2>Historia del Local</h2>
      <p>Dicaro nació en 2002 en la ciudad como un emprendimiento liderado por una madre profesional, que al cuidar a su hijo con síndrome de Down, encontró en la bisutería artesanal hecha a mano una forma de crear, cuidar y emprender. Inició con collares artesanales y fue creciendo con técnicas como el telar de mostacillas, el Miyuki y el ensamble en alambre. Hoy, Dicaro representa el valor del emprendimiento femenino, la inclusión y el arte que nace del corazón.</p>
    </div>
    <!-- Usuario -->
    <div class="section">
      <h2>Artesano Responsable</h2>
      <div class="info-grid">
        <img src="../images/fotodiana.jpeg" alt="Foto del usuario" class="user-img">
        <div>
          <p><strong>Nombre:</strong> Diana Carmenza Ramírez</p>
          <p><strong>Correo:</strong> sebasaugus@hotmail.com</p>
        </div>
      </div>
    </div>
    <!-- Productos -->
    <div class="section">
      <h2>Productos Artesanales</h2>
      <div class="productos">
        <div class="producto">
          <img src="../images/rubidiana.jpeg" alt="Aretes Rubí">
          <h4>Aretes Rubí</h4>
          <p>Tejidos a mano con mostacilla checa y cristal Murano. Herrajes en acero inoxidable.</p>
          <p><strong>Precio:</strong> $35.000</p>
          <button>Ver más</button>
        </div>
        <div class="producto">
          <img src="../images/vibradiana.jpeg" alt="Pulseras Vibra">
          <h4>Pulseras Vibra</h4>
          <p>Resorte con piedras naturales, ojo turco, Murano y balines en acero. Energía y color.</p>
          <p><strong>Precio:</strong> $35.000</p>
          <button>Ver más</button>
        </div>
        <div class="producto">
          <img src="../images/alondradiana.jpeg" alt="Pulseras Alondra">
          <h4>Pulseras Alondra</h4>
          <p>Tejidas a mano con delicas de Miyuki y terminación en hilo ajustable. Color y estilo.</p>
          <p><strong>Precio:</strong> $40.000</p>
          <button>Ver más</button>
        </div>
        <div class="producto">
          <img src="../images/inspiraciondiana.jpeg" alt="Anillo Inspiración">
          <h4>Anillo Inspiración</h4>
          <p>Delicas de Miyuki sobre base ajustable en gold filled. Elegancia hecha a mano.</p>
          <p><strong>Precio:</strong> $50.000</p>
          <button>Ver más</button>
        </div>
        <div class="producto">
          <img src="../images/Esplendordiana.jpeg" alt="Maxiaretes Esplendor">
          <h4>Maxiaretes Esplendor</h4>
          <p>Tejidos con mostacilla checa y herraje en acero. Medida aprox. 5 cm.</p>
          <p><strong>Precio:</strong> $50.000</p>
          <button>Ver más</button>
        </div>
        <div class="producto">
          <img src="../images/encantodiana.jpeg" alt="Pulsera Encanto">
          <h4>Pulsera Encanto</h4>
          <p>Set en resorte con perlas de agua dulce, dijes y balines en acero. Femenina y moderna.</p>
          <p><strong>Precio:</strong> $140.000</p>
          <button>Ver más</button>
        </div>
        <div class="producto">
          <img src="../images/ilusiondiana.jpeg" alt="Candongas Ilusión">
          <h4>Candongas Ilusión</h4>
          <p>Tejidas en alambrismo con murano y base de acero inoxidable. Arte y ligereza.</p>
          <p><strong>Precio:</strong> $30.000</p>
          <button>Ver más</button>
        </div>
        <div class="producto">
          <img src="../images/florecitadiana.jpeg" alt="Candongas Florecita">
          <h4>Candongas Florecita</h4>
          <p>Tejidas a mano con mostacilla checa en base de acero. Diseño floral y alegre.</p>
          <p><strong>Precio:</strong> $35.000</p>
          <button>Ver más</button>
        </div>
        <div class="producto">
          <img src="../images/ternuradiana.jpeg" alt="Earcuff Ternura">
          <h4>Earcuff Ternura</h4>
          <p>Delicas de Miyuki tejidas a mano en base ajustable de rodio. Sin perforaciones.</p>
          <p><strong>Precio:</strong> $25.000</p>
          <button>Ver más</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>