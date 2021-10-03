<?php
    $title="Dashboard | Dine-Go an easy solution to dining";

    include("./includes/header.html");
?>

<body>
    <!-- Container -->
    <section>
        <!-- Navigation -->
        <div id="nav">
            <span id="mobile" onclick="toggleSidebar()"><i class="material-icons">menu</i></span>
            <span id="title">DINE-GO</span>
        </div>

        <!-- Center content + search button -->
        <div id="content">
            <iframe src="https://www.google.com/maps/d/embed?mid=1cPVVN1MZRkgeb82MWIrCQlv_2eeTCW2L"></iframe>
            <form onsubmit="toggleSearchBar(); return false;">
                <input  id="searchbar" class="hide" type="text" name="search">
                <input id="submitbtn" type="submit" name="submit">
            </form>
            <button id="searchbtn" onclick="toggleSearchBar()"><i class="material-icons">search</i></button>
        </div>

        <!-- Sidebar -->
        <div id="sidebar" class="hide">
            <ul>
                <li><a href=""><i class="material-icons">history</i>Reservation</a></li>
                <li><a href=""><i class="material-icons">favorite</i>Favourites</a></li>
                <li><a href=""><i class="material-icons">help</i>Support</a></li>
            </ul>
        </div>
    </section>

    <script type="text/javascript">

        function toggleSidebar()
        {
            var sidebar    =   document.getElementById("sidebar");

            if (sidebar.classList.contains("hide"))
            {
                sidebar.classList.add("show");
                sidebar.classList.remove("hide");
            } else
            {
                sidebar.classList.add("hide");
                sidebar.classList.remove("show");
            }
        }

        function toggleSearchBar()
        {
            var searchbar   =   document.getElementById("searchbar");

            if (searchbar.classList.contains("hide"))
            {
                searchbar.classList.add("show");
                searchbar.classList.remove("hide");
            } else
            {
                searchbar.classList.add("hide");
                searchbar.classList.remove("show");
            }
        }
    </script>
</body>
</html>
