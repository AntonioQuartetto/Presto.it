<x-template>
    <div class="container">
        @if (session('success'))
            <span class="badge text-bg-success">
                {{ session('success') }}
            </span>
        @endif
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-3">
                <a href="{{ route('announcement.index') }}" class="btn btn-warning mb-3"><i
                        class="bi bi-arrow-left-square text-white"></i></a>
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

                        <div class="row d-flex justify-content-between">
                            <div class="col-12 col-md-9">
                                <h2 class="display-5 fw-bold text-warning">{{ $announcement->title }}</h2>
                            </div>
                            <div class="col-12 col-md-3">
                                @auth
                                    <span>

                                        @if (Auth::user()->id == $announcement->user_id)
                                            <a href="{{ route('announcement.edit', ['announcement' => $announcement->id]) }}"
                                                class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        @endif

                                    </span>
                                @endauth
                            </div>
                        </div>

                        <p><b>{{ __('ui.announcementShow') }}</b>:<span>€ {{ $announcement->price }}</span></p>
                        <p><b>{{ __('ui.announcementShow_2') }}</b>: {{ $announcement->body }}</p>
                        <p><b>{{ __('ui.announcementShow_3') }}</b>: {{ $announcement->category->name }}</p>
                        <p><b>{{ __('ui.announcementShow_4') }}</b>:
                            {{ $announcement->created_at->format('d-m-Y') }}</p>
                        <p><b>{{ __('ui.announcementShow_5') }}</b>: {{ $announcement->user->name }}</p>


                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary py-2 px-5" data-bs-toggle="modal"
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
                <div class="modal-header bg-dark">
                    <h1 class="modal-title fs-5 text-warning" id="exampleModalLabel">Contatta il venditore!</h1>
                    <button type="button" class="btn-close bg-warning" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body text-dark bg-dark">
                    {{-- FORM --}}
                    <div class="card-body my-4" id="form-revisor">
                        <div class="row justify-content-center">
                            <div class="col-12 p-5">

                                <form action="#" method="GET">
                                    @csrf
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    {{-- Input Name  --}}
                                    <div class="container align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label description_font text-warning"
                                                for="name">{{ __('ui.formRevisor_2') }}</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                value="" placeholder="Mario">
                                            <div class="form-notch">
                                                <div class="form-notch-leading"></div>
                                                <div class="form-notch-middle"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div>
                                        @error('name')
                                            <span class="small text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- Input Surname  --}}
                                    <div class="container align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label description_font text-warning"
                                                for="surname">Cognome</label>
                                            <input type="text" name="surname" id="surname" class="form-control"
                                                value="" placeholder="Rossi">
                                            <div class="form-notch">
                                                <div class="form-notch-leading"></div>
                                                <div class="form-notch-middle"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div>
                                        @error('surname')
                                            <span class="small text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- Input Email  --}}
                                    <div class="container align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label description_font text-warning"
                                                for="email">E-mail</label>
                                            <input type="e-mail" name="email" id="email" class="form-control"
                                                value="" placeholder="email@mail.com">
                                            <div class="form-notch">
                                                <div class="form-notch-leading"></div>
                                                <div class="form-notch-middle"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div>
                                        @error('email')
                                            <span class="small text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- Input Number --}}
                                    <div class="container align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label description_font text-warning"
                                                for="surname">Cell./Tel.</label>
                                            <input type="text" name="cell" id="cell" class="form-control"
                                                value="" placeholder="+39 333.1234567">
                                            <div class="form-notch">
                                                <div class="form-notch-leading"></div>
                                                <div class="form-notch-middle"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div>
                                        @error('surname')
                                            <span class="small text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- Input Message --}}
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label description_font text-warning"
                                                for="form3Example3c">Scrivi un messaggio al venditore</label>
                                            <textarea type="text-area" name="message" id="message" class="form-control" placeholder="Messaggio"></textarea>
                                            <div class="form-notch">
                                                <div class="form-notch-leading"></div>
                                                <div class="form-notch-middle"></div>
                                                <div class="form-notch-trailing"></div>
                                            </div>
                                        </div>
                                        @error('message')
                                            <span class="small text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="container">
                                        <div class="mt-5 text-center">
                                            <button type="submit" class="btn-request-form"
                                                id="btn-request-work">Invia <i class="bi bi-envelope"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-dark">
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>


</x-template>
