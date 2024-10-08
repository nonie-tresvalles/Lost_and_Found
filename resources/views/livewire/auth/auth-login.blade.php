<div>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Log In </title>

  <!-- CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- Boxicons CSS -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <style>
    /* Google Fonts - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    .container {
      height: 100vh;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #0A2558;
      column-gap: 30px;
    }

    .form {
      position: absolute;
      max-width: 430px;
      width: 100%;
      padding: 30px;
      border-radius: 10px;
      background: #FFF;
    }

    header {
      font-size: 28px;
      font-weight: 600;
      color: #232836;
      text-align: center;
    }

    form {
      margin-top: 30px;
    }

    .field {
      position: relative;
      height: 50px;
      width: 100%;
      margin-top: 20px;
      border-radius: 6px;
    }

    .field input {
      height: 100%;
      width: 100%;
      border: none;
      font-size: 16px;
      font-weight: 400;
      border-radius: 6px;
      outline: none;
      padding: 0 15px;
      border: 1px solid #CACACA;
      padding-left: 40px; /* Adjust for icons */
    }

    .field input:focus {
      border-bottom-width: 2px;
    }

    .icon {
      position: absolute;
      top: 50%;
      left: 10px;
      transform: translateY(-50%);
      font-size: 18px;
      color: #8b8b8b;
    }

    .eye-icon {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      font-size: 18px;
      color: #8b8b8b;
      cursor: pointer;
      padding: 5px;
    }

    .field .button-field {
      height: 50px; /* Ensure the button matches the input height */
    }

    .field a.button {
      color: #fff;
      background-color: #0A2558;
      height: 100%;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      font-size: 16px;
      font-weight: 400;
      border-radius: 6px;
      transition: all 0.3s ease;
    }

    .field a.button:hover {
      background-color: #081D45;
    }

    .form-link {
      text-align: left;
      margin-top: 10px;
      display: flex;
      align-items: center;
    }

    .form-link label {
      font-size: 14px;
      font-weight: 400;
      color: #232836;
      margin-left: 5px;
      cursor: pointer;
    }

    .form-link input[type="checkbox"] {
      accent-color: #0A2558; /* Checkbox color */
    }

    .register-link {
      text-align: center;
      margin-top: 20px;
    }

    .register-link span {
      font-size: 14px;
      color: #232836;
    }

    .register-link a {
      font-size: 14px;
      color: #0A2558;
      text-decoration: none;
    }

    .register-link a:hover {
      text-decoration: underline;
    }

    @media screen and (max-width: 400px) {
      .form {
        padding: 20px 10px;
      }
    }
  </style>
</head>

<body>
  <section class="container forms">
    <div class="form login">
      <div class="form-content">
        <header>Login</header>
        <form action="#">
          <div class="field input-field">
            <i class='bx bx-envelope icon'></i>
            <input type="email" placeholder="Email" class="input" required>
          </div>

          <div class="field input-field">
            <i class='bx bx-lock icon'></i>
            <input type="password" placeholder="Password" class="password" id="password" required>
            <i class='bx bx-hide eye-icon' id="toggle-password"></i>
          </div>

          <div class="form-link">
            <input type="checkbox" id="remember-password">
            <label for="remember-password">Remember password</label>
          </div>

          <div class="field button-field">
            <a href="{{route('dashboard')}}" class="button">Login</a>
          </div>
        </form>

        <!-- Register Link -->
        <div class="register-link">
          <span>Create account?</span>
          <a href="{{route('register')}}">Register</a>
        </div>
      </div>
    </div>
  </section>

  <!-- JavaScript -->
  <script>
    // Toggle password visibility
    const togglePassword = document.querySelector("#toggle-password");
    const passwordField = document.querySelector("#password");

    togglePassword.addEventListener("click", function () {
      const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
      passwordField.setAttribute("type", type);

      // Toggle the eye icon
      this.classList.toggle("bx-show");
      this.classList.toggle("bx-hide");
    });
  </script>
</body>

</html>
</div>
