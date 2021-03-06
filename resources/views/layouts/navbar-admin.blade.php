<style>
    .nav-item:hover {
        font-weight: bold;
    }

</style>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3d5a80">
    <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
            <!-- Left links -->
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item px-2">
                    <a class="nav-link text-light" aria-current="page"
                        href="{{ route('home', app()->getLocale()) }}">{{ __('message.home') }}</a>
                </li>

                <li class="nav-item px-2">
                    <a class="nav-link text-light"
                        href="{{ route('cart', app()->getLocale()) }}">{{ __('message.cart') }}</a>
                </li>

                <li class="nav-item px-2">
                    <a class="nav-link text-light"
                        href="{{ route('profile', app()->getLocale()) }}">{{ __('message.profile') }}</a>
                </li>

                <li class="nav-item px-2">
                    <a class="nav-link text-light"
                        href="{{ route('account-maintenance', app()->getLocale()) }}">{{ __('message.account_maintenance') }}</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
