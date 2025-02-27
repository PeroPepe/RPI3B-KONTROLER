<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['reboot'])) {
        shell_exec("sudo /sbin/reboot");
    } elseif (isset($_POST['shutdown'])) {
        shell_exec("sudo /sbin/shutdown -h now");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raspberry Pi Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        h1 {
            color: #333;
        }
        button {
            padding: 15px 30px;
            margin: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .reboot {
            background-color: #007bff;
            color: white;
        }
        .shutdown {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Raspberry Pi Management</h1>
        <form method="post">
            <button class="reboot" type="submit" name="reboot">Reboot</button>
            <button class="shutdown" type="submit" name="shutdown">Shutdown</button>
        </form>
    </div>
</body>
</html>
