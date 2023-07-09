<div>
    <h1>Inserisci il tuo annuncio!</h1>
    @if (session()->has('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="store" class="mt-4 ">
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
            <input wire:model.debounce.1200ms="title" type="text"
                class="form-control @error('title') is-invalid @enderror" placeholder="Inserisci il titolo">
            @error('title')
                <p class="text-danger mt-1">*{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="exampleFormControlInput1">Prezzo</label>
            <input wire:model.debounce.1200ms="price" type="number" step="0.01"
                class="form-control @error('price') is-invalid @enderror" placeholder="Inserisci il prezzo">
            @error('price')
                <p class="text-danger mt-1">*{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mt-4">
            <label for="exampleFormControlTextarea1">Inserisci descrizione</label>
            <textarea wire:model.debounce.1200ms="body" type="text" class="form-control @error('body') is-invalid @enderror"
                rows="3"></textarea>
            @error('body')
                <p class="text-danger mt-1">*{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category">Categoria</label>
            <select wire:model.defer="category" id="category" class="form-control">
                <option value="">Scegli la categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category')
                <p class="text-danger mt-1">*{{ $message }}</p>
            @enderror

        </div>
</div>
{{-- x-on:livewire-upload-progress="progress = $event.detail.progress" --}}

<div class="mb-3 text-center">
    <input type="file" wire:model="temporary_images" name="images" multiple
        class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="img">
    @error('temporary_images.*')
        <p class="text-danger mt-1">*{{ $message }}</p>
    @enderror

    <div wire:loading wire:target="image">Uploading...</div>
</div>
@if (!empty($images))
    <div class="row">
        <div class="col-12">
            <p>Photo Preview</p>
            <div class="row border border-4 border-info rounded shadow py-4">
                @foreach ($images as $key => $image)
                    <div class="col my-3">

                        <img src="{{ $image->temporaryUrl() }}" alt="img">
                            <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire::click="removeImage({{$key}})">Cancella</button>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif

<button type="submit" class="btn btn-warning">Inserisci annuncio</button>
</form>
</div>
