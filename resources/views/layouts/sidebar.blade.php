  <aside
      class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
      id="sidenav-main"
  >
      <div class="sidenav-header">
          <i
              class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
              aria-hidden="true"
              id="iconSidenav"
          ></i>
          <a
              class="navbar-brand m-0"
              href="{{ url('/') }}"
          >
              <img
                  src="{{ asset('images/logo.png') }}"
                  class="navbar-brand-img h-100"
                  alt="main_logo"
              >
              <span class="ms-1 font-weight-bold text-white"></span>
          </a>or
      </div>
      <hr class="horizontal light mt-0 mb-2">
      <div
          class=" "
          id="sidenav-collapse-main"
      >
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a
                      class="nav-link text-white {{ Request::is('dashboard') ? 'active  bg-gradient-primary' : '' }}"
                      href="{{ url('dashboard') }}"
                  >
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">dashboard</i>
                      </div>
                      <span class="nav-link-text ms-1">Dashboard</span>
                  </a>
              </li>
              <li class="nav-item ">
                  <a
                      class="nav-link text-white {{ Request::is('users') ? 'active  bg-gradient-primary' : '' }}"
                      href="{{ url('/users') }}"
                  >
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i
                              class="fa fa-user"
                              aria-hidden="true"
                          ></i>
                      </div>
                      <span class="nav-link-text ms-1">Users</span>
                  </a>
              </li>

              <li class="nav-item ">
                  <a
                      class="nav-link text-white {{ Request::is('categories') ? 'active  bg-gradient-primary' : '' }}"
                      href="{{ url('/categories') }}"
                  >
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class='fas fa-shopping-basket'></i>
                      </div>
                      <span class="nav-link-text ms-1">Category</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a
                      class="nav-link text-white {{ Request::is('add-category') ? 'active  bg-gradient-primary' : '' }}"
                      href="{{ url('add-category') }}"
                  >
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i
                              class="fa fa-plus"
                              aria-hidden="true"
                          ></i>
                      </div>
                      <span class="nav-link-text ms-1">Add Category</span>
                  </a>
              </li>
              <li class="nav-item ">
                  <a
                      class="nav-link text-white {{ Request::is('portfolios') ? 'active  bg-gradient-primary' : '' }}"
                      href="{{ url('/portfolios') }}"
                  >
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i
                              class="fa fa-product-hunt"
                              aria-hidden="true"
                          ></i>

                          {{-- <i class="material-icons opacity-10">table_view</i> --}}
                      </div>
                      <span class="nav-link-text ms-1">Portfolio</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a
                      class="nav-link text-white {{ Request::is('add-portfolio') ? 'active  bg-gradient-primary' : '' }}"
                      href="{{ url('add-portfolio') }}"
                  >
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i
                              class="fa fa-plus"
                              aria-hidden="true"
                          ></i>
                      </div>
                      <span class="nav-link-text ms-1">Add Portfolio</span>
                  </a>
              </li>
          </ul>
      </div>
  </aside>
