<!-- admin/admin.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="heading">Admin Panel</h1>
            <p class="subheading">Manage vaccine appointments efficiently.</p>
        </div>
        <form action="admin.php" method="post" class="form">
            <label for="task">Task:</label>
            <input type="text" id="task" name="task" class="input-field">
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>
