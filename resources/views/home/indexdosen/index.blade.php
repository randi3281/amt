<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Tasks</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="icon" href="/icon/icon.png" type="image/x-icon">
</head>

<body>
    <div class="container-fluid  h-100">
        <div class="row h-100">
            <div class="col-3 bg-success text-light " style="height: 1500px">
                <div class="text-center">
                    <img class="mt-5" src="/image/photo.jpeg" alt="" style="width: 170px; height: 170px">
                </div>
                <h5 class="text-center mt-3">Randi Afif</h4>
                    <ul class="list-unstyled ms-4 mt-5">
                        <li><a href="" class="text-decoration-none text-light">Profil</a></li>
                        <hr>
                        <li><a href="" class="text-decoration-none text-light">Tugas</a></li>
                        <hr>
                        <li><a href="" class="text-decoration-none text-light">Logout</a></li>
                        <hr>
                    </ul>
            </div>

            <div class="col-9">
                @include('home.indexdosen.tugas')
            </div>
        </div>
        <div class="row h-100">
            <div class="col-3 bg-success text-light pb-4">
                <div class="text-center"><img src="/icon/icon_crop.png" style="width: 100px" alt=""></div>
            </div>

            <div class="col-9">

            </div>
        </div>
    </div>
    </div>
</body>

</html>
