


 <!--Sezione cerca-->
    <div class="container my-5 justify-content-between sez-cerca-custom">
        <h2 class="mb-4 text-center">
            Filtri
        </h2>
        <div class="row">
            <div class="col-12 col-md-3">
                <a class="nav-link dropdown-toggle active text-center mt-2" href="#" data-bs-toggle="dropdown"
                    aria-expanded="false">Categorie</a>
                <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                        <li><a href="{{ route('categoryShow', compact('category')) }}"
                                class="dropdown-item">{{ $category->name }}</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <input type="number" class="rounded p-2" id="price-min" placeholder="Price Min.">
            </div>
            <div class="col-12 col-md-3">
                <input type="number" class="rounded p-2" id="price-max" placeholder="Price Max.">
            </div>
            <div class="col-12 col-md-3">
                <form action="{{route('announcement.search')}}" method="GET" class="d-felx">
                    <input type="search" class="rounded p-2" id="cerca-per-nome" placeholder="Cerca" aria-label="Search" name="searched">
                    <button class="btn btn-dark" type="submit">Cerca</button>
                </form>
            </div>
        </div>
    </div>
