<link rel="stylesheet" href="css/header/header.css">

<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color bg-dark smart-scroll">
	<div class="container">
  <a class="navbar-brand" href="/">TecnoGOO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fab fa-inicio-f"></i> Inicio
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#pqtecnogoo">
          <i class="fab fa-qsomos"></i> ¿Por qué Tecnogoo?</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fab fa-clientes"></i> Clientes</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#contacto"> 
          <i class="fab fa-contacto"></i> Contacto</a>
      </li>
    </ul>
  </div>
</div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  // add padding top to show content behind navbar
  $('body').css('padding-top', $('.navbar').outerHeight() + 'px')
  
  // detect scroll top or down
  if ($('.smart-scroll').length > 0) { // check if element exists
      var last_scroll_top = 0;
      $(window).on('scroll', function() {
          scroll_top = $(this).scrollTop();
          if(scroll_top < last_scroll_top) {
              $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
          }
          else {
              $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
          }
          last_scroll_top = scroll_top;
      });
  }
  </script>
