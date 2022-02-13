<nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #98c1d9">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
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
                    <a class="nav-link" href="{{ url('register') }}">
                        {{ __('message.register') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('login') }}">
                        {{ __('message.login') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
