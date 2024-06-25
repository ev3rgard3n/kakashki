<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartTime</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="./images/login/login.gif"
          class="img-fluid rounded" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <div class="divider d-flex align-items-center my-4">
          <p class="text-center fw-bold mx-3 mb-0">Регистрация</p>
        </div>

        <form action="./vendor/registration.php" method="post">
          <div class="row">
                <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline">
                    <input type="text" id="form3Example1" name="firstname" class="form-control" />
                    <label class="form-label" for="form3Example1">Фамилия</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline">
                    <input type="text" id="form3Example2" name="secondname" class="form-control" />
                    <label class="form-label" for="form3Example2">Имя</label>
                  </div>
                </div>
              </div>

          <div data-mdb-input-init class="form-outline mb-4">
              <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"/>
              <label class="form-label" for="form3Example3">Email</label>
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-3">
              <input type="password" id="form3Example4" name="password" class="form-control form-control-lg"/>
              <label class="form-label" for="form3Example4">Пароль</label>
          </div>
          <div data-mdb-input-init class="form-outline mb-3">
              <input type="password" id="form3Example4" name="password2" class="form-control form-control-lg"/>
              <label class="form-label" for="form3Example4">Подтверждение пароля</label>
          </div>

          <!-- Submit button -->
          <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                  style="padding-left: 2.5rem; padding-right: 2.5rem;">Регистрация</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>