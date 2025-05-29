<!--presentacion-->
<main class="hero-section" style="background-color: #2b233c;">
  <img src="<?= base_url('public/assets/img/tython.titulo.jpg') ?>" 
       alt="Tython Hero Image" 
       style="width: 100%; height: auto; display: block;">
</main>
<!--fin de presentacion-->


<!--franja-->
<section class="franja-servicios">
  <div class="franja-contenido">
    <h2>Transformamos ideas en soluciones</h2>
    <p>
      Los servicios administrados implican externalizar la gestión diaria y el soporte técnico de su infraestructura a un proveedor externo. 
      Estos servicios garantizan la seguridad, eficiencia y conformidad de su entorno.
    </p>
    <a href="<?= base_url('contacto') ?>" class="btn-franja">Contactanos</a>
  </div>
</section>
<!--fin de franja-->


<!-- Carousel -->
 <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/assets/img/mision.png" class="d-block w-100 img-fluid" alt="mision" style="max-height: 500px; object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="public/assets/img/objetivo.png" class="d-block w-100 img-fluid" alt="objetivo" style="max-height: 500px; object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="public/assets/img/logros.png" class="d-block w-100 img-fluid" alt="logros" style="max-height: 500px; object-fit: cover;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Fin del Carousel -->

<!--noticias destacadas-->
<div class="container py-5">
  <h2 class="text-center mb-4">Noticias Destacadas</h2>

  <!-- Buscador -->
  <div class="mx-auto search-bar">
    <input type="text" id="buscador" class="form-control" placeholder="Buscar noticias...">
  </div>

  <!-- Noticias -->
  <div class="row" id="contenedorNoticias">

    <!-- Tarjeta 1 -->
    <div class="col-md-4 mb-4 tarjeta-noticia">
      <div class="card card-news">
        <img src="https://www.investopedia.com/thmb/wuuss_5lSKqGckNngtP1__7qEk4=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/Blockchain_final-086b5b7b9ef74ecf9f20fe627dba1e34.png" class="card-img-top" alt="Noticia 1">
        <div class="card-body">
          <small class="text-muted">24 de Marzo de 2025</small>
          <h5 class="card-title">Datos sobre blockchain</h5>
          <p class="card-text">Qué es, como funciona y como se puede utilizar.</p>
          <div class="d-flex justify-content-between">
            <div><i class="bi bi-heart"></i> 249</div>
            <div><i class="bi bi-eye"></i> 1.308</div>
          </div>
          <a href="https://www.investopedia.com/terms/b/blockchain.asp" class="btn btn-link text-danger mt-2">Leer más →</a>
        </div>
      </div>
    </div>

   <!-- Tarjeta 2 -->
    <div class="col-md-4 mb-4 tarjeta-noticia">
      <div class="card card-news">
        <img src="https://www.latrochadigital.com.ar/wp-content/uploads/2025/05/f768x1-971118_971245_5050.webp" class="card-img-top" alt="Noticia 2">
        <div class="card-body">
          <small class="text-muted">22 de Mayo de 2025</small>
          <h5 class="card-title">Google presenta traduccion en tiempo real</h5>
          <p class="card-text">Google presentó una función revolucionaria para videollamadas en Meet.</p>
          <div class="d-flex justify-content-between">
            <div><i class="bi bi-heart"></i> 300</div>
            <div><i class="bi bi-eye"></i> 980</div>
          </div>
          <a href="https://www.latrochadigital.com.ar/2025/05/22/google-anuncio-un-traductor-en-tiempo-real-que-mantiene-tu-voz-original/" class="btn btn-link text-danger mt-2">Leer más →</a>
        </div>
      </div>
    </div>

    <!-- Tarjeta 3 -->
    <div class="col-md-4 mb-4 tarjeta-noticia">
      <div class="card card-news">
        <img src="https://media.es.wired.com/photos/6830d91e20b59a5e4477622a/16:9/w_1920,c_limit/GettyImages-1740925125.jpg" class="card-img-top" alt="Noticia 2">
        <div class="card-body">
          <small class="text-muted">24 de Mayo de 2025</small>
          <h5 class="card-title">Los riesgos del mal uso de IA</h5>
          <p class="card-text">Claude Opus 4 es el primer modelo de Anthropic que identifica a los sistemas de IA que aumentan sustancialmente el riesgo de mal uso catastrófico.</p>
          <div class="d-flex justify-content-between">
            <div><i class="bi bi-heart"></i> 124</div>
            <div><i class="bi bi-eye"></i> 745</div>
          </div>
          <a href="https://es.wired.com/articulos/claude-opus-4-la-nueva-ia-de-anthropic-fue-capaz-de-chantajear" class="btn btn-link text-danger mt-2">Leer más →</a>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- fin noticias destacadas-->
