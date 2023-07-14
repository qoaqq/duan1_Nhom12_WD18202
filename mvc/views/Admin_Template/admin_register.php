<!DOCTYPE html> 
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/live/public/admin/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/live/public/admin/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/live/public/admin/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/live/public/admin/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/live/public/admin/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/live/public/admin/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/live/public/admin/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/live/public/admin/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/live/public/admin/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/live/public/admin/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/live/public/admin/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/live/public/admin/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/live/public/admin/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/live/public/admin/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/live/public/admin/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="/live/public/admin/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="/live/public/admin/css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="/live/public/admin/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="/live/public/admin/css/examples.css" rel="stylesheet">
    <link href="/live/public/admin/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
  </head>
  <body>
    <!-- Side bar  -->
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <!-- Header  -->

      <!-- Content  -->
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <?php require_once "./mvc/views/Admin_Template/admin_pages/".$data['page'].".php"; ?>
        </div>
        
      </div>
      <!-- Footer  -->
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="/live/public/admin/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="/live/public/admin/vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="/live/public/admin/vendors/chart.js/js/chart.min.js"></script>
    <script src="/live/public/admin/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="/live/public/admin/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="/live/public/admin/js/main.js"></script>
    <script>
    </script>

  </body>
</html>