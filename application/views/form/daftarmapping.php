<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validator</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap');

* {
    box-sizing: border-box;
}

:root {
    --success-color: #2ecc71;
    --error-color: #e74c3c;
    --checkmark-color: #43b324;
}

body {
    background-color: #f9f8fb;
    font-family: 'Poppins',
        sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    padding: 120px;
}

.container {
    background-color: #fff;
    border-radius: 20px;
    box-shadow: 0 15px 16.83px 0.17px rgba(0, 0, 0, .05);
    -webkit-box-shadow: 0 15px 16.83px 0.17px rgba(0, 0, 0, .05);
    width: 900px;
    max-width: 1200px;
    padding: 30px;
    display: flex;
}

h2 {
    font-size: 36px;
    font-weight: 700;
    color: #222;
    margin: 0 0 30px;

}

.column1,
.column2 {
    width: 50%;
}

.column2 .signup-image {
    max-width: 110%;
}

.column2 {
    display: flex;
    justify-content: center;
    align-items: center;
}

.form {
    padding: 30px 50px;
}

.form-control {
    margin-bottom: 10px;
    padding-bottom: 25px;
    position: relative;
}

.form-control label {
    color: #333;
    display: block;
    margin-bottom: 5px;
}

.form-control input {
    font-family: 'Poppins',
        sans-serif;
    border: 1px solid #e6e6e6;
    border-radius: 4px;
    display: block;
    width: 100%;
    padding: 10px;
    font-size: 14px;
}

.form-control:after {
    content: '\2713';
    font-size: 1.5rem;
    opacity: 0;
    color: var(--checkmark-color);
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-30%);
    transition: all ease .4s;
}

.form-control input:focus {
    outline: none;
    border-color: #777;
}

.form-control.success input {
    border-color: var(--success-color);
}

.form-control.error input {
    border-color: var(--error-color);
}

.form-control.success:after {
    opacity: 1;
    transform: translateY(-50%);
}

.form-control small {
    color: var(--error-color);
    position: absolute;
    bottom: 0;
    left: 0;
    visibility: hidden;
}

.form-control.error small {
    visibility: visible;
}

button {
    cursor: pointer;
    background: #6dabe4;
    border: none;
    border-radius: 5px;
    color: #fff;
    display: inline-block;
    font-size: 16px;
    padding: 15px 39px;
    margin-top: 20px;
    transition: all ease .25s;
}

button:hover {
    background: #4292dc;
}

@media screen and (max-width: 960px) {

    body {
        padding: 80px;
    }

    .container {
        flex-direction: column;
    }

    .column1,
    .column2 {
        width: auto;
    }
}

@media screen and (max-width: 600px) {

    body {
        padding: 10px;
    }

    h2 {
        font-size: 25px;
    }

    .form-control input {
        font-size: 12px;
        padding: 5px;
    }

    button {
        padding: 10px 25px;
        font-size: 14px;
    }

    .form {
        padding: 30px 20px;
    }

    .form-control {
        margin-bottom: 5px;
        padding-bottom: 15px;
    }
}
    </style>

</head>

<body>
    <div class="container">
        <div class="column1">
        <form action="<?= base_url('home/registration'); ?>" enctype="multipart/form-data" method="POST">
                <h2>Daftar</h2>
                
                <div class="form-control">
                    <label for='username'>Username</label>
                    <input type="text" class="form-control " name="nama" value="<?= set_value('nama'); ?>" placeholder="Exaulia..">
                    <small>Error message</small>
                    <small style="color: red;"><?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?></small>
                </div>
                <div class="form-control">
                    <label for='username'>Jabatan Saat ini</label>
                    <input type="text" class="form-control " name="sekolah" value="<?= set_value('jabatan'); ?>" placeholder="Ex.Guru.....">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for='email'>Email</label>
                    <input type="email" class="form-control " name="email" value="<?= set_value('email'); ?>" placeholder="example@gmail.com">
                    <small>Error message</small>
                    <small style="color: red;"><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?></small>
                </div>
                <div class="form-control">
                    <label for='password'>Password</label>
                    <input type="password" class="form-control " name="password1" placeholder="*********">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for='password2'>Confirm Password</label>
                    <input type="password" class="form-control " name="password2" placeholder="*********">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for='password2'>image Profile</label>
                    <input type="file" class="form-control " name="image" value="<?= set_value('image'); ?>" placeholder="experhutanan">
                    <small>Error message</small>
                </div>
                <button type="submit" data-text="Go Pemetaan">
                    <span>Register</span>
                </button>

            </form>
            <a href="<?= base_url('home/login') ?>" style="float:right;">Sudah Daftar</a>
        </div>
        <div class="column2">
    
          <img src="https://i.ibb.co/k5NNz4F/pablo-sign-up.png" alt="pablo-sign-up" border="0" class='signup-image'>
        </div>

    </div>
    <script>
      const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");

function showError(input, message) {
  const formControl = input.parentElement;
  formControl.className = "form-control error";
  let small = formControl.querySelector("small");
  small.innerText = message;
}

function showSuccess(input) {
  const formControl = input.parentElement;
  formControl.className = "form-control success";
}

function checkEmail(input) {
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (re.test(input.value)) {
    showSuccess(input);
  } else {
    showError(input, "Email is not valid");
  }
}

function checkRequired(inputArr) {
  inputArr.forEach(function(input) {
    if (input.value === "") {
      showError(input, `${getFieldName(input)} is required`);
    } else {
      showSuccess(input);
    }
  });
}

function checkPasswordsMatch(password1, password2) {
  if (password1.value !== password2.value) {
    showError(password2, "Password do not match");
  }
}

function checkLength(input, min, max) {
  if (input.value.length <= min) {
    showError(
      input,
      `${getFieldName(input)} must be more than ${min} characters`
    );
  } else if (input.value.length >= max) {
    showError(
      input,
      `${getFieldName(input)} must be less than ${max} characters`
    );
  } else {
    showSuccess(input);
  }
}

function getFieldName(input) {
  return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

form.addEventListener("submit", function(e) {
  e.preventDefault();

  checkRequired([username, email, password, password2]);
  checkLength(username, 3, 15);
  checkLength(password, 6, 25);
  checkEmail(email);
  if (password2.value !== "") {
    checkPasswordsMatch(password, password2);
  }
});

    </script>
</body>

</html>