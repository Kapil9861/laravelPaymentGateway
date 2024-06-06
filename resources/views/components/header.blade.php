<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a href="{{ route('home') }}" class="d-flex align-items-center">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid mx-4" style="max-width: 60px;">
      <span class="navbar-brand mx-4" style="color: whitesmoke; font-weight: bold; font-size:x-large;">The Designers</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item mx-5">
          <a class="nav-link active" aria-current="page" href="{{ route('designs') }}">Designs</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link" href="{{ route('privacy') }}">Privacy Policy</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link" href="{{ route('aboutUs') }}">About Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>