<footer class="site-footer">
    <div class="footer__brand">
        <p>TrendyGhost</p>
        <p>&copy; {{ date('Y') }} TrendyGhost. All rights reserved.</p>
    </div>

    <ul class="footer__links">
        <li><a href="{{ route('categories.index') }}">Shop</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li><a href="{{ route('faq') }}">FAQ</a></li>
        <li><a href="{{ route('track-order') }}">Track Order</a></li>
        <li><a href="{{ route('policy') }}">Policies</a></li>
    </ul>
</footer>