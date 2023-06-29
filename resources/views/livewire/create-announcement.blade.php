

<div>

    <h1>Inserisci il tuo annuncio!</h1>

    @if (session()->has('message'))
        <div>
            {{session('message')}}
        </div>
    @endif
    
    <form wire:submit.prevent="store" class="mt-4">
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

        <div class="form-group">
          <label for="exampleFormControlInput1">Titolo</label>
          <input wire:model.lazy="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Inserisci il titolo">
          @error('title')
              <p class="text-danger mt-1">*{{$message}}</p>
          @enderror
        </div>

        <div class="form-group mt-3">
            <label for="exampleFormControlInput1">Prezzo</label>
            <input wire:model.lazy="price" type="number" class="form-control @error('price') is-invalid @enderror" placeholder="Inserisci il prezzo">
            @error('price')
                <p class="text-danger mt-1">*{{$message}}</p>
            @enderror
          </div>

        <div class="form-group mt-4">
          <label for="exampleFormControlTextarea1">Inserisci descrizione</label>
          <textarea wire:model.lazy="body" type="text" class="form-control @error('body') is-invalid @enderror" rows="3"></textarea>
            @error('body')
                <p class="text-danger mt-1">*{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category">Categoria</label>
            <select wire:model.defer="category" id="category" class="form-control">
                <option value="">Scegli la categoria</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                    
                @endforeach
            </select>
             @error('category')
                <p class="text-danger mt-1">*{{$message}}</p>
            @enderror
            {{-- <div class="mb-3 text-center " x-on:livewire-upload-progress="progress = $event.detail.progress">

            <input type="file" wire:model="photo" name="image">
            
            <div wire:loading wire:target="photo">Uploading...</div> --}}
            </div>
        </div>
        <button type="submit">Inserisci annuncio</button>    
    </form>
</div>
