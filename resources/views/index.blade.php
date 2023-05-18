<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whatsapp</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{asset('js/myjs.js')}}"></script>
</head>

<body>
    <!-- side bar -->
    <ul class="nav nav-pills flex-column bg-dark bg-dark">
        <li class="nav-item home">
            <a class="nav-link" href="#"><i class="fas fa-home"></i> <span>Home</span></a>
        </li>

        <li class="nav-item dashboard">
            <a class="nav-link" href="#"><i class="fas fa-chart-line"></i> <span>Dashboard</span></a>
        </li>

        <li class="nav-item setting">
            <a class="nav-link" href="#"><i class="fas fa-cog"></i> <span>Settings</span></a>
        </li>
    </ul>

    <!-- navigation and body -->
    <div class="sub-body">
        <nav class="nav-bar navbar-expand-sm bg-dark navbar-dark my-nav">
            <i class="fas fa-bars bar"></i>
            <div class="navbar-brand"><?php ?></div>
            <a href="register" class="btn btn-warning">Add user</a>
        </nav>

        <div class="content">
            <table class="table  table-bordered table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th colspan="3">Actions</th>
                </tr>

                @foreach($users as $user)
                <tr>
                    <td>{{$user->First_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone_number}}</td>
                    <td><a href="/view/{{$user->id}}" class="btn btn-info action-btn" style="color: #ffff; text-decoration:none">View</a></td>
                    <td><a href="/edit/{{$user->id}}" class="btn btn-success action-btn" style="color: #ffff; text-decoration:none">Update</a></td>
                    <td><a href="/delete/{{$user->id}}" class="btn btn-danger action-btn" style="color: #ffff; text-decoration:none">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>