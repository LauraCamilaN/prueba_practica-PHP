        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
              <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <ul class="navbar-nav justify-content-end">
                  <li class="nav-item d-flex align-items-center">
                    <a href="#" class="nav-link text-body font-weight-bold px-0">
                      <form action="{{ route('logout') }}" method="POST">
                        @csrf
                      <button type="submit" class="btn btn-sm btn-primary">Cerrar Sesión</button>
                      </form>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->