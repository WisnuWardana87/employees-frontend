<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>
        hello world
    </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistem Terdistribusi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/employees-frontend/index.php/Employees">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="content">
        <div class="container">
            <h1>Tambah Data Mahasiswa</h1>
            <div class="row">
                <div class="col-md-6">
                    <form action="http://localhost/employees-frontend/index.php/Employees/create" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Emp No</label>
                            <input type="text" class="form-control" name="emp_no" id="emp_no">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Birth Date</label>
                            <input type="date" class="form-control" name="birth_date" id="birth_date">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="M" name="gender" id="male" checked>
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="F" name="gender" id="female">
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Hire Date</label>
                            <input type="date" class="form-control" name="hire_date" id="hire_date">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>