<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register account</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>

    <div class="d-flex justify-content-center align-items-center vh-100">
    
        <form class="bg-warning p-4" action="register.php" method="post">

            <h3 class="text-center">Register</h3>

            <input class="mt-3 form-control" type="text" name="name" placeholder="Enter your name">
            <input class="mt-3 form-control" type="password" name="password" placeholder="Enter your password">
            <input class="mt-3 form-control" type="number" name="mobile" placeholder="Enter mobile">
            <textarea class="mt-3 form-control" name="address" id="" cols="30" rows="10" placeholder="Enter address"></textarea>

            <input class="form-control mt-3 btn btn-success" type="submit" value="Register">

        </form>
    </div>

</body>
</html>