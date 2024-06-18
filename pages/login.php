<?php
include './includes/header.php';
?>

<h2>Login</h2>
<form action="authenticate.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <button type="submit">Login</button>
</form>

<?php
include './includes/footer.php';