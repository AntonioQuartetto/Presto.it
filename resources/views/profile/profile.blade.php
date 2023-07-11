<x-template>  
    <div class="container container-fluid">
        @if (session()->has('message'))
        <div class="bg-warning text-white m-3 p-3 text-center">
            {{ session('message') }}
        </div>
        @endif
        <div class="profile row">
            <div class="col-12 col-md-3">
                <img src="{{ Storage::url('\images\placeholder-profile.jpg') }}" alt="Avatar">
            </div>            
            <div class="col-12 col-md-9">
                <div class="info">
                    <h2>{{ $user->name}} {{$user->surname}}                
                        @if (Auth::user()->is_revisor)
                        <span class="translate-middle badge rounded-pill bg-danger">
                            Revisor
                            <span class="visually-hidden">unread messages</span>
                        </span>
                        @endif                 
                    </h2>              
                    <p>Email: {{ $user->email }}</p>
                    <p>{{__('ui.profileProfile')}}</p>
                    <p>{{__('ui.profileProfile_2')}}</p>
                </div>
            </div>     
        </div>
        <div class="row">
            
            <div class="container">
                <div class="text-center mb-2">
                    <h2>{{__('ui.profileProfile_3')}}</h2>
                </div>
                <div class="row">
                    @forelse ($announcements as $announcement)
                    <x-card :$announcement />
                    @empty
                    <div class="col-12">
                        <p class="h1">{{__('ui.profileProfile_4')}}</p>
                        <p class="h2">{{__('ui.announcementSearch_3')}} <a href="{{ route('announcement.create') }}">{{__('ui.announcementSearch_4')}}</a></p>
                    </div>
                    @endforelse          
                </div>
            </div>           
        </div>       
    </div>
</x-template>
