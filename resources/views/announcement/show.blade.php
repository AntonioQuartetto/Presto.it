<x-template>
    <div class="container">
        @if (session('success'))
            <span class="badge text-bg-success">
                {{ session('success') }}
            </span>
        @endif
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row ">
                    <div class="col-12 col-md-6">
                        <img class="card-img-top mb-5 mb-md-0" src="" alt="">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            @if ($announcement->images)
                                <div class="carousel-inner">
                                    @foreach ($announcement->images as $image)
                                        <div class="carousel-item @if ($loop->first) active @endif"
                                            data-bs-interval="10000">
                                            <img src="{{ Storage::url($image->path) }}" class="img-fluid p-3 rounded"
                                                alt="">
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                        <img src="{{ Storage::url('\images\dafaultimage.png') }}" class="d-block w-100"
                                            alt="">
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">

                                    </div>
                                </div>

                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="{{ Storage::url('\images\dafaultimage.png') }}" class="d-block w-100"
                                        alt="...">
                                    <div class="carousel-caption d-none d-md-block">

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ Storage::url('\images\dafaultimage.png') }}" class="d-block w-100"
                                        alt="...">
                                    <div class="carousel-caption d-none d-md-block">

                                    </div>
                                </div>
                        </div>
                        @endif
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-12 col-md-6">

                    <h1 class="display-5 fw-bolder">{{ $announcement->title }}</h1>
                    <p><b>{{ __('ui.announcementShow') }}</b>:<span>€ {{ $announcement->price }}</span></p>
                    <p><b>{{ __('ui.announcementShow_2') }}</b>: {{ $announcement->body }}</p>
                    <p><b>{{ __('ui.announcementShow_3') }}</b>: {{ $announcement->category->name }}</p>
                    <p><b>{{ __('ui.announcementShow_4') }}</b>:
                        {{ $announcement->created_at->format('d-m-Y') }}</p>
                    <p><b>{{ __('ui.announcementShow_5') }}</b>: {{ $announcement->user->name }}</p>
                    <a href="{{ route('announcement.index') }}"
                        class="btn btn-dark">{{ __('ui.announcementShow_6') }}</a>
                    @auth
                        @if (Auth::user()->id == $announcement->user_id)
                            <a href="{{ route('announcement.edit', ['announcement' => $announcement->id]) }}"
                                class="btn btn-warning">{{ __('ui.announcementShow_7') }}</a>

                            <a class="btn btn-danger"
                                onclick="event.preventDefault(); document.querySelector('#form-delete-{{ $announcement->id }}').submit();">Elimina Annuncio</a>

                            <form class="d-none" id="form-delete-{{$announcement->id}}"
                                action="{{ route('announcement.destroy', ['announcement' => $announcement]) }}"
                                method="POST">
                                @method('DELETE')
                                @csrf
                                {{-- <button type="submit" class="btn btn-danger">Cancella Annuncio</button> --}}
                            </form>
                        @endif

                    @endauth

                </div>


            </div>
    </div>
    </section>
    </div>
</x-template>
