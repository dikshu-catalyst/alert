<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... your head section ... -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="index.js"></script>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <form method="post" id="data">
        <label for="userId">User ID:</label>
        <input type="text" id="userId" name="userId" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <button id="submit-button" type="button">Submit</button>
    </form>
</body>
</html>
