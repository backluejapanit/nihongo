<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link" href="/home">
                    <h5 class="mb-0">Home</h5>
                </a>
            </li>
            <li class="nav-item dropdown {{ Request::is('categories') ? 'active' : '' }}">
                <a style="display: flex; align-items: center;" class="nav-link dropdown-toggle" href="/categories" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h5 class="mb-0">Categories</h5>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @php
                    foreach($categories as $category) {
                        echo "<a class=\"dropdown-item\" href=\"/home?category=$category->id\">$category->name</a>";
                    }
                    @endphp
                    
                </div>
            </li>
        </ul>
    </div>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>