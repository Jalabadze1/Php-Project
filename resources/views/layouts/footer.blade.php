<footer>
    <h2>Subscribe to our newsletter</h2>
    <form method="POST" action="{{ route('subscribe') }}">
        @csrf
        <input type="email" name="email" placeholder="Enter your email">
        <button type="submit">Subscribe</button>
    </form>
</footer>
