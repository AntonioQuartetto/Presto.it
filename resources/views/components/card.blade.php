<div class="col-12 col-md-4 my-4 d-flex justify-content-center">
    <a href="{{ route('announcement.show', ['announcement' => $announcement]) }}">
        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <img src="{{ Storage::url('\images\dafaultimage.png') }}" alt=""
                    class="card-img-top p-3 rounded">
                </div>
                <div class="card-back container d-flex justify-content-evenly align-items-center">
                    <h5 class="card-title">{{ $announcement->title }}</h5>
                    <span class="badge bg-success"> € {{ $announcement->price }}</span>
                    {{-- <a href="" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-succes">Categoria:{{$announcement->category->name ?? 'Nessuna Categoria'}}</a> --}}
                    {{-- <p class="card-footer">Pubblicato il:{{$announcement->created_at->format('d-m-Y')}}</p> --}}
                </div>
            </div>
        </div>
    </a>
</div>
