<aside class="app-sidebar bg-body-secondary shadow">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}" class="brand-link">
            <span class="brand-text fw-light">CULTURE BENIN</span>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer2"></i>
                        <p>DASHBOARD</p>
                    </a>
                </li>

                <!-- Localisation (actif pour langues) -->
                <li class="nav-item {{ request()->is('langues*') || request()->is('regions*') || request()->is('parlers*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('langues*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-globe-americas"></i>
                        <p>LOCALISATION</p>
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('langues.index') }}" class="nav-link {{ request()->is('langues*') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-translate"></i>
                                <p>Langues</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('regions.index') }}" class="nav-link {{ request()->is('regions*') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-geo-alt"></i>
                                <p>Régions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('parlers.index') }}" class="nav-link {{ request()->is('parlers*') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-mic"></i>
                                <p>Parler</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Ajoutez les autres menus comme dans votre dashboard -->
            </ul>
        </nav>
    </div>
</aside>