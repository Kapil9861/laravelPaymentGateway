<style>
  .navbar-nav .nav-link:hover {
            color: #a28af0 !important;
            box-shadow: 0 0 10px #ffcc00; /* Glow effect */
            animation: bounce 0.5s; 
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a href="{{ route('home') }}" class="d-flex align-items-center">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid mx-3" style="max-width: 60px;">
      <span class="navbar-brand mx-4" style="color: whitesmoke; font-weight: bold; font-size:x-large;">The Designers</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item mx-5 my-2 my-lg-0">
          <a class="nav-link active" style="color: whitesmoke; font-weight: bold; font-size:large;" aria-current="page" href="{{ route('designs') }}">Designs</a>
        </li>
        <li class="nav-item mx-5 my-2 my-lg-0">
          <a class="nav-link" style="color: whitesmoke; font-weight: bold; font-size:large;" href="{{ route('privacy') }}">Privacy Policy</a>
        </li>
        <li class="nav-item mx-5 my-2 my-lg-0">
          <a class="nav-link" style="color: whitesmoke; font-weight: bold; font-size:large;" href="{{ route('aboutUs') }}">About Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>