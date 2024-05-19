@include('layouts.panel.head')
@include('layouts.panel.sidebar')
<main class="main-content border-radius-lg ">
    @include('layouts.panel.navbar')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col position-relative z-index-2">
                @yield('content')
            </div>
        </div>
    </div>
</main>
@include('layouts.panel.footer')