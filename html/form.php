<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/form-style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Beck Web Form</title>
</head>
<body>
    <main class="d-flex justify-content-center align-items-center">
            <form action="../php/testreg.php" method="post">
                <p class="head">Sing</p>
                <label class="email" for="login"> Email</label>
                    <input name="login" type="login" placeholder="Type youre email" id="login">
                
                <label class="email" for="pass">Password</label>
                   
                    <input name="password" type="password" placeholder="Type youre email" id="pass">
                <div class="button d-flex align-items-center justify-content-center">
                    <button type="submit">Submit</button>
                </div>
                <div class="button d-flex align-items-center justify-content-center">
                    <a href="./register.php">Register</a>
                </div>
            </form>
    </main>
</body>
</html>