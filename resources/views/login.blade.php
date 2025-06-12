<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/styles/login.css">
</head>

<body>
    @if (session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK'
            });
        });
    </script>
@endif
  <div class="login-page">
    <div class="banner-image">
      <img src="assets/img/banner-img.png" alt="">
    </div>
    <div class="login-container">
      <div class="daftar-button">
        <a href="/daftar"><button class="btn btn-light w-25 fs 10" type="button">Daftar</button></a>
      </div>
      <div class="wrapper">

          <h1>Selamat Datang !</h1>
          <h2>Login Sekarang</h2>
          <p>Belum punya akun? <a href="daftar.html">Daftar</a></p>
          <form action="/login" method="post">
            @csrf

            <div class="input-email mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m0 4l-8 5l-8-5V6l8 5l8-5z" />
                </svg>
                <label for="username">Alamat Email</label>
                <div class="username">
                    <div class="input-group flex-nowrap">
                        <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" required>
                    </div>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="input-password mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M12 17a2 2 0 0 0 2-2a2 2 0 0 0-2-2a2 2 0 0 0-2 2a2 2 0 0 0 2 2m6-9a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V10a2 2 0 0 1 2-2h1V6a5 5 0 0 1 5-5a5 5 0 0 1 5 5v2zm-6-5a3 3 0 0 0-3 3v2h6V6a3 3 0 0 0-3-3" />
                </svg>
                <label for="password">Password</label>
                <div class="password">
                    <div class="input-group flex-nowrap">
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping" required>
                    </div>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="button">
                <button class="btn btn-danger w-25 fs-10" type="submit">Login</button>
            </div>
        </form>

      </div>
      <div class="atau">
        <p>Atau</p>
      </div>
      <div class="login-button">
        <div class="login-google">
          <button class="btn btn-light w-100 fs 6" type="submit"> <img src="assets/img/logo-google.png"
              style="width: 20px;" class="me-4">Login dengan Google</button>
        </div>
        <div class="login-facebook">
          <button class="btn btn-light w-100 fs 6" type="submit"> <img src="assets/img/logo-facebook.png"
              style="width: 20px;" class="me-4">Login dengan Facebook</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
