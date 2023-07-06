<x-template>
    <!-- sezione annunci -->
    @if (session('success'))
    <span class="badge text-bg-success">
        {{ session('success') }}
    </span>
    @endif
    <div class="container">
        <div class="text-center mb-2">
            <h2>I Nostri Annunci</h2>
        </div>
        <div class="row">
            @foreach ($announcements as $announcement)
            @if ($announcement->is_accepted)
                <x-card :$announcement/>
            @endif
            @endforeach
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-2">
                        {{ $announcements->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-template>
