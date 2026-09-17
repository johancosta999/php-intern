<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php 
        include __DIR__ . '/php/view/component/head.php';
    ?>
    <title>Home</title>
</head>
<body>
    <?php 
        include __DIR__ . '/php/view/component/navbar.php';
    ?>
    <h1>HOME</h1>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="php/controller/login.php" method="post">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">

                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="password">
                    <br>

                    <input type="submit" class="btn btn-success" value="Login">
                </form>
            </div>
        </div>
    </div>
    <br>

     <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="php/controller/calculater.php" method="post">
                    <label for="">No 1: </label>
                    <input type="number" class="form-control" name="number1" placeholder="number 1">

                    <label for="">No 2: </label>
                    <input type="number" class="form-control" name="number2" placeholder="number 2">
                    <br>

                    <input type="submit" class="btn btn-success" value="Calculate">
                </form>
            </div>
        </div>
    </div>
    

</body>
</html>