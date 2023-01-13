<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- External Css -->
    <link rel="icon" href="img/smk.png">
    <title>PPBD Online SMK Ma'arif NU Paguyangan</title>
  </head>
  <body>
    <section style="background-color : rgb(143, 188, 144)">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5 text-center">
          <img class="mb-2" src="img/smk.png" alt="logo">
          <p class="fw-bolder text-white text-center fs-5 text-uppercase">DASHBOARD ADMIN PPDB SMKN 1 MA'ARIF NU PAGUYANGAN</p>
            <div class="card bg-secondary text-white" style="border-radius: 1rem">
              <div class="card-body p-5 text-center">
                <div class="mb-md-3 pb-5">
                  <h4 class="fw-bold mb-2 text-uppercase">Login</h4>
                  <p class="text-white-50 mb-4">Masuk mengunakan Username dan Password</p>
                  <form name="login" action="index.php" method="GET">
                    <div class="form-outline form-white mb-3">
                      <!-- <label class="form-label" for="typeEmailX">Email</label> -->
                      <input type="text" name="id_admin" id="username" class="form-control form-control-lg text-center" placeholder="Username"  required/>
                    </div>
                    <div class="form-outline form-white mb-3">
                      <!-- <label class="form-label" for="typePasswordX">Password</label> -->
                      <input type="password" name="password" id="password" class="form-control form-control-lg text-center" placeholder="Password" required/>
                    </div>
                    <Button class="btn btn-outline-light btn-lg px-5" name="login" type="submit">LOGIN</Button>
                    <footer class="pt-3">SMK Ma'arif NU Paguyangan &copy; 2023</footer>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>