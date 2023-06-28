<x-template>


    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>
                    
                    PRESTO.IT
                    
                </h1>
                <p class="h2 my-2 fw-bold">
                    Annunci
                </p>
                <div class="row">
                    @forelse($category->announcements as $announcement)
                    <div class="col-12 col-md-4 my-4">
                        <div class="card shadow" style="width:18rem">
                            <img src="{{Storage::url('\images\No-Image-Placeholder.png')}}" alt="" class="card-img-top p-3 rounded">
                            <div class="card-body">
                                <h5 class="card-title">{{$announcement->title}}</h5>
                                <p class="card-text">{{$announcement->body}}</p>
                                <p class="card-text">{{$announcement->price}}</p>
                                <a href="#" class="btn btn-primary shadow">Visualizza</a>
                                <a href="" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-succes">Categoria:{{$announcement->category->name ?? 'Nessuna Categoria'}}</a>
                               <p class="card-footer">Pubblicato il:{{$announcement->created_at->format('d-m-Y')}}</p>
                            </div>
                        </div>
                    </div>
                    @empty 
                        <div class="col-12">
                            <p class="h1">Non sono presenti Annunci</p>
                            <p class="h2">Pubblicane uno: <a href="{{route('create-announcement')}}">Inserisci  Annuncio</a></p>
                        </div>

                    @endforelse

                </div>
            </div>
        </div>
    </div>

</x-template>