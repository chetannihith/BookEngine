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
    <script src="./js/script.js" defer></script>

    <title>Member | BookEngine</title>
  </head>
  <body>
    <div class="container">
    <?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
    exit;
}


require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Retrieve form data
    $bookStoreName = $_POST["book_store_name"];
    $bookStoreOwnerName = $_POST["book_store_owner_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordConfirm = $_POST["passwordConfirm"];

    // Validate and sanitize the data
    // ...

    // Hash the password before storing it in the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if the passwords match
    if (password_verify($passwordConfirm, $hashedPassword)) {
        // Insert data into the member table
        $conn = OpenCon();

        $sql = "INSERT INTO member (book_store_name, book_store_owner_name, email, password) 
                VALUES ('$bookStoreName', '$bookStoreOwnerName', '$email', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success'>Member registered successfully!</div>";
        } else {
            echo "<div class='alert alert-danger'>Error registering member: " . $conn->error . "</div>";
        }

        $conn->close();
    } else {
        echo "<div class='alert alert-danger'>Passwords do not match</div>";
    }
}
?>

      <div class="row">
        <div class="mx-auto mt-2 text-center">
          <img src="./img/booklogo.png" width="4%" alt="Logo Barber" />
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-6">
          <img
            class="img-register img-fluid"
            src="./img/img4.svg"
            width="450px"
            alt="Register Image"
          />
        </div>
        <div class="col-md-6 mt-3">
          <div class="card shadow-sm p-3">
            <div class="card-body">
              <h4>Sign Up Member</h4>
              <p class="text-muted">Register to get more buyers!</p>
              <form action="member.php" class="mt-4" method="post">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Book Store Name"
                    name="book_store_name"
                  />
                </div>
                <div class="form-group mt-2">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Book Store Owner Name"
                    name="book_store_owner_name"
                  />
                </div>
                <div class="form-group mt-2">
                  <input type="text" class="form-control" placeholder="Email" name="email" />
                </div>
                <div class="input-group mt-2">
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    id="password"
                    name = "password"
                  />
                  <div class="input-group-append">
                    <span class="input-group-text" onclick="displayPassword()">
                      <i id="display-pass" data-feather="eye"></i>
                      <i id="hiden-pass" data-feather="eye-off"></i>
                    </span>
                  </div>
                </div>
                <div class="input-group mt-2">
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Confirm Password"
                    id="passwordConfirm"
                    name="passwordConfirm"
                  />
                  <div class="input-group-append">
                    <span
                      class="input-group-text"
                      onclick="displayPasswordConfirm()"
                    >
                      <i id="display-passConfirm" data-feather="eye"></i>
                      <i id="hiden-passConfirm" data-feather="eye-off"></i>
                    </span>
                  </div>
                </div>
                <div class="d-grid gap-2">
                  <button
                    class="btn btn-primary mt-2 btn-color-theme"
                    type="submit"
                    name="submit"
                  >
                    Submit
                  </button>
                  <p class="text-center">
                    Already have an account?
                    <a class="text-theme" href="login.php">Sign In</a>
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://unpkg.com/feather-icons"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <script>
      feather.replace();
    </script>
  </body>
</html>
