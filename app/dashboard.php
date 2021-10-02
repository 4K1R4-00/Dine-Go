<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Dine-Go an easy solution to dining</title>

    <link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <!-- Container -->
    <section>
        <!-- Navigation -->
        <div id="nav">
            <span id="mobile" onclick="toggleSidebar()"><i class="material-icons">menu</i></span>
            <span id="title">DINE-GO</span>
        </div>

        <!-- Center content + search button -->

        <!-- Sidebar -->
        <div id="sidebar" class="hide">
            <ul>
                <li><a href="">Tracking</a></li>
                <li><a href="">Favourite</a></li>
                <li><a href="">Reservation</a></li>
                <li><a href="">Support</a></li>
            </ul>
        </div>
        <!-- <iframe src="https://www.google.com/maps/d/embed?mid=1cPVVN1MZRkgeb82MWIrCQlv_2eeTCW2L" width="640" height="480"></iframe> -->
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
    </script>
</body>
</html>
