@extends('layouts.app')

@section('title','¡Únete a nuestra manada!')

@section('index')
<section>
      <div class="container1">
        <div class="row">
          <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5">¡Únete a nuestra manada!</h5>
                <form action=""method="post">
                    @csrf
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Username" required autofocus>
                    <label for="floatingInputUsername">Nombre de Usuario</label>
                  </div>
    
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    <label for="floatingInputEmail">Email</label>
                  </div>
    
                  <hr>
    
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="floatingPassword">Contraseña</label>
                  </div>
    
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                    <label for="floatingPasswordConfirm">Confirma Contraseña</label>
                  </div>
                    @if ($errors->has('password'))
                       <div class="alert alert-danger">
                         {{ $errors->first('password') }}
                      </div>
                    @endif

    
                  <div class="d-grid mb-2">
                    <button class="btn btn-lg btn-primary  btn-login fw-bold text-uppercase" type="submit">Registrar</button>
                  </div>
                </form>
                  <div class="text-center px-lg-5 pt-lg-3 pb-lg4 p-4 w-100">
                      <p class="d-inline-block mb-o">¿Ya tienes una cuenta?</p><a href="index.html" class="text-dark font-weight-bold text-decoration-none"> Ingresa ahora</a>
    
                  <div class="d-grid mb-2">
                      <button type="submit" class="btn btn-dark flex-grow-1"><i class="fa-brands fa-google lead  "></i> Google</button>
                    </button>
                  </div>
    
                  <div class="d-grid">
                      <button type="submit" class="btn btn-dark flex-grow-1 "><i class="fa-brands fa-facebook lead "></i> Facebook</button>
                    </button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
@endsection