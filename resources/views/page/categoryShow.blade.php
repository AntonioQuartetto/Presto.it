<x-template>
    <div class="container p-5">
        <div class="row">
            <div class="col-12 text-center">
                <p class="h2 my-2 fw-bold">
                    Annunci per la cateogria {{ $category->name }}
                </p>
                <div class="row">
                    @forelse($category->announcements as $announcement)
                        @if ($announcement->is_accepted)
                            <x-card :$announcement />
                        @endif
                    @empty
                        <div class="col-12">
                            <p class="h1">Non sono presenti Annunci</p>
                            <p class="h2">Pubblicane uno: <a href="{{ route('announcement.create') }}">Inserisci
                                    Annuncio</a></p>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</x-template>
