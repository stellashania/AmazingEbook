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
                    <a class="nav-link text-light" aria-current="page" href="{{ url('home') }}">Home</a>
                </li>

                <li class="nav-item px-2">
                    <a class="nav-link text-light" href="{{ url('cart') }}">Cart</a>
                </li>

                <li class="nav-item px-2">
                    <a class="nav-link text-light" href="{{ url('profile') }}">Profile</a>
                </li>

                <li class="nav-item px-2">
                    <a class="nav-link text-light" href="{{ url('account-maintenance') }}">Account Maintenance</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
