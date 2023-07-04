<x-template>

    <div class="container my-3">
        <div class="text-center mb-2">
            <h2>Ultimi Annunci</h2>
        </div>
        <div class="row">
            @foreach ($announcements as $announcement)
            <x-card :$announcement/>
            @endforeach
           
        </div>
    </div>
    <hr class="">
    <x-categories />


</x-template>
