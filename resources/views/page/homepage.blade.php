<x-template>
    <div class="container my-3">
        <div class="text-center mb-2">
            <h2>{{__('ui.pageHomepage')}}</h2>
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
        <h3>{{__('ui.pageHomepage_2')}}</h3>
    </div>
    <div>
        <x-categories />
    </div>
</div>


</x-template>
