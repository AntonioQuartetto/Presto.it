<div>
    <h1>{{__('ui.livewireCreate-announcaments')}}</h1>
    @if (session()->has('message'))
    <div>
        {{session('message')}}
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
            <label for="exampleFormControlInput1">{{__('ui.livewireCreate-announcaments_2')}}</label>
            <input wire:model.debounce.1200ms="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="{{__('ui.livewireCreate-announcaments_3')}}">
            @error('title')
            <p class="text-danger mt-1">*{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="exampleFormControlInput1">{{__('ui.announcementShow')}}</label>
            <input wire:model.debounce.1200ms="price" type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" placeholder="{{__('ui.livewireCreate-announcaments_4')}}Inserisci il prezzo">
            @error('price')
            <p class="text-danger mt-1">*{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mt-4">
            <label for="exampleFormControlTextarea1">{{__('ui.livewireCreate-announcaments_5')}}</label>
            <textarea wire:model.debounce.1200ms="body" type="text" class="form-control @error('body') is-invalid @enderror" rows="3"></textarea>
            @error('body')
            <p class="text-danger mt-1">*{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category">{{__('ui.announcementShow_3')}}</label>
            <select wire:model.defer="category" id="category" class="form-control">
                <option value="">{{__('ui.livewireCreate-announcaments_6')}}</option>
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
        <button type="submit" class="btn btn-warning">{{__('ui.componetsFooter_4')}}</button>    
    </form>
</div>
