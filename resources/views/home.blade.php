@extends('layouts.app')

@section('title','Lia Shop')

@section('index')
<section>
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item img-1 min-vh-100 active">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="font-weight-bold">Cajas hechas con amor <3</h5>
              <p>100% artesanal</p>
            </div>
          </div>
          <div class="carousel-item img-2 min-vh-100">
            <div class="carousel-caption d-none d-md-block">
              <h5>¡Deja volar tu imaginacion con tus diseños!</h5>
              <p>Crea tu propio diseño o escoge uno del catálogo</p>
            </div>
          </div>
          <div class="carousel-item img-3 min-vh-100">
            <div class="carousel-caption d-none d-md-block">
              <h5>Tu diseño puede ser parte de nuestro catálogo :)</h5>
              <p>Y llevará el nombre de tu mascota</p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

@endsection