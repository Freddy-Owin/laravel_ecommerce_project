<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Styles -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="https://kit.fontawesome.com/65179477f5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="form-signin mt-5 col-8">
            <div class="text-center mb-4 mt-5">
              <h1 class="h3 mb-3 font-weight-normal">Welcome Page</h1>
            </div>
            <div class="row justify-content-between">
              <div class="col-5">
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, explicabo ad obcaecati nobis sapiente nostrum vel accusantium quaerat officiis aliquid quod esse rem numquam, assumenda, provident mollitia. Placeat, itaque dolor!
                </p>
              </div>
              <div class="col-5">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzC1UTO2vqxLZFjmfsWlqiA2acnnuJeKJThQ&usqp=CAU" alt="">
              </div>
            </div>
            <div class="buttons mt-5">
                <a href="" class="btn btn-primary mb-5 col-12">Login</a>
                <a href="{{ route('create') }}">Create an Account</a>
            </div>

            <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
          </div>
        </div>
    </div>
</body>

</html>
