<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
      <div class="col-md-5">
        <div class="card shadow-sm">
          <div class="card-body p-4">
            <h4 class="text-center mb-4">Login</h4>
            <form action="welcome.php" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Masukkan username" required autofocus>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="********" placeholder="" required>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-success" name="login">Sign In</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>