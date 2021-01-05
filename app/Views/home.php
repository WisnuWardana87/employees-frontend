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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </div>
    </nav>

    <section class="content">
        <div class="container">
            <h1>Data Mahasiswa</h1>
            <div class="card-header">
                <div class="card-tools">
                    <a href="http://localhost/employees-frontend/index.php/Employees/new"><button type="button" class="btn btn-block btn-primary"><i class="fas fa-folder-plus"></i> Tambah Data</button></a>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">emp_no</th>
                            <th scope="col">birth_date</th>
                            <th scope="col">first_name</th>
                            <th scope="col">last_name</th>
                            <th scope="col">gender</th>
                            <th scope="col">hire_date</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($employeesData as $val) { ?>
                            <tr>
                                <td><?= $val->emp_no; ?></td>
                                <td><?= $val->birth_date; ?></td>
                                <td><?= $val->first_name; ?></td>
                                <td><?= $val->last_name; ?></td>
                                <td><?= $val->gender; ?></td>
                                <td><?= $val->hire_date; ?></td>
                                <td class="text-center"><a href="http://localhost/employees-frontend/index.php/Employees/edit/<?= $val->emp_no ?>">
                                        <div class="btn btn-sm btn-primary">Edit<i class="fas fa-fw fa-edit"></i></div>
                                    </a></td>
                                <td class="text-center"><a href="http://localhost/employees-frontend/index.php/Employees/delete/<?= $val->emp_no ?>" onclick="return confirm('Anda yakin akan menghapus data ini ?');">
                                        <div class="btn btn-sm btn-danger">Delete<i class="fas fa-fw fa-trash"></i></div>
                                    </a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>