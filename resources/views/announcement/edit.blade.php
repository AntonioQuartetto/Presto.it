<x-template>
    <div class="container p-5">
     <div class="row">
        <div class="col-12">
       @if (session()->has('message'))
        <div>

            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        </div>
    @endif
        <livewire:edit-announcement :announcement="$announcement"/>

        </div>
    </div>
    </div>
</x-template>





