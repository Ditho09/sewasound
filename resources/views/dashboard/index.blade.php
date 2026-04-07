<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OTID SOUND – Professional Audio Panel</title>

    <!-- Font Awesome -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    
    <!-- Google Fonts: Orbitron (Digital) & Plus Jakarta Sans (UI) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- SB Admin 2 Styles (Base) -->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        /* =========================================
           OTID SOUND – THEME SYSTEM (V.FINAL)
           Concept: Dark Rack-Mount Audio Gear
        ========================================= */
        :root {
            /* Palette Warna Audio Gear */
            --bg-master: #090a0c;       /* Hitam sangat pekat */
            --bg-panel: #111317;        /* Abu-abu metalik gelap */
            --bg-card: #161920;         /* Warna permukaan modul */
            
            /* Neon Accents (LED Style) */
            --neon-blue: #00f3ff;       /* Signal Clean */
            --neon-purple: #bc13fe;     /* Digital/Synth */
            --neon-green: #0aff60;      /* Level OK */
            --neon-red: #ff003c;        /* Clipping/Error */
            --neon-amber: #ffae00;      /* Warning */

            /* Borders & Textures */
            --border-metal: 1px solid rgba(255, 255, 255, 0.08);
            --border-glow: 0 0 10px rgba(0, 243, 255, 0.15);
        }

        /* 1. GLOBAL RESET & TYPOGRAPHY */
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-master);
            color: #cfd8dc;
        }

        #wrapper {
            background-color: var(--bg-master);
        }

        /* Font khusus angka/judul digital */
        .font-digital {
            font-family: 'Orbitron', sans-serif;
            letter-spacing: 1px;
        }

        /* 2. SIDEBAR (RACK MOUNT STYLE) */
        .sidebar {
            background: var(--bg-panel) !important;
            background-image: linear-gradient(180deg, rgba(255,255,255,0.02) 0%, transparent 100%);
            border-right: var(--border-metal);
            box-shadow: 5px 0 20px rgba(0,0,0,0.5);
            z-index: 100;
        }

        .sidebar .sidebar-brand {
            background: rgba(0,0,0,0.2);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar .sidebar-brand-text {
            font-family: 'Orbitron', sans-serif;
            font-weight: 900;
            letter-spacing: 2px;
        }

        /* Menu Items */
        .sidebar .nav-item {
            border-bottom: 1px solid rgba(255,255,255,0.02);
        }

        .sidebar .nav-item .nav-link {
            color: #8890a0 !important;
            padding: 1.2rem 1rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .sidebar .nav-item .nav-link i {
            color: #555b6e;
            transition: 0.3s;
        }

        .sidebar .nav-item .nav-link:hover {
            background: rgba(255,255,255,0.03);
            color: #fff !important;
            padding-left: 1.5rem; /* Slide effect */
        }

        .sidebar .nav-item .nav-link:hover i {
            color: var(--neon-blue);
            text-shadow: 0 0 8px var(--neon-blue);
        }

        /* ACTIVE STATE - GLOWING LED EFFECT */
        .sidebar .nav-item.active .nav-link {
            background: linear-gradient(90deg, rgba(0, 243, 255, 0.1) 0%, transparent 100%);
            color: #fff !important;
            border-left: 3px solid var(--neon-blue);
        }

        .sidebar .nav-item.active .nav-link i {
            color: var(--neon-blue);
            text-shadow: 0 0 10px var(--neon-blue);
        }

        .sidebar-heading {
            font-family: 'Orbitron', sans-serif;
            font-size: 0.65rem;
            color: rgba(255,255,255,0.4);
            margin-top: 15px;
            letter-spacing: 1px;
        }

        /* 3. TOPBAR (MIXER BRIDGE) */
        .topbar {
            background: var(--bg-panel) !important;
            border-bottom: var(--border-metal);
            height: 4.375rem;
            backdrop-filter: blur(5px);
        }

        /* 4. CONTENT CARDS (MODULES) */
        .card {
            background-color: var(--bg-card);
            border: var(--border-metal);
            border-radius: 6px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
            transition: transform 0.2s;
        }

        .card:hover {
            border-color: rgba(255,255,255,0.2);
            transform: translateY(-2px);
        }

        .text-gray-800 { color: #e2e8f0 !important; }
        .text-gray-300 { color: #64748b !important; } /* Icon color faded */

        /* Judul Kartu Kecil */
        .text-xs {
            font-family: 'Orbitron', sans-serif;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* 5. ANIMATED EQ VISUALIZER (CSS Only) */
        .eq-visualizer {
            display: flex;
            align-items: flex-end;
            height: 20px;
            gap: 2px;
        }
        .eq-bar {
            width: 4px;
            background: var(--neon-green);
            animation: eq-bounce 0.8s infinite ease-in-out;
            box-shadow: 0 0 5px var(--neon-green);
        }
        .eq-bar:nth-child(2) { animation-delay: 0.1s; background: var(--neon-blue); box-shadow: 0 0 5px var(--neon-blue); }
        .eq-bar:nth-child(3) { animation-delay: 0.3s; }
        .eq-bar:nth-child(4) { animation-delay: 0.5s; background: var(--neon-purple); box-shadow: 0 0 5px var(--neon-purple); }
        .eq-bar:nth-child(5) { animation-delay: 0.2s; }

        @keyframes eq-bounce {
            0%, 100% { height: 30%; opacity: 0.5; }
            50% { height: 100%; opacity: 1; }
        }

        /* 6. UTILITIES */
        .border-left-primary { border-left: 4px solid var(--neon-blue) !important; }
        .border-left-success { border-left: 4px solid var(--neon-green) !important; }
        .border-left-info { border-left: 4px solid var(--neon-purple) !important; }
        .border-left-warning { border-left: 4px solid var(--neon-amber) !important; }

        .text-primary { color: var(--neon-blue) !important; }
        .text-success { color: var(--neon-green) !important; }
        
        /* Scrollbar Customization */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: var(--bg-master); }
        ::-webkit-scrollbar-thumb { background: #333; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--neon-blue); }

    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- ================= SIDEBAR ================= -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-compact-disc fa-spin text-primary" style="animation-duration: 3s;"></i>
                </div>
                <div class="sidebar-brand-text mx-3">OTID<span style="color:var(--neon-blue)">SOUND</span></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" style="border-top: 1px solid rgba(255,255,255,0.05);">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>CONTROL DECK</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" style="border-top: 1px solid rgba(255,255,255,0.05);">

            <!-- Heading -->
            <div class="sidebar-heading">
                INVENTORY & GEAR
            </div>

            <!-- Nav Item - Tambah Produk -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('equipment.index') }}">
        <i class="fas fa-fw fa-plus-circle"></i>
        <span>Tambah Produk</span>
    </a>
</li>

            <!-- Nav Item - Paket -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('packages.index') }}">
                    <i class="fas fa-fw fa-box-open"></i>
                    <span>Paket Sewa</span>
                </a>
            </li>

            <div class="sidebar-heading">
                TRANSACTIONS
            </div>

            <!-- Nav Item - Penyewaan -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('rental.index') }}">
                    <i class="fas fa-fw fa-calendar-check"></i>
                    <span>Jadwal Sewa</span>
                </a>
            </li>

            <!-- Nav Item - Pelanggan -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('customer.index') }}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Database Klien</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" style="border-top: 1px solid rgba(255,255,255,0.05);">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle" style="background: rgba(255,255,255,0.1); color: #fff;"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- ================= CONTENT WRAPPER ================= -->
        <div id="content-wrapper" class="d-flex flex-column" style="background-color: var(--bg-master);">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-dark topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search / Brand Name -->
                    <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100">
                        <div class="eq-visualizer">
                            <div class="eq-bar"></div>
                            <div class="eq-bar"></div>
                            <div class="eq-bar"></div>
                            <div class="eq-bar"></div>
                            <div class="eq-bar"></div>
                        </div>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-800 small font-digital">ADMINISTRATOR</span>
                                <div class="rounded-circle d-flex align-items-center justify-content-center" style="width:35px; height:35px; background: var(--bg-card); border: 1px solid var(--neon-blue);">
                                    <i class="fas fa-user text-primary"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 font-digital" style="text-shadow: 0 0 10px rgba(255,255,255,0.1);">SYSTEM STATUS</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm shadow-sm" style="background: var(--neon-blue); color: #000; font-weight: bold;">
                            <i class="fas fa-download fa-sm text-black-50 mr-1"></i> Generate Report
                        </a>
                    </div>

                    <!-- Content Row (Contoh Widget) -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Active Rentals</div>
                                            <div class="h3 mb-0 font-weight-bold text-gray-800 font-digital">42</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Earnings</div>
                                            <div class="h3 mb-0 font-weight-bold text-gray-800 font-digital">Rp 150jt</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tasks Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">System Load
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h3 mb-0 mr-3 font-weight-bold text-gray-800 font-digital">80%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2" style="background-color: #2c3038;">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 80%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Maintenance</div>
                                            <div class="h3 mb-0 font-weight-bold text-gray-800 font-digital">3 Units</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-wrench fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row (Main Area) -->
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Project Card Example -->
                            <div class="card mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: rgba(255,255,255,0.02); border-bottom: var(--border-metal);">
                                    <h6 class="m-0 font-weight-bold text-primary font-digital">INVENTORY STATUS</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Subwoofers 18" <span class="float-right text-success">Ready</span></h4>
                                    <div class="progress mb-4" style="height: 10px; background-color: #2c3038;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 90%"></div>
                                    </div>
                                    
                                    <h4 class="small font-weight-bold">Line Array Speakers <span class="float-right text-warning">Low Stock</span></h4>
                                    <div class="progress mb-4" style="height: 10px; background-color: #2c3038;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"></div>
                                    </div>
                                    
                                    <h4 class="small font-weight-bold">Mixer Consoles <span class="float-right text-danger">All Rented</span></h4>
                                    <div class="progress mb-4" style="height: 10px; background-color: #2c3038;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer" style="background-color: var(--bg-panel); border-top: var(--border-metal);">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span class="font-digital text-gray-500">OTID SOUND SYSTEM &copy; 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top" style="background: var(--neon-blue);">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

</body>
</html>
