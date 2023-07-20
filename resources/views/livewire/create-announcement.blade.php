<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-5 form-container">
            <div>
                <h1>{{ __('ui.componetsFooter_4') }}</h1>
                @if (session()->has('message'))
                <div class="alert alert-success mt-4" role="alert">
                    {{ session('message') }}
                </div>
                @endif
                <form wire:submit.prevent="store" class="mt-4 ">
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
                        <label for="exampleFormControlInput1">{{ __('ui.livewireCreate-announcaments_2') }}</label>
                        <input wire:model.debounce.1200ms="title" type="text"
                        class="form-control @error('title') is-invalid @enderror"
                        placeholder="{{ __('ui.livewireCreate-announcaments_3') }}">
                        @error('title')
                        <p class="text-danger mt-1">*{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="exampleFormControlInput1">{{ __('ui.announcementShow') }}</label>
                        <input wire:model.debounce.1200ms="price" type="number" step="0.01"
                        class="form-control @error('price') is-invalid @enderror"
                        placeholder="{{ __('ui.livewireCreate-announcaments_4') }}">
                        @error('price')
                        <p class="text-danger mt-1">*{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label for="exampleFormControlTextarea1">{{ __('ui.livewireCreate-announcaments_5') }}</label>
                        <textarea wire:model.debounce.1200ms="body" type="text" class="form-control @error('body') is-invalid @enderror"
                        rows="3"></textarea>
                        @error('body')
                        <p class="text-danger mt-1">*{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category">{{ __('ui.announcementShow_3') }}</label>
                        <select wire:model.defer="category" id="category" class="form-control">
                            <option value="">{{ __('ui.livewireCreate-announcaments_6') }}</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <p class="text-danger mt-1">*{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- x-on:livewire-upload-progress="progress = $event.detail.progress" --}}
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
                    <button type="submit" class="btn btn-warning mt-2 mb-2">{{ __('ui.componetsFooter_4') }}</button>
                </form>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-7  d-flex align-items-center order-1 order-lg-2">
            <img src="{{ Storage::url('\images\blog-006_realizzare-ecommerce.jpg') }}"class="img-fluid img-create-custom border border-2 border-dark rounded"
            alt="">
        </div>
    </div>
    @if (!empty($images))
    <div class="row">
        <div class="col-12 mt-3">
            <div class="row border border-4 border-info rounded shadow py-4">
                @foreach ($images as $key => $image)
                <div class="col my-3">
                    <div class="img-preview img-fluid shadow mx-auto rounded"
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
</div>
