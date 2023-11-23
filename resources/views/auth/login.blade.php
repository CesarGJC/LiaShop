@extends('layouts.app')

@section('title','Login')

@section('index')
      <div class="row g-0">
        <div class="col-lg-7 d-none d-lg-block">
          <div
            id="carouselExampleCaptions"
            class="carousel slide"
            data-bs-ride="carousel"
          >
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
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-lg-5 d-flex flex-column align-items-end min-vh-100">
          <div class="px-lg-5 pt-lg-4 pb-lg3 p-4 w-100 mb-auto">
            <img src="/images/Logo.png" fill="none" alt="img-fluid" />
          </div>
          <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4">
            <h1 class="font-weight-bold mb-4">Bienvenido de vuelta</h1>
            
          <form class="mb-5" action="" method="post">
                @csrf
              <div class="mb-4">
                <label
                  for="exampleInputEmail1"
                  class="form-label font-weight-bold"
                  >Email</label
                >
                <input
                  type="email"
                  class="form-control bg-light-x border-0"
                  placeholder="Ingrese tu email"
                  id="email" name='email'
                  aria-describedby="emailHelp"
                />
              </div>
              <div class="mb-4">
                <label
                  for="exampleInputPassword1"
                  class="form-label font-weight-bold"
                  >Contraseña</label
                >
                <input
                  type="password"
                  class="form-control bg-light-x border-0 mb-2"
                  placeholder="Ingresa tu contraseña"
                  id="password" name='password'
                />
                @error('message')
                <div class="alert alert-danger" role="alert">
                    Password o Email incorrecto
                </div>
                @enderror
               
                <a
                  href="#"
                  id="emailHelp"
                  class="form-text text-muted text-decoration-none"
                  >¿Has olvidado tu contraseña?</a
                >
              </div>
              <button type="submit" class="btn btn-primary w-100">
                Iniciar sesión
              </button>
          </form>
            <p class="font-weight-bold text-center text-muted">
              o inicia sesión con
            </p>
            <div class="d-flex justify-content-around">
              <button type="button" class="btn btn-dark flex-grow-1 me-2">
                <i class="fa-brands fa-google lead mr-2"></i> Google
              </button>
              <button type="button" class="btn btn-dark flex-grow-1 ms-2">
                <i class="fa-brands fa-facebook lead mr-2"></i> Facebook
              </button>
            </div>
          </div>
          <div class="text-center px-lg-5 pt-lg-3 pb-lg4 p-4 w-100">
            <p class="d-inline-block mb-o">¿Aún no tienes una cuenta?</p>
            <a
              href="{{route('register.index')}}"
              class="text-dark font-weight-bold text-decoration-none"
            >
              Crea una ahora</a
            >
          </div>
        </div>
      </div>

@endsection