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
        <h1 class="text-center">APLIKASI TO-DO LIST</h1>
        <a href="/logout" class="btn btn-outline-primary mt-3">Logout</a>
        <form action="/todo" method="post">
          <?= csrf_field() ?>
          <div class="input-group mb-3">
            <div class="row">
              <label for="kegiatan" class="">Masukkan Kegiatan :</label>
            </div>
            <input type="text" class="form-control" name="kegiatan" id="kegiatan" value="" placeholder="Add a new task" aria-label="Add a new task"
              aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add</button>
          </div>
        </form>
        <div>
          <h2>TO DO</h2>
          <ul class="list-group">
            <?php foreach($todos as $todo): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <div>
                <div class="fw-bold"><?= $todo['kegiatan'] ?></div>
                <div class="text-muted fst-italic">Created at <?= $todo['tanggal'] ?></div>
              </div>
              <div>
                <a href="/update/<?= $todo['idkegiatan'] ?>" class="btn btn-success">Done</a>
                <a href="/delete/<?= $todo['idkegiatan'] ?>" class="btn btn-danger">Delete</a>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>
</html>