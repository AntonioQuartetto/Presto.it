<x-template>
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0"  src="" alt="">
            </div>
            <div class="col-md-6">
                <a>
                <h1 class="display-5 fw-bolder">TITOLO</h1>
                storage\app\public\images\No-Image-Placeholder.svg.png
                <p>Autore: </p>
                <p>Numero Pagine: </p>
                <ul>
                    @foreach ($categories->$announcements as $announcement)
                    <li>{{$category->name}}</li>
                    @endforeach
                </ul>

            <a href="{{ route('page.homepage') }}" class="btn btn-dark"> Torna Indietro</a>
            </div>
        </div>
    </div>
</section>
</x-template>