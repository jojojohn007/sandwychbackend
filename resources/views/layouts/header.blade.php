
<header class="header-Nav">
    <nav class="navbar navbar-expand-lg py-lg-4 py-3">
        <div class="container-fluid px-xl-5">
            <div class="w-100 position-relative">
                <div class="logo-wrp d-flex justify-content-between align-items-center mb-lg-4 mb-3">
                    <a class="navbar-brand" href="#">
                        <h1 class="mb-0"><img src="../../images/logo.svg" alt=""></h1>
                    </a>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle p-0 icon" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" id="icon-nav">
                            {{-- <img src="images/user-icon-sample.svg" alt="">  --}}
                            {{-- <img src="" class="img-fluid" alt=""> --}}
                            <span id="img1" class="align-items-center justify-content-center rounded-circle user-icon-txt">AB</span>
                            {{-- <span id="img2" class="align-items-center justify-content-center rounded-circle user-icon-txt">OR</span>
                            <span id="img3" class="align-items-center justify-content-center rounded-circle user-icon-txt">DS</span>  --}}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">View Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="/">Log out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="menu-wrp d-flex justify-content-lg-between flex-lg-row flex-column">
                    <button class="navbar-toggler d-xl-none p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive"><span class="navbar-toggler-icon"></span></button>
                    <div class="offcanvas-xl offcanvas-start" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
                        <div class="offcanvas-header justify-content-between">
                            <a class="navbar-brand" href="#">
                                <h2 class="mb-0"><img src="images/logo.svg" alt=""></h2>
                            </a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav flex-xl-row flex-column me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a id="dashboardlink" class="nav-link px-0 me-4" data-nav="dashboard" href="/dashboards">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a id="medicalProffessionalslink" class="nav-link px-0 me-4" data-nav="medical-professionals"  aria-current="page" href="/medical-professionals">Medical Professionals</a>
                                </li>
                                <li class="nav-item">
                                    <a id="nurselink" class="nav-link px-0 me-4" data-nav="nurses" href="/nurses">Nurses</a>
                                </li>
                                <li class="nav-item">
                                    <a id="socialworkerlink" class="nav-link px-0 me-4" data-nav="social-workers" href="/case-managers">Case Managers</a>
                                </li>
                                <li class="nav-item">
                                    <a id="clientslink" class="nav-link px-0 me-4" data-nav="clients" href="/clients">Clients</a>
                                </li>
                                <li class="nav-item">
                                    <a id="reportinglink" class="nav-link px-0 me-4" data-nav="reporting"  href="/reporting">Reporting</a>
                                </li>
                                <li class="nav-item">
                                    <a id="resourcemanagementlink" class="nav-link px-0 me-4" data-nav="resource-management" href="/resource-management">Resource Management</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <form class="d-flex position-relative ms-lg-auto me-lg-0" role="search">
                        <input class="form-control ps-5 shadow-common" type="search" placeholder="Search" aria-label="Search">
                        <button class="search-btn" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>



