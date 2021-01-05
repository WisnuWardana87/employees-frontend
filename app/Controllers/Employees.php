<?php

namespace App\Controllers;

use App\Models\WSModel;

class Employees extends BaseController
{
    public function testtoken()
    {
        $ws = new WSModel();

        print_r($ws->getToken());
    }
    public function index()
    {
        $ws = new WSModel();

        $employeesData = $ws->getEmployees();

        $data['employeesData'] = json_decode($employeesData);

        return view('home', $data);
    }

    public function new()
    {
        return view('new');
    }

    public function edit($emp_no)
    {
        $ws = new WSModel();

        $employeesData = $ws->getEdit($emp_no);
        $data['employeesData'] = json_decode($employeesData);
        return view('edit', $data);
    }

    public function update($emp_no)
    {
        $ws = new WSModel();

        $data = $this->request->getPost();

        $result = $ws->updateEmployees($emp_no, $data);

        if ($result) {
            echo "Data Berhasil Diupdate";
        } else {
            echo "Data Gagal Diupdate";
        }
        echo "<a href='http://localhost/employees-frontend/index.php/employees'> Kembali</a>";
    }

    public function create()
    {
        $ws = new WSModel();

        $data = $this->request->getPost();

        $result = $ws->createEmployees($data);

        if ($result) {
            echo "Data Berhasil Disimpan";
        } else {
            echo "Data Gagal Disimpan";
        }
        echo "<a href='http://localhost/employees-frontend/index.php/employees'> Kembali</a>";
    }

    public function delete($emp_no)
    {
        $ws = new WSModel();


        $result = $ws->getDelete($emp_no);

        if ($result) {
            echo "Data Berhasil Dihapus";
        } else {
            echo "Data Gagal Dihapus";
        }
        echo "<a href='http://localhost/employees-frontend/index.php/employees'> Kembali</a>";
    }
}
