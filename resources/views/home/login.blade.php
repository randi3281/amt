<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks - Buat Manajemen Tugasmu Semakin Mudah....</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="icon" href="/icon/icon.png" type="image/x-icon">
</head>

<body class="bg-success">
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card" style="height: 570px">
                    <div class="card-body">
                        <div class="text-center mt-4">
                            <img src="/icon/icon.png" style="width:150px" alt="">
                        </div>
                        <form action="/login" method="POST">
                            <div class="row justify-content-center">
                                <div class="col-md-9">
                                    <hr>
                                    <div class="form-group mt-3">
                                        <label type="label" for="username">Username</label>
                                        <input type="text" class="form-control"
                                            placeholder="Masukkan username disini" name="username">
                                    </div>
                                    <div class="form-group mt-3 mb-5">
                                        <label type="label" for="username">Password</label>
                                        <input type="password" class="form-control"
                                            placeholder="Masukkan password disini" name="password">
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="text-center">

                                <input type="submit" class="w-25 btn btn-success" value="Login">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
