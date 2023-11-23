<header>
      <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('login.index')}}">Lia Shop</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="{{route('hacemos')}}"
                  >¿Qué hacemos?</a
                >
              </li>
              <li class="nav-item">
                <a
                  download="Catalogo"
                  class="nav-link"
                  href="/images/Catálogo.pdf"
                  >Catalogo</a
                >
              </li>

              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="{{route('somos')}}"
                  >¿Quiénes Somos?</a
                >
              </li>
            </ul>
            @if(auth()->check())
            <form class="d-flex" role="Logins">
                  <a class="me-2">Bienvenido <b>{{auth()->user()->name}}</b></a>
                  <a class="btn btn-primary" href="{{route('login.destroy')}}">Cerrar Sesion</a>
            </form>
            @else
              <form class="d-flex" role="Logins">
                  <a class="btn btn-primary me-2" href="{{route('login.index')}}">Ingresar</a>
                  <a class="btn btn-primary" href="{{route('register.index')}}">Registrar</a>
              </form>
            @endif
            
          </div>
        </div>
      </nav>
    </header>
