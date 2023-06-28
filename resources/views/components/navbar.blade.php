
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">
      <a class="navbar-brand" href="{{route('page.homepage')}}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('announcement.create')}}">Inserisci annuncio</a>
          </li>     
          @auth
          <li class="nav-item"><b class="nav-link text-warning">Benvenuto {{ Auth::user()->name }}</b></li>
          <li class="btn-user">
          <a class="nav-link active" href="{{route('logout')}}" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
            <form id="form-logout" method="POST" action="{{ route('logout') }}" class="d-none">@csrf</form>
          <li>      
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown" aria-expanded="false">Area personale</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            </ul>
          </li>
          @endauth
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
            <ul class="dropdown-menu">
             @foreach ($categories as $category)
               <li><a href="{{route('categoryShow', compact('category'))}}" class="dropdown-item">{{$category->name}}</a></li>
               <li><hr class="dropdown-divider"></li>
             @endforeach
            </ul>
          </li>
        </ul>
        
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>