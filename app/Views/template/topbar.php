<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="<?php echo base_url() . 'notifikasi'; ?>" class="dropdown-item">
                    <!-- <i class="fas fa-envelope mr-2"></i>  -->
                    Form
                    <span class="float-right text-muted text-sm">3</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- <i class="fas fa-users mr-2"></i>  -->
                    Approve
                    <span class="float-right text-muted text-sm">12</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?php echo base_url() . 'all/notifikasi'; ?>" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li>
            <a class="nav-link" data-toggle="dropdown" href="#">
                <span class="d-inline-block"><?= $name ?></span>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->