<aside class="main-sidebar sidebar-white-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link {{ ($active === 'home') ? 'active' : '' }} ">
    <img src="{{ asset('userProfile/'.Auth::user()->image) }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light"><small>{{ Auth::user()->name }}</small></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/logo.png') }}" class="img-circle w-100" alt="User Image">
      </div>
      {{-- <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div> --}}
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fa fa-solid fa-database"></i>
            <p>
              Dadus Master
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('munisipiu.index') }}" class="nav-link {{ ($active === 'munisipiu') ? 'active' : '' }}">
                <i class="fa fa-solid fa-book"></i>
                <p>Munisipiu</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('postu.index') }}" class="nav-link {{ ($active === 'postu') ? 'active' : '' }}">
                <i class="fa fa-solid fa-book"></i>
                <p>Postu</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('suku.index') }}" class="nav-link {{ ($active === 'suku') ? 'active' : '' }}">
                <i class="fa fa-solid fa-book"></i>
                <p>Suku</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('aldeia.index') }}" class="nav-link {{ ($active === 'aldeia') ? 'active' : '' }}">
                <i class="fa fa-solid fa-book"></i>
                <p>Aldeia</p>
              </a>
            </li>


            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fa fa-solid fa-database"></i>
                <p>
                  Tipu Tipu
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('movimentu.index') }}" class="nav-link {{ ($active === 'movimentu') ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Tipu Movimentu</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('morada.index') }}" class="nav-link {{ ($active === 'morada') ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Tipu Morada</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('karakterizasaun.index') }}" class="nav-link {{ ($active === 'karakterizasaun') ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Tipu Karakterizasaun</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('risku.index') }}" class="nav-link {{ ($active === 'risku') ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Tipu Risku</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('atu.index') }}" class="nav-link {{ ($active === 'atu') ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Tipu Atu</p>
                  </a>
                </li>
                
              </ul>
            </li>

              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link {{ ($active === 'user') ? 'active' : '' }}">
                  <i class="fa fa-solid fa-user"></i>
                  <p>User</p>
                </a>
              </li>
          </ul>
        </li>
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link">
            <i class="fa fa-database"></i>
            <p>
              Dadus Proccess
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('pedidu.index') }}" class="nav-link {{ ($active === 'pedidu') ? 'active' : '' }}">
                <i class="fa fa-user"></i>
                <p>Pedidu</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item has-treeview ">
          <a href="#" class="nav-link">
            <i class="fa fa-database"></i>
            <p>
              Dadus Relatorio
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="relatoriu" class="nav-link {{ ($active === 'relatoriu') ? 'active' : '' }}">
                <i class="fa fa-user"></i>
                <p>Relatoriu</p>
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