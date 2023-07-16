<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-0 sidebar-sticky">
      <ul class="nav flex-column">
        <hr class="sidebar-divider mt-0">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <hr class="sidebar-divider">
        <li>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 my-1 text-muted">
            <span>DATA</span>
          </h6>
          <a class="nav-link dropdown-toggle {{ Request::is('dashboard/posts*') ? 'active' : '' }}" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample">
            <span data-feather="users"></span>
            Data Pengguna
          </a>
          <div class="collapse" id="collapse1">
            <div class="card card-body mx-3">
              <ul class="nav flex-column">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
                  <span>Fitur Data Pengguna :</span>
                </h6>
                <li class="nav-item">
                  <a class="nav-link" href="/users">Petugas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/members">Anggota</a>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="mt-2">
          <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample">
            <span data-feather="book"></span>
            Data Buku
          </a>
          <div class="collapse" id="collapse2">
            <div class="card card-body mx-3">
              <ul class="nav flex-column">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
                  <span>Fitur Data Buku :</span>
                </h6>
                <li class="nav-item">
                  <a class="nav-link" href="/book_categories">Kategori Buku</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/books">Daftar Buku</a>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <hr class="sidebar-divider">
        <li class="mt-2">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 my-1 text-muted">
            <span>PENGELOLAAN BUKU</span>
          </h6>
          <a class="nav-link {{ Request::is('/peminjaman') ? 'active' : '' }}" aria-current="page" href="/">
            <span data-feather="database" class="align-text-bottom"></span>
            Data Peminjaman
          </a>
        </li>
        <hr class="sidebar-divider">
        <li class="mt-2">
          <a class="nav-link {{ Request::is('users/edit_akun') ? 'active' : '' }}" aria-current="page" href="/users/edit_akun">
            <span data-feather="settings" class="align-text-bottom"></span>
            Pengaturan Akun
          </a>
        </li>
        <hr class="sidebar-divider">
      </ul>

      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Post Categories
          </a>
        </li>
      </ul>
      @endcan

    </div>
  </nav>