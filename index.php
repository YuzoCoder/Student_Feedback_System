<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Student Feedback System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            background: url('images/background.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h1 {
            color: white;
            font-size: 2.5rem;
            text-shadow: 1px 1px 5px rgba(0,0,0,0.7);
            margin-bottom: 40px;
            text-align: center;
        }
        .btn-container {
            display: flex;
            gap: 20px;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            font-size: 16px;
            background: rgba(0,0,0,0.75);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.3s;
        }
        .btn:hover {
            background: rgba(0,0,0,0.9);
        }
    </style>
</head>
<body>
    <h1>📋 Welcome to the Student Feedback System</h1>
    <div class="btn-container">
        <a href="feedback_form.html" class="btn">✏️ Submit Feedback</a>
        <a href="view_feedback.php" class="btn">👀 View Feedback</a>
    </div>
</body>
</html>
