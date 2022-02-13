<nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #98c1d9">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{-- {{ config('app.name', 'Laravel') }} --}}
            Amazing E-Book
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->

                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{ route('logout', app()->getLocale()) }}"
                        onclick="event.preventDefault();
                                                                                    document.getElementById('logout-form').submit();">
                        {{ __('message.logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST"
                        class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>
