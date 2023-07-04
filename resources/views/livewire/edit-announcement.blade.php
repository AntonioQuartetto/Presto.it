<div>
    <h1>Modifica il tuo annuncio!</h1>
    @if (session('success')) 
    <span class="badge text-bg-success">
        {{session('success')}}
    </span>
    @endif
    <form wire:submit.prevent="update" class="mt-4 ">
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
            <input wire:model.lazy="title" type="text" class="form-control @error('title') is-invalid @enderror"
            placeholder="Inserisci il titolo">
            @error('title')
            <p class="text-danger mt-1">*{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="exampleFormControlInput1">Prezzo</label>
            <input wire:model.lazy="price" type="number" step="0.5"
            class="form-control @error('price') is-invalid @enderror" placeholder="Inserisci il prezzo">
            @error('price')
            <p class="text-danger mt-1">*{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mt-4">
            <label for="exampleFormControlTextarea1">Inserisci descrizione</label>
            <textarea wire:model.lazy="body" type="text" class="form-control @error('body') is-invalid @enderror"
            rows="3"></textarea>
            @error('body')
            <p class="text-danger mt-1">*{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category">Categoria {{ $announcement->category_id }}</label>
            <select wire:model.defer="category" id="category" class="form-control">
                <option selected>Seleziona Categoria</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category')
            <p class="text-danger mt-1">*{{ $message }}</p>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-warning">Modifica</button>
</form>
</div>