<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>
<section class="vh-100" style="background-image: url('img/bg.jpg'); background-size: cover;">
  <div class="container py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-6 w-50">
        <div class="card justify-content-center" style="border-radius: 1rem; background-color: #1F1F1F; width: 546px; height: 636px;">
          <div class="row g-0">
            <div class="col-md-12 col-lg-12 d-flex align-items-center">
              <div class="card-body p-2 p-lg-5 text-black">

                <form class="justify-content-center">

                <h1 class="text-center mb-5">Masuk</h1>

                  <div class="form-outline mb-4">
                    <label class="" for="email">Email</label>
                    <input type="email" id="form2Example17" class="form-control form-control-lg" placeholder="Email Address" />
                  </div>

                  <div class="form-outline mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="form2Example27" class="form-control form-control-lg" placeholder="Password" />
                  </div>

                  <a class="" href="#!" style="color: #70AFE9">Lupa password?</a></br></br>

                  <div class="pt-1 mb-4 text-center">
                    <a href="index.php?p=indexmember"><button class="btn btn-dark btn-lg rounded-pill" type="button" style="background-color: #113250; width: 170px; height: 50px;">Masuk</button></a>
                  </div>

                  <div class="text-center">
                    <p class="mb-5 pb-lg-2" style="color: #ffffff;">Belum punya akun? <a href="index.php?p=register"
                      style="color: #70AFE9;">Daftar disini</a></p>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>