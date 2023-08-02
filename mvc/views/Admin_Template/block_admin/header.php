<header class="header header-sticky mb-4">
  <div class="container-fluid">
    <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
      <svg class="icon icon-lg">
        <use xlink:href="/duan1_Nhom12_WD18202/public/admin/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
      </svg>
    </button><a class="header-brand d-md-none" href="#">
      <svg width="118" height="46" alt="CoreUI Logo">
        <use xlink:href="/duan1_Nhom12_WD18202/public/admin/assets/brand/coreui.svg#full"></use>
      </svg></a>

    <ul class="header-nav ms-3">
      <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-md"><img class="avatar-img" src="/duan1_Nhom12_WD18202/public/img/<?= $data['users']['anh'] ?>" alt="user@email.com"></div>
        </a>
        <div class="dropdown-menu dropdown-menu-end pt-0">
          <a class="dropdown-item" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_profile/<?= $data['users']['id'] ?>">
            <svg class="icon me-2">
              <use xlink:href="/duan1_Nhom12_WD18202/public/admin/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
            </svg> Profile</a>
          <div class="dropdown-divider"></div><a class="dropdown-item" href="http://localhost/duan1_Nhom12_WD18202/admin/admin_login/logOutFeature">
            <svg class="icon me-2">
              <use xlink:href="/duan1_Nhom12_WD18202/public/admin/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
            </svg> Logout</a>
        </div>
      </li>
    </ul>
  </div>
  <div class="header-divider"></div>
  <div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
          <!-- if breadcrumb is single--><span>Home</span>
        </li>
        <li class="breadcrumb-item active"><span>Dashboard</span></li>
      </ol>
    </nav>
  </div>
</header>