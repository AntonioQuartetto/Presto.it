<x-template>

    <div class="container container-fluid">
        <div class="profile row">
            <div class="col-12 col-md-3">
                <img src="{{ Storage::url('\images\placeholder-profile.jpg') }}" alt="Avatar">
            </div>

            <div class="col-12 col-md-9">
                <div class="info">
                    <h2>{{ $user->name }}

                        @if (Auth::user()->is_revisor)
                            <span class="translate-middle badge rounded-pill bg-danger">
                                Revisor
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        @endif

                    </h2>

                    <p>Email: {{ $user->email }}</p>
                    <p>Data di nascita: 01/01/1990</p>
                    <p>Descrizione del profilo utente Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        
        </div>
        

    </div>
</x-template>
