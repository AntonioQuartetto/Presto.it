<x-template>
    <h2 class="text-center">{{__('ui.allAnnouncements')}}</h2>
    <div class="container my-3">
        <div class="text-center mb-2">
            <h2>Ultimi Annunci</h2>
        </div>
        <div class="row">
            @foreach ($announcements as $announcement)
             @if ($announcement->is_accepted)
                <x-card :$announcement/>
            @endif
            @endforeach
           
        </div>
    </div>
    <hr>
   
<div class="container">
    <div class="text-center my-4 p-3">
        <h3>Esplora le nostre sezioni</h3>
    </div>
    <div>
        <x-categories />
    </div>
</div>


</x-template>
