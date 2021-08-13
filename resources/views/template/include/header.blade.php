<header class='mb-3'>
    <nav class="navbar navbar-expand navbar-light ">
        <div class="container-fluid">
            <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="dropdown ms-auto">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">{{ Auth::user()->name }}</h6>
                                <p class="mb-0 text-sm text-gray-600">Online</p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="{{ asset('assets/images/faces/1.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li>
                            <h6 class="dropdown-header">Hai, {{ Str::substr(Auth::user()->name, 0, 9) }}!</h6>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('profile.index') }}"><i
                                    class="icon-mid bi bi-person me-2"></i> Profil</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('profile.password') }}"><i
                                    class="icon-mid bi bi-lock me-2"></i> Ubah
                                Password</a>
                        </li>
                        <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"><i
                                    class="icon-mid bi bi-box-arrow-left me-2"></i>
                                Keluar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
