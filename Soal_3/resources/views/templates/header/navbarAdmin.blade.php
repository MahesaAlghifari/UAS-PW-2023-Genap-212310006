<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img class="logo d-inline-block align-text-top" src="images/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="dropdown yellow-dropdown">
            <!-- Default dropend button -->
            <div class="btn-group justify-content-end">
                <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Master-Data
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('menu.index') }}">Menu</a></li>
                    <li><a class="dropdown-item" href="{{ route('article.index') }}">Article</a></li>
                    <li><a class="dropdown-item" href="{{ route('ulasan.index') }}">Ulasan</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
