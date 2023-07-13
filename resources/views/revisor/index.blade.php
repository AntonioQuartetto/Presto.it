<x-template>
    
    <div class="container-fluid p-5 bg-gradient my-bg shadow">
        <div class="row">
            <div class="col-12 text-light p-1 fs-3 text-center ">
                
                {{ $announcement_to_check ? 'Annunci da revisionare' : 'Nessun annuncio da revisionare' }}
                
            </div>
        </div>
    </div>
    
    @if (session()->has('message'))
    <div class="bg-warning text-dark p-3 text-center">
        {{ session('message') }}
    </div>
    @endif
    @if (Session::has('modifyAnnouncement'))
    <form action="{{ route('revisor.rewind_announcements') }}" method="POST" class="text-center mt-5">
        @csrf
        @method('PATCH')
        <h3>{{ __('ui.revisorindex_3') }} <button type="submit"
            class="btn btn-danger shadow">{{ __('ui.revisorindex_4') }}</button></div>
        </h3>
    </form>
    @endif
 
    @if ($announcement_to_check)
    <div class="container">
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                    @if ($announcement_to_check->images ->count()>0)
                    
                     
                        <div id="carouselExampleDark" class="carousel carousel-dark slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                @foreach ($announcement_to_check->images as $image)
                                <div class="carousel-item @if ($loop->first) active @endif"
                                    data-bs-interval="10000">
                                    <img src="{{ $image->getUrl(550, 400) }}" class="img-fluid p-3 rounded"
                                    alt="">
                                </div>
                                @endforeach
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
                </div>
            
            @else               
            <div >
                <img src="{{ Storage::url('\images\dafaultimage.png') }}" class="d-block w-100"  alt="">  
            </div>        
            @endif
        </div>
            
            <div class="col-md-6">
                <a>
                    <h1 class="display-5 fw-bolder">{{ $announcement_to_check->title }}</h1>
                    <p><b>{{ __('ui.announcementShow') }}</b>:<span>€
                        {{ $announcement_to_check->price }}</span></p>
                        <p><b>{{ __('ui.announcementShow_2') }}</b>: {{ $announcement_to_check->body }}</p>
                        <p><b>{{ __('ui.announcementShow_3') }}</b>:
                            {{ $announcement_to_check->category->name }}</p>
                            <p><b>{{ __('ui.announcementShow_4') }} </b>:
                                {{ $announcement_to_check->created_at->format('d-m-Y') }}</p>
                                
                                <div class="row mt-4 text-center">
                                    <div class="col-12 col-md-2 m-1">
                                        <form
                                        action="{{ route('revisor.accept_announcements', ['announcement' => $announcement_to_check]) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                        class="btn btn-success shadow">{{ __('ui.revisorindex_11') }}</button>
                                    </div>
                                    <div class="col-12 col-md-2 m-1">
                                    </form>
                                    <form
                                    action="{{ route('revisor.reject_announcements', ['announcement' => $announcement_to_check]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit"
                                    class="btn btn-danger shadow">{{ __('ui.revisorindex_12') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </section>
        </div>
        @endif
        <ul>
            <h3>{{ __('ui.revisorindex_5') }}</h3>
            <li>{{ __('ui.revisorindex_6') }}</li>
            <li>{{ __('ui.revisorindex_7') }}</li>
            <li>{{ __('ui.revisorindex_8') }}</li>
            <li>{{ __('ui.revisorindex_9') }}</li>
            <li>{{ __('ui.revisorindex_10') }}</li>
        </ul>  
    </div>
</x-template>
