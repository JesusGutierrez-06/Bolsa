@extends( 'welcome')
@section('title','Home')
@section('contenido')

<br>
<div id="slider-ins" class="carousel slide" data-ride="carousel">
  <!-- Indicadores -->
  <ol class="carousel-indicators">
    <li data-target="#slider-ins" data-slide-to="0" class="active"></li>
    <li data-target="#slider-ins" data-slide-to="1"></li>
    <li data-target="#slider-ins" data-slide-to="2"></li>
  </ol>
  <!-- Imagenes -->
  <div class="carousel-inner" role="listbox">
  
  <!-- Primera imagen -->
    <div class="item active">
      <img src="{{asset('/static/assets/gallery/fachada.jpg')}}" alt="Default">
      <div class="carousel-caption">
        Lorem ipsum dolor sit amet
      </div>
    </div>
  
  <!-- Segunda imagen -->
    <div class="item">
      <img src="{{asset('/static/assets/gallery/banner.png')}}" alt="Default">
      <div class="carousel-caption">
        Lorem ipsum dolor sit amet
      </div>
    </div>
  
  <!-- Tercera imagen -->
    <div class="item">
      <img src="{{asset('/static/assets/gallery/default.png')}}" alt="Default">
      <div class="carousel-caption">
        Lorem ipsum dolor sit amet
      </div>
    </div>
    
  </div>

  <!-- Controles -->
  <a class="left carousel-control" href="#slider-ins" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#slider-ins" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<section class="text-center important-links-index">
    <h2 class="titles">Sitios y enlaces importantes</h2>

    <a href="#!" class="open-link-newTab">
        <i class="fa fa-graduation-cap"></i>
        <p>Clases Online</p>
    </a>

    <a href="#!" class="open-link-newTab">
        <i class="fa fa-book"></i>
        <p>Libreria</p>
    </a>

    {{-- <a href="#!" class="open-link-newTab">
        <i class="fa fa-globe"></i>
        <p>JOVENES A.T.T</p>
    </a> --}}

    <a href="#!" class="open-link-newTab">
        <i class="fa fa-star-o"></i>
        <p>Promo. INS</p>
    </a>

    <a href="#!" class="open-link-newTab">
        <i class="fa fa-file-text-o"></i>
        <p>Cons.conducta</p>
    </a>

    <a href="#!" class="open-link-newTab">
        <i class="fa fa-download"></i>
        <p>Descargas</p>
    </a>
</section>
@endsection