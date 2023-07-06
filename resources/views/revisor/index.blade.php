<x-template>
  
  <div class="container-fluid p-5 bg-gradient my-bg shadow">
    <div class="row">
      <div class="col-12 text-light p-1 fs-3 text-center ">
        {{$announcement_to_check ? 'Ci sono alcuni annunci da revisionare ' : 'Non ci sono annunci da revisionare'}}
      </div>
    </div>
  </div>
  @if (session()->has('message'))
  <div class="bg-warning text-dark p-3 text-center">
    {{session('message')}}
  </div>
  @endif
  @if (Session::has('modifyAnnouncement'))
  <form action="{{route('revisor.rewind_announcements')}}" method="POST" class="text-center mt-5">
    @csrf
    @method('PATCH')
    <h3>Hai sbagliato? Clicca qua-> <button type="submit" class="btn btn-danger shadow">Annulla</button></div></h3>
  </form>
  @endif
  
  @if ($announcement_to_check)
  <div class="container">
    <section class="py-5">
      <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
          <div class="col-md-6">
            <img class="card-img-top mb-5 mb-md-0"  src="" alt="">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="{{Storage::url('\images\dafaultimage.png')}}" class="d-block w-100" alt="">
                  <div class="carousel-caption d-none d-md-block">
                    {{-- <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p> --}}
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{Storage::url('\images\dafaultimage.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      {{-- <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p> --}}
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{Storage::url('\images\dafaultimage.png')}}" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        {{-- <h5>Third slide label</h5>
                          <p>Some representative placeholder content for the third slide.</p> --}}
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
                <div class="col-md-6">
                  <a>
                    <h1 class="display-5 fw-bolder">{{$announcement_to_check->title}}</h1>
                    <p><b>Prezzo</b>:<span>€ {{$announcement_to_check->price}}</span></p>
                    <p><b>Descrizione</b>: {{$announcement_to_check->body}}</p>
                    <p><b>Categoria</b>: {{$announcement_to_check->category->name}}</p>
                    <p><b>Pubblicato il</b>: {{$announcement_to_check->created_at->format('d-m-Y')}}</p>
                    
                    <div class="row mt-5">
                      <div class="col-12 col-md-6 text-center">
                        <form action="{{route('revisor.accept_announcements', ['announcement'=> $announcement_to_check])}}" method="POST">
                          @csrf
                          @method('PATCH')
                          <button type="submit" class="btn btn-success shadow">Accetta</button>
                        </div> 
                        <div class="col-12 col-md-6">
                        </form>
                        <form action="{{route('revisor.reject_announcements', ['announcement'=> $announcement_to_check])}}" method="POST">
                          @csrf
                          @method('PATCH')
                          <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                        </div> 
                      </form></div>
                      
                      
                    </div>
                    
                  </div>
                </section>
              </div>       
              @endif  
              <ul>
                <h3>Ricordati solamente alcune regole:</h3>
                <li>Sii il meno soggettivo possibile;</li>
                <li>Rifiuta se nell'annuncio è presente un linguaggio inapropiato;</li>
                <li>Rifiuta se non viene rispettata la nostra policy o la legge;</li>
                <li>Rifiuta annunci dove non è presente il prezzo o un titolo sensato;</li>
                <li>Accetta solamente se sei sicuro che tutto il resto venga rispettato.</li>
              </ul>       
            </x-template>