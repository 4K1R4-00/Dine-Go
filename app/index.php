<?php
    $title="Dine-Go an easy solution to dining";

    include("./stylesheet/header.html");
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


      </div>

      <!-- Sidebar -->
      <div id="sidebar" class="hide">
          <ul>
              <li><a href="">Tracking</a></li>
              <li><a href="">Favourite</a></li>
              <li><a href="">Reservation</a></li>
              <li><a href="">Support</a></li>
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
  </script>
</body>
</html>
