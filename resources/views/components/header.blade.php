<header>
    <a href="/" id="home">
        <i class="fas fa-home"></i>
    </a>
    <a href="/games" id="to-games">
        Check all
    </a>
    <form method="GET" action="/search" id="search">
        <input input='type' name="name" placeholder='Search your favorite game...' value="{{ request('search') }}" autocomplete="off">
    </form>
</header>