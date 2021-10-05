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
        <div id="contentDash">
            <iframe src="https://www.google.com/maps/d/embed?mid=1cPVVN1MZRkgeb82MWIrCQlv_2eeTCW2L"></iframe>
            <form onsubmit="toggleSearchBar(); return false;">
                <div id="searchCtn" class="hide">
                    <span class="material-icons">search</span>
                    <input  id="searchbar" type="text" name="search">
                </div>
                <input class="submitbtn" type="submit" name="submit">
            </form>

            <form onsubmit="toggleForm(); return false;">
                <div id="reservation" class="hide">
                    <label for="res_name">Restaurant:</label>
                    <input type="text" id="res_name" name="res_name" value="Texas Chicken">

                    <label for="res_count">People:</label>
                    <select name="res_count" id="res_count">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>

                    <label for="res_date">Date & Time:</label>
                    <input type="datetime-local" id="res_date" name="res_date">
                    <input class="submitbtn" type="submit" name="submit" value="Confirm">
                </div>
            </form>
            <button id="searchbtn" onclick="toggleSearchBar()"><i class="material-icons">search</i></button>
        </div>

        <!-- Sidebar -->
        <?php include "includes/sidebar.php"; ?>
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

        function toggleReservation()
        {
            var history     =   document.getElementById("history");

            if (history.classList.contains("hide"))
            {
                history.classList.add("show");
                history.classList.remove("hide");
            } else
            {
                history.classList.add("hide");
                history.classList.remove("show");
            }
        }

        function toggleSearchBar()
        {
            var searchbar   =   document.getElementById("searchCtn");

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

        function toggleForm()
        {
            var form   =   document.getElementById("reservation");

            if (form.classList.contains("hide"))
            {
                form.classList.add("show");
                form.classList.remove("hide");
            } else
            {
                form.classList.add("hide");
                form.classList.remove("show");
            }
        }
    </script>
</body>
</html>
