<?php include 'security.php'; ?>
<a href="logout.php" style="float:right; background:#c00; color:white; padding:6px 12px; text-decoration:none; border-radius:4px;">Logout</a>
<?php include 'security.php'; ?>
<?php
// Connection settings
$host = "localhost";
$username = "root";
$password = "";
$database = "student_feedback";

// Connect to database
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM feedback ORDER BY submitted_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Feedback Zote</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        .table-container {
            overflow-x: auto;
            background: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        table {
            border-collapse: collapse;
            width: 100%;
            min-width: 1200px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
            font-size: 13px;
        }
        th {
            background: #333;
            color: white;
            position: sticky;
            top: 0;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
        a {
            display: inline-block;
            margin-bottom: 10px;
            text-decoration: none;
            padding: 8px 12px;
            background: #333;
            color: white;
            border-radius: 4px;
        }
        a:hover {
            background: #555;
        }

           h2 {
    color: #0b0c0eff;         /* 👈 black ya title */
    text-align: center;     /* 👈 katikati */
    margin-bottom: 20px;
    font-size: 30px;        /* 👈 ukubwa */
}


        table {
            width: 100%;
            background: white;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background: #333;
            color: white;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }
    </style>
</head>
<body>
    <h2>📋 Maoni Yaliyotumwa na Wanafunzi</h2>
    
    <a href="download_feedback.php">
    <button style="margin-top:10px; padding:10px; background:#28a745; color:white; border:none; border-radius:5px; cursor:pointer;">
        ⬇️ Download Feedback (CSV)
    </button>
</a>

    <div class="table-container">
        <table>
            <tr>
                <th>ID</th>
                <th>Gender</th>
                <th>Class</th>
                <th>Rating</th>
                <th>Feeling</th>
                <th>Sad Reason</th>
                <th>Join Again</th>
                <th>No Join Reason</th>
                <th>Enjoy Session</th>
                <th>Enjoyed Parts</th>
                <th>Not Enjoy Reason</th>
                <th>Usage Frequency</th>
                <th>Home Tools</th>
                <th>Home Usage</th>
                <th>Fav Subject</th>
                <th>Comfort Level</th>
                <th>Comfort Reason</th>
                <th>Teachers Support</th>
                <th>Parents Support</th>
                <th>Helpfulness</th>
                <th>Additional Share</th>
                <th>Extra Thoughts</th>
                <th>Submitted At</th>
            </tr>

            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['gender'] ?></td>
                        <td><?= $row['class'] ?></td>
                        <td><?= $row['rating'] ?>/5</td>
                        <td><?= $row['feeling'] ?></td>
                        <td><?= $row['sad_reason'] ?></td>
                        <td><?= $row['join_again'] ?></td>
                        <td><?= $row['no_join_reason'] ?></td>
                        <td><?= $row['enjoy_session'] ?></td>
                        <td><?= $row['enjoyed_parts'] ?></td>
                        <td><?= $row['not_enjoy_reason'] ?></td>
                        <td><?= $row['usage_frequency'] ?></td>
                        <td><?= $row['home_tools'] ?></td>
                        <td><?= $row['home_usage'] ?></td>
                        <td><?= $row['fav_subject'] ?></td>
                        <td><?= $row['comfort_level'] ?></td>
                        <td><?= $row['comfort_reason'] ?></td>
                        <td><?= $row['teachers_support'] ?></td>
                        <td><?= $row['parents_support'] ?></td>
                        <td><?= $row['helpfulness'] ?></td>
                        <td><?= $row['additional_share'] ?></td>
                        <td><?= $row['extra_thoughts'] ?></td>
                        <td><?= $row['submitted_at'] ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="20">Hakuna feedback bado.</td></tr>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>

<?php $conn->close(); ?>