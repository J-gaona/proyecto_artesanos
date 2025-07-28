<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Local Artesanal - KILLARI</title>
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
      <h1>KILLARI</h1>
      <div class="info-grid">
        <img src="../images/localcecilia.jpeg" alt="Imagen del local" class="local-img">
        <div>
          <h3>Descripción del Local</h3>
          <p>En Killari, fusionamos el verdadero valor de la artesanía tradicional con el espíritu del emprendimiento moderno. Cada pieza que creamos cuenta una historia única, tejida por manos expertas que dominan técnicas ancestrales, utilizando materiales 100% naturales. Somos más que una marca: somos un puente entre culturas, tradiciones y el mundo contemporáneo.</p>
          <p><strong>Dirección:</strong> Calle 4 No. 11 – 37 Centro</p>
          <p><strong>Teléfono:</strong> 3187313614</p>
          <p><strong>WhatsApp:</strong> 3187313614</p>
          <p><strong>Correo:</strong> killariarteycultura@gmail.com</p>
          <p><strong>Instagram:</strong> </p>
          <p><strong>Facebook:</strong> </p>
        </div>
      </div>
    </div>
    <!-- Historia -->
    <div class="section">
      <h2>Historia</h2>
      <p>Killari significa “luz de luna” en quechua, y representa la fusión entre tradición y arte hecho a mano. Este emprendimiento colombiano valora el trabajo artesanal, las raíces culturales y la belleza de lo simple. Cada pieza cuenta una historia única, creada con pasión por manos expertas. Killari no es solo un local, es un espacio auténtico donde la artesanía se convierte en un lenguaje que conecta corazones. Una invitación a redescubrir lo natural, lo nuestro y lo eterno.
    </div>
    <!-- Usuario -->
    <div class="section">
      <h2>Artesano</h2>
      <div class="info-grid">
        <img src="../images/cecilia.jpeg" alt="Foto del usuario" class="user-img">
        <div>
          <p><strong>Nombre:</strong> Martha Cecilia Echeverry Polanco</p>
          <p><strong>Correo:</strong> istrion@gmail.com</p>
        </div>
      </div>
    </div>
    <!-- Productos -->
    <div class="section">
      <h2>Productos Artesanales</h2>
      <div class="productos">
        <div class="producto">
          <img src="../images/collarescuarzo.jpeg" alt="Collares en cuarzo">
          <h4>Collares en Cuarzo</h4>
          <p>Elaborados cuidadosamente a mano con minerales 100% auténticos.</p>
          <p><strong>Precio:</strong> $25.000</p>
          <button>Ver más</button>
        </div>
        <div class="producto">
          <img src="../images/piedrascecilia.jpeg" alt="Collares piedras naturales">
          <h4>Collares en Piedras naturales</h4>
          <p>Creaciones únicas que resaltan la belleza natural y energía de los minerales.</p>
          <p><strong>Precio:</strong> $50.000</p>
          <button>Ver más</button>
        </div>
        <div class="producto">
          <img src="../images/mostacillacecilia.jpeg" alt="Collares de mostacilla">
          <h4>Collares en Mostacilla</h4>
          <p>Diseños artesanales con técnicas indígenas y colores vibrantes.</p>
          <p><strong>Precio:</strong> $60.000</p>
          <button>Ver más</button>
        </div>
        <div class="producto">
          <img src="../images/cobrececilia.jpeg" alt="Manillas de cobre">
          <h4>Manillas en Cobre</h4>
          <p>Elegantes, duraderas y con propiedades antimicrobianas.</p>
          <p><strong>Precio:</strong> $25.000</p>
          <button>Ver más</button>
        </div>
        <div class="producto">
          <img src="../images/piedracecilia.jpeg" alt="Manillas en piedra">
          <h4>Manillas elaboradas en Piedra</h4>
          <p>Accesorios artesanales resistentes, elegantes y auténticos.</p>
          <p><strong>Precio:</strong> $20.000</p>
          <button>Ver más</button>
        </div>
        <div class="producto">
          <img src="../images/mochilascecilia.jpeg" alt="Mochilas hiladas">
          <h4>Mochilas Hiladas</h4>
          <p>Tejidas a mano, resistentes y reflejo de tradición artesanal.</p>
          <p><strong>Precio:</strong> $40.000</p>
          <button>Ver más</button>
        </div>
        <div class="producto">
          <img src="../images/cuerocecilia.jpeg" alt="Monederos de cuero">
          <h4>Monederos en cuero</h4>
          <p>Elegantes, funcionales y duraderos, hechos con cuero genuino.</p>
          <p><strong>Precio:</strong> $15.000 y $17.000</p>
          <button>Ver más</button>
        </div>
        <div class="producto">
          <img src="../images/cartucheracecilia.jpeg" alt="Cartucheras de aguayo">
          <h4>Cartucheras de Aguayo</h4>
          <p>Elaboradas con tela andina resistente y de vivos colores.</p>
          <p><strong>Precio:</strong> $20.000</p>
          <button>Ver más</button>
        </div>
        <div class="producto">
          <img src="../images/monderocecilia.jpeg" alt="Monederos de correa">
          <h4>Monederos de correa en cuero</h4>
          <p>Funcionales y resistentes, para llevar con cinturón.</p>
          <p><strong>Precio:</strong> $15.000 y $20.000</p>
          <button>Ver más</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>