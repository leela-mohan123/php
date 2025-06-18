<!DOCTYPE html>
<html>
<head>
    <title>Student Data Form</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #e3f2fd;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #1976d2;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        input[type="submit"] {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            font-size: 16px;
            background-color: #1976d2;
            border: none;
            color: white;
            border-radius: 8px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0d47a1;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #dcedc8;
            border-left: 5px solid #558b2f;
            border-radius: 8px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Student Information Form</h2>

    <form method="post" action="">
        <label for="name">Full Name</label>
        <input type="text" name="name" required>

        <label for="age">Age</label>
        <input type="number" name="age" min="1" required>

        <label for="gender">Gender</label>
        <select name="gender" required>
            <option value="">--Select--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <label for="mobile">Mobile Number</label>
        <input type="text" name="mobile" pattern="[0-9]{10}" placeholder="10-digit number" required>

        <label for="course">Course</label>
        <select name="course" required>
            <option value="">--Select Course--</option>
            <option value="B.Tech CSE">B.Tech CSE</option>
            <option value="B.Tech ECE">B.Tech ECE</option>
            <option value="B.Sc">B.Sc</option>
            <option value="B.Com">B.Com</option>
            <option value="MCA">MCA</option>
            <option value="MBA">MBA</option>
        </select>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name   = htmlspecialchars($_POST["name"]);
        $age    = htmlspecialchars($_POST["age"]);
        $gender = htmlspecialchars($_POST["gender"]);
        $mobile = htmlspecialchars($_POST["mobile"]);
        $course = htmlspecialchars($_POST["course"]);

        echo "<div class='result'>";
        echo "<strong>Student Details Received:</strong><br><br>";
        echo "Name: $name <br>";
        echo "Age: $age <br>";
        echo "Gender: $gender <br>";
        echo "Mobile: $mobile <br>";
        echo "Course: $course <br>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
