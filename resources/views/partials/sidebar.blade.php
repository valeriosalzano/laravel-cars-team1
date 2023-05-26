<div class="d-flex flex-column flex-shrink-0 p-3 bg-white border-end h-100">
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="mb-1 py-1">
            <a href="{{ route('home') }}" class="nav-link fs-5 
            @if (Route::currentRouteName() == 'home') active @endif">
                Home
            </a>
        </li>
        <li class="mb-1 ps-3 py-1 border-bottom">
            <button class=" ps-0 btn btn-toggle rounded border-0 collapsed fs-5" data-bs-toggle="collapse"
                data-bs-target="#types-collapse" aria-expanded="false">
                Cars
            </button>
            <div class="collapse" id="types-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal ps-2 pb-1 small">
                    <li>
                        <a href="{{ route('cars.index') }}"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded">
                            Cars list
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cars.create') }}"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded">
                            New car
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <hr>
</div>
