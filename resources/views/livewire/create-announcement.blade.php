

<div>

    <h1>Inserisci il tuo annuncio!</h1>

    <form wire:submit.prevent="store" class="mt-4">
        @csrf

        <div class="form-group">
          <label for="exampleFormControlInput1">Titolo</label>
          <input wire:model="title" type="text" class="form-control" placeholder="Inserisci il titolo">
        </div>

        <div class="form-group mt-3">
            <label for="exampleFormControlInput1">Prezzo</label>
            <input wire:model="price" type="number" class="form-control" placeholder="Inserisci il prezzo">
          </div>

        <div class="form-group mt-4">
          <label for="exampleFormControlTextarea1">Inserisci descrizione</label>
          <textarea wire:model="body" type="text" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit">Inserisci annuncio</button>
      
    </form>
</div>

