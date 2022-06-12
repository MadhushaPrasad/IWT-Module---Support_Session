<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="row container-fluid d-flex justify-content-center align-items-center mt-5">
    <form action="services/StudentService.php" method="get">
        <div class="form-group">
            <div class="row container d-flex justify-content-center align-items-center">
                <div class="col-md-4">
                    <label for="validationServer01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName">
                </div>
                <div class="col-md-4">
                    <label for="validationServer01" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName" name="latName">
                </div>
            </div>
        </div>

        <div class="form-group mt-2">
            <div class="row container d-flex justify-content-center align-items-center">
                <div class="col-md-4">
                    <label for="validationServer01" class="form-label">Telephone</label>
                    <input type="text" class="form-control" id="telephone" name="telephone">
                </div>
                <div class="col-md-4">
                    <label for="validationServer01" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
            </div>
        </div>

        <div class="form-group mt-3">
            <div class="row container d-flex justify-content-center align-items-center">
                <div class="col-md-4">
                    <input type="submit" class="form-control btn-success" id="btnSubmit" value="Submit"
                           name="btnSubmit">
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>