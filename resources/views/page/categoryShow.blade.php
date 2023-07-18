<x-template>
    <div class="container p-5">
        <div class="row">
            <div class="col-12 text-center">
                <p class="h2 my-2 fw-bold">
                    {{ __('ui.pageCategory') }} {{ $category->name }}
                </p>
                <div class="row">
                    @foreach ($category->announcements as $announcement)
                        @if ($announcement->is_accepted)
                            <x-card :$announcement />
                        @else
                            <div class="col-12">
                                <p class="h1">{{ __('ui.announcementSearch_2') }}</p>
                                <p class="h2">{{ __('ui.announcementSearch_3') }} <a class="btn-request"
                                        href="{{ route('announcement.create') }}">{{ __('ui.announcementSearch_4') }}</a>
                                </p>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-template>
