
<nav id="sidebar">

    <div class="sidebar-container">

        <div class="sidebar-section">

            <div class="sidebar-elem se--active">
                <a href="">Panel</a>
            </div>

        </div>

        <div class="sidebar-section">
            <div class="sidebar-section-label">Aktywności</div>

            <div class="sidebar-elem ">
                <a href="">Kalendarz</a>
            </div>

            <div class="sidebar-elem ">
                <a href="">Dodaj aktywność</a>
            </div>

            <div class="sidebar-elem ">
                <a href="">Wydarzenia personalne</a>
            </div>

        </div>

        <div class="sidebar-section">
            <div class="sidebar-section-label">Drużyna</div>

            <div class="sidebar-elem ">
                <a href="">Lista drużyn</a>
            </div>

            @if(true )
                <div class="sidebar-elem ">
                    <a href="">Moja drużyna</a>
                </div>

                <div class="sidebar-elem ">
                    <a href="">Wydarzenia drużynowe</a>
                </div>
            @else
                <div class="sidebar-elem ">
                    <a href="">Stwórz drużynę</a>
                </div>

                <div class="sidebar-elem ">
                    <a href="">Dołącz do drużyny</a>
                </div>

            @endif


        </div>

    </div>

</nav>
