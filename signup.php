<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        form {
            animation: slideIn 0.5s ease-out;
            backdrop-filter: blur(10px);
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .form-control {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #11998e;
            box-shadow: 0 0 0 0.2rem rgba(17, 153, 142, 0.25);
            transform: translateY(-2px);
        }
        
        .form-label {
            font-size: 14px;
            margin-bottom: 8px;
            color: #495057;
            letter-spacing: 0.5px;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            border: none;
            border-radius: 10px;
            padding: 14px;
            font-size: 16px;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(17, 153, 142, 0.4);
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(17, 153, 142, 0.6);
        }
        
        .btn-primary:active {
            transform: translateY(-1px);
        }
        
        a {
            color: #11998e;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 600;
        }
        
        a:hover {
            color: #0d7a6f;
            text-decoration: underline;
        }
        
        .form-outline {
            position: relative;
        }
        
        .shadow-lg {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2) !important;
        }
        
        h2 {
            color: #11998e;
            font-weight: 700;
            margin-bottom: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form class="container mt-5 bg-white p-5 rounded-4 shadow-lg" id="signUpform" method="POST" action="manageSignUp.php" style="max-width: 500px;">
  <h2>Sign Up</h2>
  
  <div data-mdb-input-init class="form-outline mb-4">
    <label class="form-label text-dark fw-bold" for="form2Example1" >Email address</label>
    <input type="text" id="form2Example1" name="signupemail" class="form-control border-primary signupemail" placeholder="Enter your email" />
</div>
  <div data-mdb-input-init class="form-outline mb-4">
    <label class="form-label text-dark fw-bold" for="form2Example1" >Name</label>
    <input type="text" id="form2Example1" name="Name" class="form-control border-primary name" placeholder="Enter your name" />
</div>

<div data-mdb-input-init class="form-outline mb-4">
    <label class="form-label text-dark fw-bold" for="Pw">Password</label>
    <input type="password" id="Pw" class="form-control border-primary pw1" name="pw1" placeholder="Create a password" />
  </div>
<div data-mdb-input-init class="form-outline mb-4">
    <label class="form-label text-dark fw-bold" for="repeatPw">Repeat Password</label>
    <input type="password" id="repeatPw" class="form-control border-primary pw2" placeholder="Confirm your password" />
  </div>


  <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4 w-100 py-2 fw-bold">Sign Up</button>
<label class="form-label text-dark fw-bold">Already Signed up? <a href="index.php">Click here</a></label>
</form>

<script src="validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>