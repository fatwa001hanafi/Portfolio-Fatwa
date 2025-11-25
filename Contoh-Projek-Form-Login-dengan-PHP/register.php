<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="theme-toggle">
    <input type="checkbox" id="toggleDark" onchange="toggleDarkMode()">
    <label for="toggleDark" class="switch">
        <span class="icon sun">☀️</span>
        <span class="icon moon">🌙</span>
        <span class="ball"></span>
    </label>
</div>


<div class="container">
    <h2>Daftar Akun</h2>

    <?php 
    if(isset($_SESSION['msg'])){
        echo "<p style='color:red;'>".$_SESSION['msg']."</p>";
        unset($_SESSION['msg']);
    }
    ?>

    <form action="process_register.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Daftar</button>

        <div class="link">
            <a href="login.php">Sudah punya akun? Login</a>
        </div>
    </form>
</div>
<script>
function toggleDarkMode() {
    document.body.classList.toggle('dark');
    localStorage.setItem('darkmode', document.body.classList.contains('dark'));
}

if(localStorage.getItem('darkmode') === 'true'){
    document.body.classList.add('dark');
}
</script>
</body>
</html>
