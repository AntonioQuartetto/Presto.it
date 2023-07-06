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


        <div class="row">

            <div class="container">
                <div class="text-center mb-2">
                    <h2>I Tuoi Annunci</h2>
                </div>
                <div class="row">
                    @forelse ($announcements as $announcement)
                        <x-card :$announcement />
                    @empty
                        <div class="col-12">
                            <p class="h1">Non hai aggiunto nessun Annunci</p>
                            <p class="h2">Pubblicane uno: <a href="{{ route('announcement.create') }}">Inserisci
                                    Annuncio</a></p>
                        </div>
                    @endforelse




                </div>
            </div>

        </div>


    </div>
</x-template>
