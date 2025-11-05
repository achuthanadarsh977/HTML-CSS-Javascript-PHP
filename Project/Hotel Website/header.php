<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3" href="index.php">TJ Hotel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active me-2" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Rooms</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Facilities</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
        </ul>

        <div class="d-flex">
          <button class="btn btn-outline-dark shadow-none me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
          </button>
          <button class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
            Register
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="login.php">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel"><i class="bi bi-person-circle me-2"></i>User Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="email" required>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" required>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  
 <!-- Optional: Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">
          <i class="bi bi-person-plus me-2"></i>Register
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <!-- Registration Form -->
        <form id="registerForm">
          <div class="mb-3">
            <label for="regName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="regName" placeholder="Enter your name" required>
          </div>

          <div class="mb-3">
            <label for="regEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="regEmail" placeholder="Enter your email" required>
          </div>

          <div class="mb-3">
            <label for="regPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="regPassword" placeholder="Enter your password" required>
          </div>

          <div class="mb-3">
            <label for="regConfirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="regConfirmPassword" placeholder="Confirm your password" required>
          </div>

          <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
      </div>

      <div class="modal-footer">
        <p class="text-muted small">
          Already have an account?
          <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">Login here</a>
        </p>
      </div>

    </div>
  </div>
</div>
