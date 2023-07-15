<!--Sezione cerca-->
<div class="container my-5 justify-content-between sez-cerca-custom">
    <h2 class="mb-4 text-center">
        {{__('ui.componetsFilters')}}
    </h2>
    <div class="row">
        <div class="col-12 col-md-3 d-flex align-items-center justify-content-center" >
            <a class="nav-link dropdown-toggle text-center rounded py-2 px-4 bg-white text-dark border border-black" style="width: 10rem" href="#"
                data-bs-toggle="dropdown" aria-expanded="false">{{__('ui.componetsFilters_2')}}</a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                    <li><a href="{{ route('categoryShow', compact('category')) }}"
                            class="dropdown-item">{{__('ui.'. $category->name) }}</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-12 col-md-9">
            <form action="{{ route('announcement.filters') }}" method="GET" class="row p-2">
                <input type="number" class="rounded p-2 me-2 col-12 col-md-3" id="price-min" placeholder="Price Min."
                    name="priceMin">
                <input type="number" class="rounded p-2 me-2 col-12 col-md-3" id="price-max" placeholder="Price Max."
                    name="priceMax">
                <input type="search" class="rounded p-2 me-2 col-12 col-md-3" id="cerca-per-nome" placeholder="{{__('ui.componetsFilters_3')}}"
                    aria-label="Search" name="searched">
                <button class="btn btn-dark col-12 me-2 col-md-1" type="submit">{{__('ui.componetsFilters_3')}}</button>
            </form>
        </div>
    </div>
</div>
</div>
