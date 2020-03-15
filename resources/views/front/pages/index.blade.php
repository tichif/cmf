@extends('front.layout.app')

@section('content')
    <!--  Carousel-->
  <!--SHOWCASE SLIDER-->
  <section id="showcase">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-image-1 active">
          <div class="container">
          </div>
        </div>

        <div class="carousel-item carousel-image-2">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block mb-5">
              <h1 class="display-3">Gallerie</h1>
              <a href="{{ url('/gallerie') }}" class="btn btn-primary btn-lg">Voir plus <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-3">
          <div class="container">

          </div>
        </div>
      </div>
      <!--Carousel Control-->
      <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a href="#myCarousel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>
  <!--  end Carousel-->

  <!--  About section-->
  <section id="section-accueil">
    <div class="section-text text-center">
      <h3>College Methodiste de Freres</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, ratione.</p>
      <a href="{{ url('/apropos') }}" class="btn btn-danger btn-lg"> <i class=" fa fa-info-circle"></i> A propos</a>
    </div>
  </section>
  <!--  end About -->

  <!--  Section Activitee/ Contact-->
  <section id="activitees-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center mb-4">
          <h3>Suivre toutes nos activités</h3>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, sit.</p>
          <a href="{{ url('/calendrier') }}" class="btn btn-outline-warning btn-lg"><i class="fa fa-calendar"></i> Voir plus</a>
        </div>
        <div class="col-md-6 text-center mb-3">
          <h3>Nous contacter</h3>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, sit.</p>
          <a href="{{ url('/contact') }}" class="btn btn-outline-secondary btn-lg"><i class="fa fa-pencil"></i> Nous ecrire</a>
        </div>
      </div>
    </div>
  </section>
  <!--  end Section Activitee/ Contact-->
@endsection