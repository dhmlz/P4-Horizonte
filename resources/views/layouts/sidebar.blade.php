<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-15" style="color: #FFD700;">
            <i class="fas fa-bolt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Raio P <sup>4</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Início</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Frota
    </div>

    <!-- Nav Item - Components Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/') }}" data-toggle="collapse" data-target="#collapseComponents"
            aria-expanded="true" aria-controls="collapseComponents">
            <i class="fas fa-fw fa-car"></i>
            <span>Veículos</span>
        </a>
        <div id="collapseComponents" class="collapse" aria-labelledby="headingComponents" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Veículos:</h6>
                <a class="collapse-item" href="{{ url('/motos') }}">Motocicletas</a>
                <a class="collapse-item" href="{{ url('/carros') }}">Carros</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Manutenção</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manutenção:</h6>
                <a class="collapse-item" href="">Troca de óleo/filtro</a>
                <a class="collapse-item" href="">Troca de Pneus</a>
                <a class="collapse-item" href="">Revisão</a>
                <a class="collapse-item" href="">Serviços</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Armamento Bélico
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-crosshairs"></i>
            <span>Armas</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Armas:</h6>
                <a class="collapse-item" href="">Armas Longas</a>
                <a class="collapse-item" href="">Pistolas</a>
                <a class="collapse-item" href="">Munições</a>
                <a class="collapse-item" href="">Registro de Manutenção</a>
                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->