<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="appointment.css?v=<?php echo time(); ?>">

    <title>Appointment</title>
  </head>
  <body class="m-auto p-4">
    <h1 class="text-center">Login</h1>

    <div class="row mt-5 btn-row">
      <div class="col-sm-4">
        <div class="card bg-primary">
          <a href="admin.php" class="card-body">
            <h5 class="card-title text-white text-center">Admin</h5>
          </a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card bg-success">
          <a href="admin.php" class="card-body">
            <h5 class="card-title text-white text-center">Residents</h5>
          </a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card bg-warning">
          <a href="admin.php" class="card-body">
            <h5 class="card-title text-white text-center">Baranggay Officials</h5>
          </a>
        </div>
      </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
