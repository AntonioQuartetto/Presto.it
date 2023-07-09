<div>
    <h1>{{__('ui.livewireCreate-announcaments')}}</h1>
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
<<<<<<< HEAD
            <label for="exampleFormControlInput1">{{__('ui.livewireCreate-announcaments_2')}}</label>
            <input wire:model.debounce.1200ms="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="{{__('ui.livewireCreate-announcaments_3')}}">
=======
            <label for="exampleFormControlInput1">Titolo</label>
            <input wire:model.debounce.1200ms="title" type="text"
                class="form-control @error('title') is-invalid @enderror" placeholder="Inserisci il titolo">
>>>>>>> c502fb53bd954a23bbb5b8dbdf4d8af624fb7671
            @error('title')
                <p class="text-danger mt-1">*{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mt-3">
<<<<<<< HEAD
            <label for="exampleFormControlInput1">{{__('ui.announcementShow')}}</label>
            <input wire:model.debounce.1200ms="price" type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" placeholder="{{__('ui.livewireCreate-announcaments_4')}}Inserisci il prezzo">
=======
            <label for="exampleFormControlInput1">Prezzo</label>
            <input wire:model.debounce.1200ms="price" type="number" step="0.01"
                class="form-control @error('price') is-invalid @enderror" placeholder="Inserisci il prezzo">
>>>>>>> c502fb53bd954a23bbb5b8dbdf4d8af624fb7671
            @error('price')
                <p class="text-danger mt-1">*{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mt-4">
<<<<<<< HEAD
            <label for="exampleFormControlTextarea1">{{__('ui.livewireCreate-announcaments_5')}}</label>
            <textarea wire:model.debounce.1200ms="body" type="text" class="form-control @error('body') is-invalid @enderror" rows="3"></textarea>
=======
            <label for="exampleFormControlTextarea1">Inserisci descrizione</label>
            <textarea wire:model.debounce.1200ms="body" type="text" class="form-control @error('body') is-invalid @enderror"
                rows="3"></textarea>
>>>>>>> c502fb53bd954a23bbb5b8dbdf4d8af624fb7671
            @error('body')
                <p class="text-danger mt-1">*{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category">{{__('ui.announcementShow_3')}}</label>
            <select wire:model.defer="category" id="category" class="form-control">
                <option value="">{{__('ui.livewireCreate-announcaments_6')}}</option>
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
    <input wire:model="temporary_images" type="file" name="images" multiple
        class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="img">
    @error('temporary_images.*')
        <p class="text-danger mt-1">*{{ $message }}</p>
    @enderror

    {{-- <div wire:loading wire:target="image">Uploading...</div> --}}
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
<<<<<<< HEAD
        <button type="submit" class="btn btn-warning">{{__('ui.componetsFooter_4')}}</button>    
    </form>
=======
    </div>
@endif

<button type="submit" class="btn btn-warning">Inserisci annuncio</button>
</form>
>>>>>>> c502fb53bd954a23bbb5b8dbdf4d8af624fb7671
</div>
