<div class="bg-dark px-5" id="footer">
    <footer class="pt-5">
        <div class="row">
            <div class="col-6 col-md-4 mb-3">
                <h5>Presto</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="" class="nav-link p-0">{{__('ui.componetsFooter_2')}}</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('revisor.create') }}" class="nav-link p-0">{{__('ui.componetsFooter_3')}}</a></li>
                    <li class="nav-item mb-2"><a href="" class="nav-link p-0">Privacy & Policy</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('announcement.create') }}"
                            class="nav-link p-0">{{__('ui.componetsFooter_4')}}</a></li>
                </ul>

            </div>
            <div class="col-6 col-md-4 mb-3">
                <h5>{{__('ui.componetsFilters_2')}}</h5>
                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-12"><a href="{{ route('categoryShow', compact('category')) }}"
                                class="text-decoration-none">{{__('ui.'. $category->name) }}</a></div>
                    @endforeach
                </div>


            </div>
            <div class="col-6 col-md-4 mb-3">
                <h5>{{__('ui.componetsFooter_5')}}</h5>
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
