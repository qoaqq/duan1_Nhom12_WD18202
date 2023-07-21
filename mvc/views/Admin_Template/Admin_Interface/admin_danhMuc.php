<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin</title>
    <!-- Vendors styles-->
    <link rel="stylesheet" href="/duan1_Nhom12_WD18202/public/admin/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="/duan1_Nhom12_WD18202/public/admin/css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="/duan1_Nhom12_WD18202/public/admin/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="/duan1_Nhom12_WD18202/public/admin/css/examples.css" rel="stylesheet">
    <link href="/duan1_Nhom12_WD18202/public/admin/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet" >
  </head>
  <body>
    
  <?php require_once "./mvc/views/Admin_Templete/block_admin/sidebar.php"; ?>

    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
    
      <?php require_once "./mvc/views/Admin_Templete/block_admin/header.php"; ?>

      <!-- Content -->
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <?php require_once "./mvc/views/Admin_Templete/adminDanhMuc_Pages/".$data['page'].".php"; ?>
        </div>
      </div>

      <?php require_once "./mvc/views/Admin_Templete/block_admin/footer.php"; ?>
    </div>
    
    <!-- CoreUI and necessary plugins-->
    <script src="/duan1_Nhom12_WD18202/public/admin/vendors/@coreui/coreui/js/coreui.bundle.min.js" href=""></script>
    <script src="/duan1_Nhom12_WD18202/public/admin/vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="/duan1_Nhom12_WD18202/public/admin/vendors/chart.js/js/chart.min.js"></script>
    <script src="/duan1_Nhom12_WD18202/public/admin/vendors/@coreui/chartjs/js/coreui-chartjs.js" ></script>
    <script src="/duan1_Nhom12_WD18202/public/admin/vendors/@coreui/utils/js/coreui-utils.js" ></script>
    <script src="/duan1_Nhom12_WD18202/public/admin/js/main.js"></script>
    <script>
    </script>

  </body>
</html>
