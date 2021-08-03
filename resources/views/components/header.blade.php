<header>
    <a href="/" id="home">
        <i class="fas fa-home"></i>
    </a>
    <a href="/games" id="to-games">
        Check all available games
    </a>
    <form method="GET" action="search" id="search">
        <input input='type' name="name" placeholder='Search your favorite game' value="{{ request('search') }}" autocomplete="off">
    </form>
    <a href="https://github.com/TatuMon/MonStore.git" id="github" target="_blank">
        <i class="fab fa-github"></i>
    </a>
</header>