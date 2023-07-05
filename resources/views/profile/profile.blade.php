<x-template>

    <div class="container">
        <div class="profile">
            <img src="{{Storage::url('\images\placeholder-profile.jpg')}}" alt="Avatar">
            <div class="info">
                <h2>{{ $user->name }}</h2>
                <p>Email: {{ $user->email }}</p>
                <p>Data di nascita: 01/01/1990</p>
            </div>
        </div>
        <p>Descrizione del profilo utente Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

    </div>
</x-template>
