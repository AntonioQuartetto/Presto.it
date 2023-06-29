<x-template>

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
                <h1 class="display-5 fw-bolder">{{$announcement->title}}</h1>
                <p><b>Prezzo</b>:<span>{{$announcement->price}}</span></p>
                <p><b>Descrizione</b>: {{$announcement->body}}</p>
                <p><b>Categoria</b>: {{$announcement->category->name}}</p>
            <a href="{{ route('page.homepage') }}" class="btn btn-dark">Torna Indietro</a>
            </div>
        </div>
    </div>
</section>
</x-template>