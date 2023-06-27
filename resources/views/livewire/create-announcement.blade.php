

<div>

    <h1>Inserisci il tuo annuncio!</h1>

    @if (session()->has('message'))
        <div>
            {{session('message')}}
        </div>
    @endif
    
    <form wire:submit.prevent="store" class="mt-4">
        @csrf

        <div class="form-group">
          <label for="exampleFormControlInput1">Titolo</label>
          <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Inserisci il titolo">
          @error('title')
              {{$message}}
          @enderror
        </div>

        <div class="form-group mt-3">
            <label for="exampleFormControlInput1">Prezzo</label>
            <input wire:model="price" type="number" class="form-control @error('price') is-invalid @enderror" placeholder="Inserisci il prezzo">
            @error('price')
            {{$message}}
        @enderror
          </div>

        <div class="form-group mt-4">
          <label for="exampleFormControlTextarea1">Inserisci descrizione</label>
          <textarea wire:model="body" type="text" class="form-control @error('body') is-invalid @enderror" rows="3"></textarea>
          @error('body')
          {{$message}}
      @enderror
        </div>

        <button type="submit">Inserisci annuncio</button>
      
    </form>
</div>

