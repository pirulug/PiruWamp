        <!-- NavBar-->
        <nav class="navtop">
          <a class="sidebar-toggle js-sidebar-toggle">
            <i class="hamburger align-self-center"></i>
          </a>
          <div class="d-none d-sm-inline-block ms-3">
            <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">
              <i class="bi bi-broadcast me-1"></i> Servidor Online (piruwam.localhost)
            </span>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">
              <li class="nav-item">
                <a class="nav-icon" id="fullscreen-btn" href="#" title="Pantalla Completa">
                  <i class="bi bi-fullscreen"></i>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-icon dropdown-toggle"
                  id="bd-theme"
                  type="button"
                  aria-expanded="false"
                  data-bs-toggle="dropdown"
                  aria-label="Toggle theme (auto)"
                >
                  <span class="theme-icon-active" id="bd-theme-icon"></span>
                  <span class="visually-hidden" id="bd-theme-text">Alternar tema</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme-text">
                  <li>
                    <button
                      class="dropdown-item d-flex align-items-center"
                      type="button"
                      data-bs-theme-value="light"
                    >
                      <i class="bi bi-sun-fill opacity-50 me-2"></i>
                      Claro
                    </button>
                  </li>
                  <li>
                    <button
                      class="dropdown-item d-flex align-items-center"
                      type="button"
                      data-bs-theme-value="dark"
                    >
                      <i class="bi bi-moon-stars-fill opacity-50 me-2"></i>
                      Oscuro
                    </button>
                  </li>
                  <li>
                    <button
                      class="dropdown-item d-flex align-items-center"
                      type="button"
                      data-bs-theme-value="auto"
                    >
                      <i class="bi bi-circle-half opacity-50 me-2"></i>
                      Auto
                    </button>
                  </li>
                </ul>
              </li>
              <li class="nav-item ms-2">
                <a class="btn btn-sm btn-primary" href="<?= $pmaUrl ?>" target="_blank">
                  <i class="bi bi-database me-1"></i> phpMyAdmin
                </a>
              </li>
            </ul>
          </div>
        </nav>
