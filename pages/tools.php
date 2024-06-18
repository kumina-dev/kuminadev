<?php
include './includes/header.php';
?>

<h2>Tools</h2>
<section id="song_recommender">
    <h3>Song Recommender</h3>
    <button id="get-recommendations">Get Recommendations</button>
    <div id="recommendations"></div>
</section>

<section id="password-manager">
    <h3>Password Manager</h3>
    <button id="generate-password">Generate Password</button>
    <div id="password"></div>
</section>

<script>
document.getElementById('get-recommendations').addEventListener('click', function() {
    fetch('<?= BASE_URL ?>api/gateway.php?endpoint=spotify_recommender')
        .then(response => response.json())
        .then(data => {
            document.getElementById('recommendations').innerHTML = JSON.stringify(data.recommendations);
        });
});

document.getElementById('generate-password').addEventListener('click', function() {
    fetch('<?= BASE_URL ?>api/gateway.php?endpoint=password_generator')
        .then(response => response.json())
        .then(data => {
            document.getElementById('password').innerHTML = data.password;
        });
});
</script>

<?php
include './includes/footer.php';