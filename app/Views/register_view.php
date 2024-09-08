<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">REGISTER</h1>
                <form action="/register" method="post">
                    <?= csrf_field() ?>
                    <div class="input-group mb-3">
                        <div class="row">
                            <label for="username" class="">Username :</label>
                        </div>
                        <input type="text" class="form-control" name="username" id="username" value="" placeholder="Username" aria-label="Username"
                            aria-describedby="button-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <div class="row">
                            <label for="password" class="">Password :</label>
                        </div>
                        <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" aria-label="Password"
                            aria-describedby="button-addon2">
                    </div>
                    <button class="btn btn-primary" type="submit" id="button-addon2">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>