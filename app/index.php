<?php
    $title="Dine-Go an easy solution to dining";

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
          <!-- Banner Homepage -->
          <div id="banner">
              <div class="intro">
                  <p id="title2">DINE-GO</p>
                  <p>Want to dine in but feel insecure?</p>
                  <p>Choose "Dine-Go"</p>
                  <p>Find Dineable or Take Away</p>
                  <p>only establishments with us</p>
                  <div class="button">
                      <a href="dashboard.php">FIND DINE IN</a>
                  </div>
              </div>
          </div>
          <!-- Features Homepage -->
          <div class="features">
              <h1>FEATURES</h1>
              <div class="item">
                  <p class="header">FAST</p>
                  <div class="">
                      <span class="material-icons">speed</span>
                  </div>
                  <p>To save time when looking for a restaurant to dine at.</p>
              </div>
              <div class="item">
                  <p class="header">EASY</p>
                  <div class="">
                      <span class="material-icons">touch_app</span>
                  </div>
                  <p>Friendly user UI to reserve and survey restaurant and cafe</p>
              </div>
              <div class="item">
                  <p class="header">REAL-TIME</p>
                  <div class="">
                      <i class="material-icons">access_time</i>
                  </div>
                  <p>To develop an interactive website based on a real-time hotspot location.</p>
              </div>
          </div>
          <!-- Footer Homepage -->
          <div class="footer">
              <p>&copy; 2021 DINE-GO</p>
          </div>
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
  </script>
</body>
</html>
