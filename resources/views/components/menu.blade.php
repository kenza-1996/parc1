<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ setMenuActive('home') }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Accueil
              </p>
            </a>
          </li>

        @can("employe")
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de bord
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-chart-line"></i>
                  <p>Vue globale</p>
                </a>
              </li>
             
            </ul>
        </li>
        @endcan

        @can("admin")
        <li class="nav-item {{ setMenuClass('admin.habilitations.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('admin.habilitations.', 'active') }}">
              <i class=" nav-icon fas fa-user-shield"></i>
              <p>
                Gestion des utilisateurs

                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a
                href="{{ route('admin.habilitations.users.index') }}"
                class="nav-link {{ setMenuActive('admin.habilitations.users.index') }}"
                >
                  <i class=" nav-icon fas fa-users-cog"></i>
                  <p>Utilisateurs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-fingerprint"></i>
                  <p>Roles et permissions</p>
                </a>
              </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                Reparation Interne
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link ">
                    <i class="nav-icon far fa-circle"></i>
                    <p>Intervention</p>
                    </a>
                </li>
               
               
            </ul>
        </li>
        <li class="nav-item {{ setMenuClass('admin.Materiels.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('admin.Materiels.', 'active') }}">
              <i class=" nav-icon fas fa-user-shield"></i>
              <p>
                Gestion des Materiels

                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a
                href="{{ route('admin.Materiels.materiels.index') }}"
                class="nav-link {{ setMenuActive('admin.Materiels.materiels.index') }}"
                >
                  <i class=" nav-icon fas fa-users-cog"></i>
                  <p>Materiels</p>
                </a>
              </li>
               <li class="nav-item">
                <a  href="{{ route('admin.Materiels.categories.index') }}"
                class="nav-link {{ setMenuActive('admin.Materiels.categories.index') }}">
                  <i class="nav-icon fas fa-fingerprint"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a  href="{{ route('admin.Materiels.marques.index') }}"
                class="nav-link {{ setMenuActive('admin.Materiels.marques.index') }}">
                  <i class="nav-icon fas fa-fingerprint"></i>
                  <p>Marques</p>
                </a>
              </li>
                <li class="nav-item">
                <a  href="{{ route('admin.Materiels.lots.index') }}"
                class="nav-link {{ setMenuActive('admin.Materiels.lots.index') }}">
                  <i class="nav-icon fas fa-fingerprint"></i>
                  <p>Lots</p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item {{ setMenuClass('admin.Personnels.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('admin.Personnels.', 'active') }}">
              <i class=" nav-icon fas fa-user-shield"></i>
              <p>
                Gestion des Personnels

                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a
                href="{{ route('admin.Personnels.personnels.index') }}"
                class="nav-link {{ setMenuActive('admin.Personnels.personnels.index') }}"
                >
                  <i class=" nav-icon fas fa-users-cog"></i>
                  <p>Personnels</p>
                </a>
              </li>
             
            </ul>
        </li>
        <li class="nav-item {{ setMenuClass('admin.Structures.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('admin.Structures.', 'active') }}">
              <i class=" nav-icon fas fa-user-shield"></i>
              <p>
                Gestion des Structures

                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a
                href="{{ route('admin.Structures.structures.index') }}"
                class="nav-link {{ setMenuActive('admin.Structures.structures.index') }}"
                >
                  <i class=" nav-icon fas fa-users-cog"></i>
                  <p>Structures</p>
                </a>
              </li>
             
            </ul>
        </li>


        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                Reparation Interne
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item nav-item">
                    <a href="#" class="nav-link ">
                    <i class="nav-icon far fa-circle"></i>
                    <p>Intervention</p>
                    </a>
                </li>
               
               
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-exchange-alt"></i>
                <p>
                Affectation
                </p>
            </a>
        </li>
       
        
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-coins"></i>
                <p>
                demmande de prestation
                </p>
            </a>
        </li>
        @endcan

        @can("admin-sag")
        <li class="nav-header">Raparation</li>
        <li class="nav-item  {{ setMenuClass('admin-sag.Reparation.', 'menu-open') }}">
            <a href="{{ route('admin-sag.Reparation.reparations.index') }}" class="nav-link {{ setMenuActive('admin-sag.Reparation.reparations.index') }} {{ setMenuClass('admin-sag.Reparation.', 'active') }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                Reparation Externe
                </p>
            </a>
        </li>
        <li class="nav-item  {{ setMenuClass('admin-sag.Reparateurs.', 'menu-open') }}">
            <a href=" {{ route('admin-sag.Reparateurs.reparateurs.index') }}" class="nav-link {{ setMenuActive('admin-sag.Reparateurs.reparateurs.index') }} {{ setMenuClass('admin-sag.Reparateurs.', 'active') }} ">
                <i class="nav-icon fas fa-exchange-alt"></i>
                <p>
                Reparateurs
                </p>
            </a>
        </li>

        <li class="nav-header">Documents</li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-coins"></i>
                <p>
                Bon de sortie
                </p>
            </a>
        </li>
         <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-coins"></i>
                <p>
                Bon de commande
                </p>
            </a>
        </li>
        @endcan

        </ul>
      </nav>
