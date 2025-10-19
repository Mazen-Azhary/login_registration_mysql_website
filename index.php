<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1</title>
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
    <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
    <div class="container" style="max-width: 500px;">
        <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
            Invalid email or password. Please try again.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    <?php endif; ?>
    <form class="container mt-5 bg-white p-5 rounded-4 shadow-lg" style="max-width: 500px;"  method="POST" action="manageLogin.php" id="loginForm">
  <!-- Email input -->
     <h2>Login</h2>
  <div data-mdb-input-init class="form-outline mb-4">
    <label class="form-label text-dark fw-bold" for="form2Example1">Email address</label>
    <input type="text" id="form2Example1" name="email" class="form-control border-primary" placeholder="Enter your email" />
</div>
<!-- Password input -->
<div data-mdb-input-init class="form-outline mb-4">
    <label class="form-label text-dark fw-bold" for="form2Example2">Password</label>
    <input type="password" id="form2Example2" name="password" class="form-control border-primary" placeholder="Enter your password" />
  </div>

  <!-- Submit button -->
  <button type="submit" data-mdb-button-init id="signInBtn" data-mdb-ripple-init class="btn btn-primary btn-block mb-4 w-100 py-2 fw-bold">Sign in</button>
<div data-mdb-input-init class="form-outline mb-4">
    <label class="form-label text-dark fw-bold" for="form2Example1">Not Signed up? <a href="signup.php">Click here</a></label>
</div>
</form>

<script src="validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>