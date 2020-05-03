<nav class="navbar">
    <div class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="/">Home</a>
            <a class="navbar-item" href="{{ route('projects') }}">Projects</a>
            <a class="navbar-item" href="/activity">Activity</a>
            <a class="navbar-item" href="/settings">Settings</a>
        </div>

        <div class="app__search control has-icons-right">
            <input class="input" type="text" placeholder="Search something">
            <span class="icon is-right">
                <i class="fas fa-search"></i>
            </span>
        </div>

        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="/profile">
                    <figure class="image app__userpic">
                        <img class="is-rounded" src="/img/user-icon.png">
                    </figure>
                </a>
                <div class="navbar-dropdown">
                    <a class="navbar-item" href="/logout">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
