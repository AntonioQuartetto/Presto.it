<x-template>
    <div class="container p-5">
        <div class="row">
            <div class="col-12">

                <livewire:revisor-create-form />
                <div class="container text-center">
                    <p>"Benvenuti nella nostra sezione 'Lavora con Noi'! Siamo un'azienda dinamica e all'avanguardia nel
                        settore degli annunci, e siamo alla ricerca di talenti come te per unirti al nostro team. Siamo
                        convinti che il successo di un'azienda risieda nelle persone che la compongono, e per questo
                        siamo impegnati a creare un ambiente di lavoro stimolante, inclusivo e gratificante.</p>
                        <p>
                            La nostra missione è quella di fornire un servizio di annunci di alta qualità che soddisfi le esigenze dei nostri clienti. Siamo alla costante ricerca di persone motivate, appassionate e creative, che condividano la nostra visione e ci aiutino a raggiungere i nostri obiettivi.
                        </p>
                        <p>
                            Se sei alla ricerca di un lavoro gratificante, stimolante e pieno di opportunità di crescita, inserici, <b><a href="#form-revisor" class="text-warning">nel form sottostante</a></b>,  il perchè ti piacerebbe entrare nel team di Presto; oppure <b><a href="#btn-revisor" class="text-warning">clicca il pulsante sopra</a></b> per un invio della mail in automatico."
                        </p>

                        <p><h4><b>Siamo ansiosi di conoscerti e di costruire insieme il futuro di questa azienda!</b></h4></p>
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
