<!-- Navigasi -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger fs-6 navigasi fixed-top">
    <div class="container">
      <a class="navbar-brand bg-light p-2 rounded" href="#">
        <img src="img/logo ahm.svg" style="width: 4.5rem;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto text-capitalize" style="font-weight: bold;">
          <li class="nav-item">
            <a class="{{ request()->is('/') ? 'nav-link active' : 'nav-link'}}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              product
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="{{ request()->is('matic') ? 'nav-link active bg-danger fw-bold' : 'nav-link fw-normal text-dark'}} dropdown-item border-bottom" href="/matic">matic</a></li>
              <li><a class="{{ request()->is('sport') ? 'nav-link active bg-danger fw-bold' : 'nav-link fw-normal text-dark'}} dropdown-item border-bottom" href="/sport">sport</a></li>
              <li><a class="{{ request()->is('cub') ? 'nav-link active bg-danger fw-bold' : 'nav-link fw-normal text-dark'}} dropdown-item border-bottom" href="/cub">cub</a></li>
              <li><a class="{{ request()->is('ev') ? 'nav-link active bg-danger fw-bold' : 'nav-link fw-normal text-dark'}} dropdown-item" href="/ev">ev</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('promo') ? 'nav-link active' : 'nav-link'}}" href="/promo">promo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('dealer') ? 'nav-link active' : 'nav-link'}}" href="/dealer">dealer</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              after sales
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item border-bottom" href="#">service</a></li>
              <li><a class="dropdown-item border-bottom" href="#">honda genuine parts</a></li>
              <li><a class="dropdown-item border-bottom" href="#">ban HGP</a></li>
              <li><a class="dropdown-item border-bottom" href="#">AHM OIL</a></li>
              <li><a class="dropdown-item border-bottom" href="#">honda genuine accessories</a></li>
              <li><a class="dropdown-item" href="#">honda apparel</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              corporate
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="{{ request()->is('corporate') ? 'nav-link active bg-danger fw-bold' : 'nav-link fw-normal text-dark'}} dropdown-item border-bottom" href="/corporate">about us</a></li>
              <li><a class="{{ request()->is('https://www.astra-honda.com/corporate-social-responsibility') ? 'nav-link active bg-danger fw-bold' : 'nav-link fw-normal text-dark'}} dropdown-item border-bottom" href="https://www.astra-honda.com/corporate-social-responsibility">sustainability</a></li>
              <li><a class="{{ request()->is('karir') ? 'nav-link active bg-danger fw-bold' : 'nav-link fw-normal text-dark'}} dropdown-item" href="/karir">karir</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navigasi -->