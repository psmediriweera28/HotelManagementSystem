<div class="mb-4 mt-0 border-bottom pb-2">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('more') ? 'active bg-success text-white' : 'text-success' }}"
               href="{{ route('more') }}">Overview</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('more.gallery') ? 'active bg-success text-white' : 'text-success' }}"
               href="{{ route('more.gallery') }}">Gallery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('more.feedbacks') ? 'active bg-success text-white' : 'text-success' }}"
               href="{{ route('more.feedbacks') }}">Feedbacks</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('more.offers') ? 'active bg-success text-white' : 'text-success' }}"
               href="{{ route('more.offers') }}">Offers</a>
        </li>
    </ul>
</div>
