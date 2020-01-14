<!-- active sidebar -->
<?php 
    $active = ['Dashboad.php'=>'','Product.php'=>'','Category.php'=>''];
    foreach($active as $key=> $value){
        if(strpos($_SERVER['REQUEST_URI'],$key) > 0){
            $active[$key] = 'active';
        }
    }
?>
<!-- end active -->
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CMS Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?=$active['Dashboard.php']; ?>">
        <a class="nav-link" href="<?=Config::$urlbase?>Views/CMS/Dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    
    <!-- Nav Item - Tables -->
    <li class="nav-item <?=$active['Category.php']; ?>">
        <a class="nav-link" href="<?=Config::$urlbase?>Views/CMS/Category.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Tài liệu</span></a>
    </li>
    <!-- Nav Item - Tables -->
    <li class="nav-item <?=$active['Product.php']; ?>">
        <a class="nav-link" href="<?=Config::$urlbase?>Views/CMS/Product.php">
            <i class="fab fa-product-hunt"></i>
            <span>Mượn tài liệu</span></a>
    </li>
    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->