<header class="head">
    <h1 onclick="window.location='/'; return false;" class="dec-none">Nova</h1>
    <div class="nav-menu">
        <button class="clickbutton dec-none" onclick="window.location='/about'; return false;">What is NOVA</button>
        @auth<button class="clickbutton dec-none" onclick="window.location='/schedule-assessment'; return false;">Schedule your assesment</button>@endauth
        @guest
            <button class="clickbutton dec-none" onclick="window.location='/login'; return false;">Client Portal</button>
        @endguest
    </div>
</header>
