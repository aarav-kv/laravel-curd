<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whatsapp</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        form {
            width: 500px;
            margin: 140px auto;
        }

        .btn {
            margin-top: 23px;
        }
    </style>
    <form method="POST" action="add">
        @csrf
        <h1>Register</h1>

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label>Email </label>
            <input type="text" name="email" class="form-control">

        </div>

        <div class="form-group">
            <label>Phone no</label>
            <input type="text" name="phone_no" class="form-control">
        </div>

        <input type="submit" name="submit" value="Add" class="btn btn-success">
    </form>
</body>

</html>