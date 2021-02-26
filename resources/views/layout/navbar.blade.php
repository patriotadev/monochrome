<nav class="navbar navbar-expand-sm navbar-dark bg-black">
    <div class="container">
        <a href="/" class="navbar-brand">Monochrome.id</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mt-2" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item active">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Product
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/t-shirt">T-Shirt</a>
                        <a class="dropdown-item" href="#">Polo Shirt</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">-</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a href="new_arrival" class="nav-link">New Arrivals</a>
                </li>

                <li class="nav-item active">
                    <a href="custom" class="nav-link">Custom</a>
                </li>
                @if (Session::has('success'))
                <li class="nav-item active">
                    <a href="/logout" class="nav-link">Logout</a>
                </li>
                @else
                <li class="nav-item active">
                    <a href="login" class="nav-link">Login</a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="cart" class="nav-link">
                        <i class="fas fa-shopping-cart fa-2x"></i>
                    </a>
                </li>
            </ul>

        </div>
    </div>

</nav>