<x-template>
    <div class="container p-5">
        <div class="row">
            <div class="col-12 text-center">
                <p class="h2 my-2 fw-bold">
                    {{__('ui.announcementSearch')}}
                </p>
                <div class="row">
                    @forelse($announcements as $announcement)
                    <x-card :$announcement/>
                    @empty 
                    <div class="col-12">
                        <p class="h1"> {{__('ui.announcementSearch_2')}}</p>
                        <p class="h2"> {{__('ui.announcementSearch_3')}} <a href="{{route('announcement.create')}}">{{__('ui.announcemntSearch_4')}} Inserisci  Annuncio</a></p>
                    </div>
                    @endforelse
                    
                </div>
            </div>
        </div>
    </div>
</x-template>