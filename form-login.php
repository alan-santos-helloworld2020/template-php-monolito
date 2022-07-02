<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include './header/header.php'; ?>
        <title>Onload-Home</title>
    </head>
    <body>
        <?php include './navegador/navegador.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5 d-flex justify-content-center align-items-center">
                    <form action="auth/login.php"method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">username</label>
                            <input type="text" class="form-control" name="username" id="username" value="" required=""/>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">password</label>
                            <input type="text" class="form-control" name="password" id="password" value="" required=""/>
                        </div>
                        <div class="mb-3 d-flex">
                            <button type="submit" class="d-flex btn btn-primary">
                                <i class="material-icons me-2">login</i>
                                <span>login</span>
                            </button>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
        <script src="./node_modules/jquery/dist/jquery.min.js"></script>
        <script src="./js/script.js"></script>
    </body>
</html>


