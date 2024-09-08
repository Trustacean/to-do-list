<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>TO DO List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">LOGIN TODO LIST</h1>
        <form action="/" method="post">
          <?= csrf_field() ?>
          <div class="input-group mb-3">
            <div class="row">
              <label for="kegiatan" class="">Masukkan Username : </label>
            </div>
            <input type="text" class="form-control" name="username" id="username" value="" placeholder="Username" aria-label="Username"
              aria-describedby="button-addon2">
            </div>            
            <div class="row">
              <label for="kegiatan" class="">Masukkan Password : </label>
            </div>
            <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" aria-label="Password"
              aria-describedby="button-addon2">
            </div>
          </div>
            <button class="btn btn-outline-primary mt-3" type="submit" id="button-addon2">Login</button>
        </form>
        <a href="/register" class="btn btn-outline-primary mt-3">Register</a>
      </div>
    </div>
  </div>
</body>

</html>
