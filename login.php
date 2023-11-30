<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/loginReg.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="./js/script.js" defer></script>

    <title>Login | BookEngine</title>
  </head>
  <body>
    <div class="container">
      <?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
    exit;
}

// Include the db.php file to access the OpenCon() function
require_once "db.php";

if (isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = OpenCon(); // Open the database connection

    $sql = "SELECT * FROM signup WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($user) {
      if (password_verify($password, $user['password'])) {
            $_SESSION["user"] = $user['username']; // Set the 'user' session variable
            header("Location: index.php");
            exit;
        } else {
            echo "<div class='alert alert-danger'>Password does not match</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Username does not exist</div>";
    }

    $conn->close(); // Close the database connection
}
?>

      <div class="row">
        <div class="mx-auto mt-3 text-center">
          <img src="./img/booklogo.png" width="4%" alt="Logo Barber" />
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-7 mt-3 img-login">
          <img
            class="img-fluid"
            src="./img/img3.svg"
            width="600px"
            alt="Login
          Image"
          />
        </div>
        <div class="col-md-5 mt-3">
          <div class="card shadow-sm p-3">
            <div class="card-body">
              <h4>Sign In</h4>
              <p class="text-muted">Get the Best Book Here!</p>
              <form action="login.php" class="mt-4" method="post">
    <div class="form-group">
        <input
            type="text"
            class="form-control"
            placeholder="Username"
            name="username"
            id="username"
            autocomplete="off"
            required
        />
    </div>
    <div class="input-group mt-2">
        <input
            type="password"
            class="form-control"
            placeholder="Password"
            id="password"
            name="password"
            autocomplete="off"
            required
        />
        <div class="input-group-append">
            <span class="input-group-text" onclick="displayPassword()">
                <i id="display-pass" data-feather="eye"></i>
                <i id="hiden-pass" data-feather="eye-off"></i>
            </span>
        </div>
    </div>
    <div class="text-end mt-2">
        <small>
            <a class="text-theme" href="">Forgot Password ?</a>
        </small>
    </div>
    <div class="d-grid gap-2">
        <button
            class="btn mt-2 btn-color-theme"
            type="submit"
            name="login"
            id="login"
        >
            Sign In
        </button>
        <p class="text-center">
            Don't have an account yet?
            <a class="text-theme" href="./register.php">Sign Up</a>
        </p>
    </div>
</form>

            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/feather-icons"></script>

    <script>
      feather.replace();
    </script>
  </body>
</html>
