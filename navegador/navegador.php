<?php session_start(); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../form-login.php">Login</a>
                </li>
            </ul>
        </div>
        <?php
        if($_SESSION["username"]){
            echo '<a id="btnAction" href="auth/logout.php" class="d-flex m-2 btn btn-block btn-primary">
                    <i class="material-icons me-2">logout</i>
                    <span>logout</span>
                  </a>';
        }
        ?>
    </div>
</nav>

