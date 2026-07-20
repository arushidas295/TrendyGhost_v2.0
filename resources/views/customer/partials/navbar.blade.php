<header class="site-header">
    <nav class="navbar" aria-label="Main navigation">
        <a href="{{ route('home') }}" class="navbar__logo">TrendyGhost</a>

        <ul class="navbar__links">
            <li><a href="{{ route('categories.index') }}">Shop</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
        </ul>

        <form action="{{ route('search') }}" method="GET" class="navbar__search" role="search">
            <label for="navbar-search" class="sr-only">Search products</label>
            <input type="search" id="navbar-search" name="q" placeholder="Search products...">
        </form>

        <div class="navbar__actions">
            <a href="{{ route('wishlist.index') }}" aria-label="Wishlist">Wishlist</a>
            <a href="{{ route('cart.index') }}" aria-label="Cart">Cart</a>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('profile.dashboard') }}" aria-label="My Account">Account</a>
        </div>
    </nav>
</header>