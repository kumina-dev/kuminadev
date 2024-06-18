<?php
include './includes/header.php';
?>

<section id="hero">
    <h1>Kumina</h1>
    <p>This is a hero section.</p>
</section>

<section id="about">
    <h2>About me</h2>
    <p>This is the about section.</p>
</section>

<section id="contact">
    <h2>Contact</h2>
    <form action="contact_form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <label for="message">Name:</label>
        <textarea name="message" id="message"></textarea>
        <button type="submit">Send</button>
    </form>
</section>

<?php
include './includes/footer.php';