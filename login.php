 <?php
session_start();

// If already logged in, redirect to view_feedback
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: view_feedback.php");
    exit;
}

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Set admin login credentials (change for your school)
    $valid_username = "admin";
    $valid_password = "12345";

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['logged_in'] = true;
        header("Location: view_feedback.php");
        exit;
    } else {
        $error = "⚠️ Username au password si sahihi!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Admin Access</title>
    <style>
        body {
            font-family: Arial;
            background: #eef;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 8px;
            margin-top: 8px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type=submit] {
            width: 100%;
            padding: 8px;
            background: #333;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type=submit]:hover {
            background: #555;
        }
        .error {
            color: red;
            font-size: 13px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h2>Admin Login</h2>
        <?php if (!empty($error)) echo "<div class='error'>$error</div>"; ?>
        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password"name="password" required>

        <input type="submit" value="Login">
    </form>
</body>
</html>
