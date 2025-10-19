<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .welcome-container {
            animation: slideIn 0.5s ease-out;
            backdrop-filter: blur(10px);
            max-width: 500px;
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
        .card {
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2) !important;
        }
        h2 {
            color: #11998e;
            font-weight: 700;
            margin-bottom: 30px;
            text-align: center;
        }
        .welcome-text {
            font-size: 2rem;
            color: #0d7a6f;
            font-weight: 700;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 40px;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>
    <div class="container welcome-container mt-5">
        <div class="card bg-white p-5 rounded-4 shadow-lg">
            <!-- <h2>Welcome Page</h2> -->
            <div class="welcome-text">
                WELCOME <?php
                    $name = '';
                    if (isset($_SESSION['name'])) {
                        $name = $_SESSION['name'];
                    } elseif (isset($_GET['name'])) {
                        $name = $_GET['name'];
                    } elseif (isset($_POST['name'])) {
                        $name = $_POST['name'];
                    }

                    echo htmlspecialchars($name) ?: '';
                ?>
            </div>
        </div>
    </div>
</body>
</html>
