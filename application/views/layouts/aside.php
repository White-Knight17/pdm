<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-auto">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/Pesa.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Gimnasio</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item has-treeview menu">
                        <a href="#" class="nav-link"><?php echo $this->session->userdata("nombre") ?></a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>" Auth/logout class="nav-link">
                                    <p>Cerrar</p>
                                </a>
                            </li>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-4">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-header">EXAMPLES</li>

                <li class="nav-item has-treeview menu">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa fa-wrench"></i>
                        <p>
                            Mantenimiento
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>categorias" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lista</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../examples/register.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Otras cosas</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview menu">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa fa-window-close"></i>
                        <p>
                            Prototipo
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../examples/login.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lista</p>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>