<header class="main-header">
  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><?= $this->Html->image('logo.png') ?></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><?= $this->Html->image('logo.png') ?></span>
    
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="user-image"><?= substr($this->request->session()->read('Auth.User.username'), 0, 2) ?></span>
            <!--img src="dist/img/user2-160x160.jpg" class="user-image" alt="" -->
            <span class="hidden-xs"><?= $this->request->session()->read('Auth.User.username') ?></span>
          </a>
          <!--ul class="dropdown-menu">
            < Menu Footer>
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="#" class="btn btn-default btn-flat">Cerrar Sesión</a>
              </div>
            </li>
          </ul-->
        </li>
      </ul>
    </div>
  </nav>
</header>