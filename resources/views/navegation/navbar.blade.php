<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{url('/')}}">Consintiendo a mi Mascota</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catalogo
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" href="{{url('/catalogo/perro')}}">Perro</a>
          <a class="dropdown-item" href="{{url('/catalogo/gato')}}">Gato</a>
        </div>
      </li>
      <li class="nav-item">
      <li class="nav-item active">

      <li class="nav-item">
        <a class="nav-link" href="{{url('/pqr/pqr')}}">PQR</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="{{url('/ayuda/ayuda')}}">Ayuda</a>
      </li>
      
    </ul>
     <form class="form-inline">
       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
     </form> 
  </div>  
</nav>