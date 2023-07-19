<x-template>
    <div class="container">
        @if (session('success'))
            <span class="badge text-bg-success">
                {{ session('success') }}
            </span>
        @endif
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-3">
                <div class="row ">
                    <div class="col-12 col-md-6">

                        @if ($announcement->images->count() > 0)
                            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner my-4">
                                    @foreach ($announcement->images as $image)
                                        <div class="carousel-item @if ($loop->first) active @endif"
                                            data-bs-interval="10000">
                                            <img src="{{ $image->getUrl(400, 300) }}" class="img-fluid w-100"
                                                alt="">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>

                            </div>
                        @else
                            <div>
                                <img src="{{ Storage::url('\images\dafaultimage.png') }}" class="d-block w-100"
                                    alt="">
                            </div>

                        @endif
                    </div>

                    <div class="col-12 col-md-6">
                        <h2 class="display-5 fw-bold text-warning">{{ $announcement->title }}
                            @auth
                                <span>

                                    @if (Auth::user()->id == $announcement->user_id)
                                        <a href="{{ route('announcement.edit', ['announcement' => $announcement->id]) }}"
                                            class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                    @endif

                                </span>
                            @endauth


                        </h2>


                        <p><b>{{ __('ui.announcementShow') }}</b>:<span>€ {{ $announcement->price }}</span></p>
                        <p><b>{{ __('ui.announcementShow_2') }}</b>: {{ $announcement->body }}</p>
                        <p><b>{{ __('ui.announcementShow_3') }}</b>: {{ $announcement->category->name }}</p>
                        <p><b>{{ __('ui.announcementShow_4') }}</b>:
                            {{ $announcement->created_at->format('d-m-Y') }}</p>
                        <p><b>{{ __('ui.announcementShow_5') }}</b>: {{ $announcement->user->name }}</p>
                        <a href="{{ route('announcement.index') }}"
                            class="btn btn-dark">{{ __('ui.announcementShow_6') }}</a>
                        {{-- @auth
                            @if (Auth::user()->id == $announcement->user_id)
                                <a href="{{ route('announcement.edit', ['announcement' => $announcement->id]) }}"
                                    class="btn btn-warning">{{ __('ui.announcementShow_7') }}</a>
                                <a class="btn btn-danger"
                                    onclick="event.preventDefault(); document.querySelector('#form-delete-{{ $announcement->id }}').submit();">{{ __('ui.announcementShow_8') }}</a>
                                <form class="d-none" id="form-delete-{{ $announcement->id }}"
                                    action="{{ route('announcement.destroy', ['announcement' => $announcement]) }}"
                                    method="POST">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            @endif
                        @endauth --}}
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Contatta il venditore <i class="bi bi-envelope"></i>
                        </button>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-dark">
                    QUI CI ANDRà IL FORM PER I CONTATTI !!!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


</x-template>
