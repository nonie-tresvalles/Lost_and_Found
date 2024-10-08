<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>

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
      align-items: center; /* Center vertically */
      justify-content: center; /* Center horizontally */
      background-color: #0A2558;
    }

    .form {
      max-width: 430px; /* Maximum width */
      width: 100%; /* Full width */
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

    /* Button styles for Sign Up */
    .field a.button {
      display: inline-block; /* Makes the link behave like a button */
      height: 100%; /* Ensures it fills the height of the parent */
      width: 100%; /* Ensures it fills the width of the parent */
      text-align:center; /* Centers the text */
      padding-top: 10px;
      color: #fff; /* Text color */
      background-color: #0A2558; /* Background color */
      border-radius: 6px; /* Rounded corners */
      transition: all 0.3s ease; /* Smooth transition for hover effect */
      text-decoration: none; /* Removes underline from the link */
    }

    .field a.button:hover {
      background-color: #081D45; /* Hover background color */
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

    .login-link {
      text-align: center;
      margin-top: 20px;
    }

    .login-link span {
      font-size: 14px;
      color: #232836;
    }

    .login-link a {
      font-size: 14px;
      color: #0A2558;
      text-decoration: none;
    }

    .login-link a:hover {
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
    <div class="form signup">
      <div class="form-content">
        <header>Sign Up</header>
        <form action="#">
          <div class="field input-field">
            <i class='bx bx-user icon'></i>
            <input type="text" placeholder="Full Name" class="input">
          </div>

          <div class="field input-field">
            <i class='bx bx-envelope icon'></i>
            <input type="email" placeholder="Email" class="input">
          </div>

          <div class="field input-field">
            <i class='bx bx-lock icon'></i>
            <input type="password" placeholder="Password" class="password" id="signup-password">
            <i class='bx bx-hide eye-icon' id="toggle-signup-password"></i>
          </div>

          <div class="field input-field">
            <i class='bx bx-lock icon'></i>
            <input type="password" placeholder="Confirm Password" class="password" id="confirm-password">
            <i class='bx bx-hide eye-icon' id="toggle-confirm-password"></i>
          </div>

          <div class="form-link">
            <input type="checkbox" id="terms">
            <label for="terms">I agree to the <a href="{{route('terms')}}">terms and conditions</a></label>
          </div>

          <div class="field button-field">
            <a href="{{route('login')}}"class="button">Sign Up</a>
          </div>
        </form>

        <!-- Login Link -->
        <div class="login-link">
          <span>Already have an account?</span>
          <a href="{{route('login')}}">Login</a>
        </div>
      </div>
    </div>
  </section>

  <!-- JavaScript -->
  <script>
    // Toggle password visibility for sign up and confirm password
    const toggleSignupPassword = document.querySelector("#toggle-signup-password");
    const signupPasswordField = document.querySelector("#signup-password");

    const toggleConfirmPassword = document.querySelector("#toggle-confirm-password");
    const confirmPasswordField = document.querySelector("#confirm-password");

    toggleSignupPassword.addEventListener("click", function () {
      const type = signupPasswordField.getAttribute("type") === "password" ? "text" : "password";
      signupPasswordField.setAttribute("type", type);
      this.classList.toggle("bx-show");
      this.classList.toggle("bx-hide");
    });

    toggleConfirmPassword.addEventListener("click", function () {
      const type = confirmPasswordField.getAttribute("type") === "password" ? "text" : "password";
      confirmPasswordField.setAttribute("type", type);
      this.classList.toggle("bx-show");
      this.classList.toggle("bx-hide");
    });
  </script>
</body>

</html>
