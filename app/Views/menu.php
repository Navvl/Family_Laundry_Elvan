<body>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Material Design Icons CSS -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <style>
      @keyframes fadeIn {
        from {
          opacity: 0;
        }

        to {
          opacity: 1;
        }
      }

      /* Apply the fade-in animation to the image */
      .fade-in {
        animation: fadeIn 2s ease-in-out;
        /* Adjust duration and easing as needed */
      }
    </style>
  </head>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="<?= base_url('home/dashboard') ?>">
            <img src="<?= base_url('images/' . $yogi->logo_website) ?>" alt="logo" class="fade-in" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-date dropdown">
            <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;">
              <h6 class="date mb-0">Today : Mar 23</h6>
              <i class="typcn typcn-calendar"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="typcn typcn-cog-outline mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <a class="dropdown-item preview-item" href="<?= base_url('home/profile') ?>">
                <div class="preview-thumbnail">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">Profile</h6>
                </div>
              </a>

              <a class="dropdown-item preview-item" href="<?= base_url('home/logout') ?>">
                <div class="preview-thumbnail">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">Log out</h6>
                </div>
              </a>

            </div>
          </li>
          <li class="nav-item dropdown mr-0">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="typcn typcn-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="typcn typcn-info mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="typcn typcn-cog-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="typcn typcn-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="typcn typcn-th-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
      <div class="navbar-links-wrapper d-flex align-items-stretch">
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-calendar-outline"></i></a>
        </div>
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-mail"></i></a>
        </div>
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-folder"></i></a>
        </div>
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-document-text"></i></a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item ml-0">
            <h4 class="mb-0">Dashboard</h4>
          </li>
          <li class="nav-item">
            <div class="d-flex align-items-baseline">
              <p class="mb-0">Home</p>
              <i class="typcn typcn-chevron-right"></i>
              <p class="mb-0">Main Dahboard</p>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-search d-none d-md-block mr-0">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search..." aria-label="search" aria-describedby="search">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="typcn typcn-zoom"></i>
                </span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close typcn typcn-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close typcn typcn-times"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
              </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
              <div class="wrapper d-flex mb-2">
                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('home/dashboard') ?>">
              <i class="mdi mdi-shopping menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <?php if (has_permission('pemesanan')): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('home/pemesanan') ?>">
                <i class="mdi mdi-shopping menu-icon"></i>
                <span class="menu-title">Pemesanan</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if (has_permission('restore_data')): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('home/restore') ?>">
                <i class="mdi mdi-shopping menu-icon"></i>
                <span class="menu-title">Restore Data</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if (has_permission('pemesanan_karyawan')): ?>

            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('home/pemesanan_karyawan') ?>">
                <i class="mdi mdi-shopping menu-icon"></i>
                <span class="menu-title">Pemesanan</span>
              </a>
            </li>

          <?php endif; ?>

          <?php if (has_permission('transaksi_karyawan')): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('home/transaksi_karyawan') ?>">
                <i class="typcn typcn-chart-pie-outline menu-icon"></i>
                <span class="menu-title">Transaksi</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if (has_permission('transaksi')): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('home/transaksi') ?>">
                <i class="typcn typcn-chart-pie-outline menu-icon"></i>
                <span class="menu-title">Transaksi</span>
              </a>
            </li>
          <?php endif; ?>


          <?php if (has_permission('laporan')): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('home/laporan') ?>">
                <i class="typcn typcn-chart-pie-outline menu-icon"></i>
                <span class="menu-title">Laporan</span>
              </a>
            </li>
          <?php endif; ?>


          <?php if (has_permission('jenis_paket')): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('home/jenis_paket') ?>">
                <i class="typcn typcn-chart-pie-outline menu-icon"></i>
                <span class="menu-title">Jenis Paket</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if (has_permission('jenis_pelayanan')): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('home/jenis_pelayanan') ?>">
                <i class="typcn typcn-chart-pie-outline menu-icon"></i>
                <span class="menu-title">Jenis Pelayanan</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if (has_permission('karyawan')): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('home/karyawan') ?>">
                <i class="typcn typcn-chart-pie-outline menu-icon"></i>
                <span class="menu-title">Karyawan</span>
              </a>
            </li>
          <?php endif; ?>


          <?php if (has_permission('setting')): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('home/setting') ?>">
                <i class="typcn typcn-chart-pie-outline menu-icon"></i>
                <span class="menu-title">Setting</span>
              </a>
            </li>
          <?php endif; ?>


          <?php if (has_permission('log_activity')): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('ActivityLogController/log') ?>">
                <i class="typcn typcn-chart-pie-outline menu-icon"></i>
                <span class="menu-title">Log Activity</span>
              </a>
            </li>
          <?php endif; ?>
          <?php if (has_permission('level')): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('home/level') ?>">
                <i class="typcn typcn-chart-pie-outline menu-icon"></i>
                <span class="menu-title">Level</span>
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </nav>
      <!-- partial -->

      <!-- main-panel ends -->

      <!-- page-body-wrapper ends -->

      <!-- container-scroller -->

      <!-- base:js -->
      <script src="<?= base_url('vendors/js/vendor.bundle.base.js') ?>"></script>
      <!-- endinject -->
      <!-- Plugin js for this page-->
      <script src="<?= base_url('vendors/chart.js/Chart.min.js') ?>"></script>
      <!-- End plugin js for this page-->
      <!-- inject:js -->
      <script src="<?= base_url('js/off-canvas.js') ?>"></script>
      <script src="<?= base_url('js/hoverable-collapse.js') ?>"></script>
      <script src="<?= base_url('js/template.js') ?>"></script>
      <script src="<?= base_url('js/settings.js') ?>"></script>
      <script src="<?= base_url('js/todolist.js') ?>"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="<?= base_url('js/dashboard.js') ?>"></script>
      <!-- End custom js for this page-->
</body>