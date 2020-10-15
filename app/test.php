<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Color theme for statusbar (Android only) -->
    <meta name="theme-color" content="#2196f3">
    <!-- Your app title -->
    <title>My App</title>
    <!-- Path to Framework7 Library Bundle CSS -->
    <link rel="stylesheet" href="assets/vendor/framework7/framework7.bundle.css">
    <link rel="stylesheet" href="assets/vendor/framework7/framework7-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="assets/css/app.css">
  </head>
  <body>
    <!-- App root element -->
    <div id="app">

      <!-- Your main view, should have "view-main" class -->
      <div class="view view-main">
        <!-- Initial Page, "data-name" contains page name -->
        <div data-name="home" class="page">

          <!-- Top Navbar -->
          <div class="navbar">
            <div class="navbar-bg"></div>
            <div class="navbar-inner">
              <div class="title">Awesome App</div>
            </div>
          </div>

          <!-- Bottom Toolbar -->
          <div class="toolbar toolbar-bottom">
            <div class="toolbar-inner">
              <!-- Toolbar links -->
              <a href="#" class="link">Link 1</a>
              <a href="#" class="link">Link 2</a>
            </div>
          </div>

          <!-- Scrollable page content -->
          <div class="page-content">
            <p>Page content goes here</p>
            <!-- Link to another page -->
            <a href="/about/">About app</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Path to Framework7 Library Bundle JS-->
    <script type="text/javascript" src="assets/vendor/framework7/framework7.bundle.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="assets/js/app.js"></script>
  </body>
</html>