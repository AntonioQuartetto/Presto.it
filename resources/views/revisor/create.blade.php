<x-template>
    <div class="container p-5">
        <div class="row">
            <div class="col-12">

                <div class="container text-center mb-4">
                    <h2 class="revisor_color">{{ __('ui.livewireRevisor') }}</h2>
                </div>
                <div class="row p-3">
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-end align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                    class="bi bi-house-heart-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z" />
                                    <path
                                        d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z" />
                                </svg>
                            </div>
                            <div class="col-9">
                                <h4 class="revisor_color">Smartworking</h4>
                                <p class="description_font">{{ __('ui.livewireRevisor_2') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-end align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                    fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                </svg>
                            </div>
                            <div class="col-9">
                                <h4 class="revisor_color">{{ __('ui.livewireRevisor_3') }}</h4>
                                <p class="description_font">{{ __('ui.livewireRevisor_4') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-end align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </div>
                            <div class="col-9">
                                <h4 class="revisor_color">{{ __('ui.livewireRevisor_5') }}</h4>
                                <p class="description_font">{{ __('ui.livewireRevisor_6') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-end align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                    fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                </svg>
                            </div>
                            <div class="col-9">
                                <h4 class="revisor_color">{{ __('ui.livewireRevisor_7') }}</h4>
                                <p class="description_font">{{ __('ui.livewireRevisor_8') }}</p>
                            </div>
                        </div>
                    </div>

                </div>
                <livewire:revisor-create-form />
                <div class="container text-center">
                    <p class="description_font">{{ __('ui.formRevisor_5') }}</p>
                    <p class="description_font">
                        {{ __('ui.formRevisor_6') }}
                    </p>
                    <p>
                        Se sei alla ricerca di un lavoro gratificante, stimolante e pieno di opportunità di crescita,
                        inserici, <b><a href="#form-revisor" class="text-warning">nel form sottostante</a></b>, il
                        perchè ti piacerebbe entrare nel team di Presto; oppure <b><a href="#btn-revisor"
                                class="text-warning">clicca il pulsante sopra</a></b> per un invio della mail in
                        automatico."
                    </p>

                    <p class="description_font">
                    <h4><b> {{ __('ui.formRevisor_8') }}</b></h4>
                    </p>
                </div>
                {{-- FORM --}}
                <div class="card-body my-4" id="form-revisor">
                    <div class="row justify-content-center p-5 ">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                            <p class="text-center h1 fw-bold mb-5 mt-4">{{ __('ui.formRevisor_1') }}</p>
                            <form action="{{ route('revisor.createform') }}" method="POST">
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
                                        <label class="form-label description_font"
                                            for="name">{{ __('ui.formRevisor_2') }}</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            value="{{ $user->name }}" placeholder="Mario" disabled>
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
                                        <label class="form-label description_font"
                                            for="surname">{{ __('ui.formRevisor_3') }}</label>
                                        <input type="text" name="surname" id="surname" class="form-control"
                                            value="{{ $user->surname }}" placeholder="Rossi" disabled>
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
                                        <label class="form-label description_font"
                                            for="form3Example3c">{{ __('ui.formRevisor_4') }}</label>
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
                                            id="btn-request-work">{{ __('ui.livewireRevisor_9') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-template>
