<div>
    <h1>{{__('ui.livewireEdit-announcaments_2')}}</h1>
    @if (session('success')) 
    <span class="badge text-bg-success ">
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
            <label for="exampleFormControlInput1">{{__('ui.livewireCreate-announcaments_2')}}</label>
            <input wire:model.lazy="title" type="text" class="form-control @error('title') is-invalid @enderror"
            placeholder="{{__('ui.livewireCreate-announcaments_3')}}">
            @error('title')
            <p class="text-danger mt-1">*{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="exampleFormControlInput1">{{__('ui.announcementShow')}}</label>
            <input wire:model.lazy="price" type="number" step="0.5"
            class="form-control @error('price') is-invalid @enderror" placeholder="{{__('ui.livewireCreate-announcaments_4')}}">
            @error('price')
            <p class="text-danger mt-1">*{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mt-4">
            <label for="exampleFormControlTextarea1">{{__('ui.livewireCreate-announcaments_5')}}</label>
            <textarea wire:model.lazy="body" type="text" class="form-control @error('body') is-invalid @enderror"
            rows="3"></textarea>
            @error('body')
            <p class="text-danger mt-1">*{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category">{{__('ui.announcementShow_3')}} {{ $announcement->category->name }}</label>
            <select wire:model.defer="category" id="category" class="form-control">
                <option disabled>{{__('ui.livewireCreate-announcaments_6')}}</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                @if ($category->id == $announcement->category->id) selected @endif
                >{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category')
            <p class="text-danger mt-1">*{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="images">{{ __('ui.livewireCreate-announcaments_8') }}</label>
            <input wire:model="temporary_images" type="file" name="images" multiple
            class="form-control shadow @error('temporary_images.*') is-invalid @enderror"
            placeholder="img">
            @error('temporary_images.*')
            <p class="text-danger mt-1">*{{ $message }}</p>
            @enderror
            <div wire:loading wire:target="temporary_images">{{ __('ui.livewireCreate-announcaments_9') }}</div>
        </div>
    
    @if (!empty($images) || !empty($oldimages))
    <div class="row">
        <div class="col-12 mt-3">
            <div class="row border border-4 border-info rounded shadow py-4">  
                @foreach ($oldimages as $key => $oldimage)
                <div class="col my-3">
                    <div class="img-preview shadow mx-auto rounded"
                    style="background-image: url({{ $oldimage->getUrl() }});"></div>
                    {{-- <img src="{{ $image->temporaryUrl() }}" alt="img" class="img-preview"> --}}
                    <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto"
                    wire:click="removeOldImage({{ $key }})">{{ __('ui.livewireCreate-announcaments_7') }}</button>
                </div>
                @endforeach
                @foreach ($images as $key => $image)
                <div class="col my-3">
                    <div class="img-preview shadow mx-auto rounded"
                    style="background-image: url({{ $image->temporaryUrl() }});"></div>
                    {{-- <img src="{{ $image->temporaryUrl() }}" alt="img" class="img-preview"> --}}
                    <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto"
                    wire:click="removeImage({{ $key }})">{{ __('ui.livewireCreate-announcaments_7') }}</button>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <button type="submit" class="btn btn-warning">{{__('ui.livewireEdit-announcaments')}}</button>
</form>
</div>

</div>