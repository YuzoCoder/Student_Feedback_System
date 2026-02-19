<?php
session_start();

// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "student_feedback";
$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$gender            = $_POST['gender'] ?? null;
$class             = $_POST['class'] ?? null;
$rating            = $_POST['rating'] ?? null;
$feeling           = $_POST['feeling'] ?? null;
$sad_reason        = $_POST['sad_reason'] ?? null;
$join_again        = $_POST['join_again'] ?? null;
$no_join_reason    = $_POST['no_join_reason'] ?? null;
$enjoy_session     = $_POST['enjoy_session'] ?? null;

// Checkbox (array → string)
$enjoyed_parts     = isset($_POST['enjoyed_parts']) ? implode(", ", $_POST['enjoyed_parts']) : null;

$not_enjoy_reason  = $_POST['not_enjoy_reason'] ?? null;
$usage_frequency   = $_POST['usage_frequency'] ?? null;
$home_tools        = $_POST['home_tools'] ?? null;

// Angalia kama student amechagua "Hakuna kifaa"
if (!empty($_POST['home_tools_none']) && $_POST['home_tools_none'] === "❌ Hakuna Kifaa") {
    $home_tools = "❌ Hakuna Kifaa";
} else {
    // Kama amechagua vifaa vingine
    $home_tools = isset($_POST['home_tools']) ? implode(", ", $_POST['home_tools']) : null;
}

$home_usage        = $_POST['home_usage'] ?? null;
$fav_subject       = $_POST['fav_subject'] ?? null;
$comfort_level     = $_POST['comfort_level'] ?? null;
$comfort_reason    = $_POST['comfort_reason'] ?? null;
$teachers_support  = $_POST['teachers_support'] ?? null;
$parents_support   = $_POST['parents_support'] ?? null;
$helpfulness       = $_POST['helpfulness'] ?? null;
$additional_share  = $_POST['additional_share'] ?? null;
$extra_thoughts    = $_POST['extra_thoughts'] ?? null;

// Prepare query
$sql = "INSERT INTO feedback 
    (gender, class, rating, feeling, sad_reason, join_again, no_join_reason, enjoy_session, enjoyed_parts, not_enjoy_reason, usage_frequency, home_tools, home_usage, fav_subject, comfort_level, comfort_reason, teachers_support, parents_support, helpfulness, additional_share, extra_thoughts) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("SQL Error: " . $conn->error);
}

$stmt->bind_param(
    "ssissssssssssssssssss",
    $gender, $class, $rating, $feeling, $sad_reason, $join_again, $no_join_reason,
    $enjoy_session, $enjoyed_parts, $not_enjoy_reason, $usage_frequency,
    $home_tools, $home_usage, $fav_subject, $comfort_level, $comfort_reason,
    $teachers_support, $parents_support, $helpfulness, $additional_share, $extra_thoughts
);

if ($stmt->execute()) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Feedback Success</title>
        <style>
            body {
                background-color: #eef;
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                text-align: center;
            }
            .message {
                background: #fff;
                padding: 40px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.2);
                font-size: 20px;
                color: #2e7d32;
            }
        </style>
        <script>
            // Automatically redirect after 3 seconds
            setTimeout(function(){
                window.location.href = "index.php";
            }, 3000);
        </script>
    </head>
    <body>
        <div class="message">
            ✅ Feedback submitted successfully!<br>
        </div>
    </body>
    </html>
    <?php
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

