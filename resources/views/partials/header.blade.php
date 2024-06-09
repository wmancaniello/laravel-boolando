{{-- HEADER --}}

<nav class="d-flex justify-content-between align-items-center py-3 ps-4 pe-4">
    <ul class="d-flex align-items-center gap-3 list-unstyled">
        <li><a href="{{ route('home') }}" class="text-white">Home</a></li>
        <li><a href="{{ route('uomo') }}" class="text-white">Uomo</a></li>
        <li><a href="{{ route('donna') }}" class="text-white">Donna</a></li>
        <li><a href="{{ route('bambini') }}" class="text-white">Bambini</a></li>
    </ul>
    <img class="logo" src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="logo">
    <ul class="d-flex align-items-center gap-3 list-unstyled">
        <li class="text-white"><a class="text-white" href=""> <i class="fa-regular fa-user"></i> </a></li>
        <li class="text-white"><a class="text-white" href=""> <i class="fa-regular fa-heart"></i> </a></li>
        <li class="text-white"><a class="text-white" href=""> <i class="fa-solid fa-bag-shopping"></i> </a>
        </li>
    </ul>
</nav>
