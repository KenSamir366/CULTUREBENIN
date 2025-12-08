<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="bi bi-house-door"></i> Accueil
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            <!-- Recherche -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="bi bi-search"></i>
                </a>
            </li>

            <!-- Notifications -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="bi bi-bell-fill"></i>
                    <span class="navbar-badge badge bg-warning">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <span class="dropdown-item dropdown-header">3 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="bi bi-people-fill me-2"></i> Nouvelles inscriptions
                        <span class="float-end text-muted fs-7">12 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">Voir toutes</a>
                </div>
            </li>

            <!-- Menu Utilisateur -->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    @if(Auth::check() && Auth::user()->avatar)
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" class="user-image rounded-circle shadow" alt="User Image" />
                    @else
                        <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="user-image rounded-circle shadow" alt="User Image" />
                    @endif
                    <span class="d-none d-md-inline">
                        {{ Auth::check() ? Auth::user()->name : 'Invité' }}
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <li class="user-header text-white" style="background: linear-gradient(135deg, #00d4ff 0%, #7b61ff 100%);">
                        @if(Auth::check() && Auth::user()->avatar)
                            <img src="{{ asset('storage/' . Auth::user()->avatar) }}" class="rounded-circle shadow" alt="User Image" />
                        @else
                            <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="rounded-circle shadow" alt="User Image" />
                        @endif
                        <p>
                            {{ Auth::check() ? Auth::user()->name : 'Admin Culture Benin' }}
                            <small>
                                @if(Auth::check())
                                    Membre depuis {{ Auth::user()->created_at->format('M. Y') }}
                                @else
                                    Connectez-vous
                                @endif
                            </small>
                        </p>
                    </li>
                    <li class="user-footer">
                        @if(Auth::check())
                            <a href="{{ route('profile.edit') }}" class="btn btn-default btn-flat">Profil</a>
                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-default btn-flat float-end">Déconnexion</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-default btn-flat">Connexion</a>
                            <a href="{{ route('register') }}" class="btn btn-default btn-flat float-end">Inscription</a>
                        @endif
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>