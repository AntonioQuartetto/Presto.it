<div class="container bg-dark">
    <footer class="pt-5">
        <div class="row">
            <div class="col-6 col-md-4 mb-3">
                <h5>Presto</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="" class="nav-link p-0">Assistenza</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('revisor.create') }}" class="nav-link p-0">Lavora con
                            Noi</a></li>
                    <li class="nav-item mb-2"><a href="" class="nav-link p-0">Privacy & Policy</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('announcement.create') }}"
                            class="nav-link p-0">Inserisci Annuncio</a></li>
                </ul>

            </div>
            <div class="col-6 col-md-4 mb-3">
                <h5>Categorie</h5>
                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-12"><a href="{{ route('categoryShow', compact('category')) }}"
                                class="text-decoration-none">{{ $category->name }}</a></div>
                    @endforeach
                </div>


            </div>
            <div class="col-6 col-md-4 mb-3">
                <h5>Chi Siamo</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="https://www.linkedin.com/in/ciro-giacovelli-juniordev/"
                            target="blank" class="nav-link p-0"><i class="bi bi-linkedin me-2"></i>Ciro</a></li>
                    <li class="nav-item mb-2"><a href="https://www.linkedin.com/in/simone-leonardi-47bb53261/"
                            target="blank" class="nav-link p-0"><i class="bi bi-linkedin me-2"></i>Simone</a></li>
                    <li class="nav-item mb-2"><a href="https://www.linkedin.com/in/mattia-cau-11091a247/" target="blank"
                            class="nav-link p-0"><i class="bi bi-linkedin me-2"></i>Mattia</a></li>
                    <li class="nav-item mb-2"><a href="https://www.linkedin.com/in/antonio-quartetto-dev/"
                            target="blank" class="nav-link p-0"><i class="bi bi-linkedin me-2"></i>Antonio</a></li>
                </ul>

            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 mt-4 border-top">
                <a class="navbar-brand" href="{{ route('page.homepage') }}">
                    <x-logo />
                </a>
                <p>© 2023 BugCreators, Inc. All rights reserved.</p>
            </div>
    </footer>
</div>
