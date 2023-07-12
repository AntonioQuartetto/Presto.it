<x-template>
    <div class="container p-5">
        <div class="row">
            <div class="col-12">
                <livewire:revisor-create-form />

                {{-- FORM --}}
                <div class="card-body p-md-5 my-5">
                    <div class="row justify-content-center p-5 ">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                            <p class="text-center h1 fw-bold mb-5 mt-4">Inserici i tuoi dati</p>
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
                                        <label class="form-label" for="name">Nome</label>
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
                                        <label class="form-label" for="surname">Cognome</label>
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
                                        <label class="form-label" for="form3Example3c">Dicci la motivazione per cui vuoi
                                            lavorare
                                            con noi</label>
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
                                        <button type="submit" class="btn-request"
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
