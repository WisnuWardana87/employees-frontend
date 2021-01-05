<?php

namespace App\Models;

use CodeIgniter\Model;

class WSModel extends Model
{
    public function getToken()
    {
        $url = "http://localhost/employees/index.php/auth/login";
        $loginInfo = array(
            'username' => 'user3',
            'password' => 'password'
        );

        $data = http_build_query($loginInfo);
        $context_options = array(
            'http' => array(
                'method' => 'POST',
                'header' => "Content-Type : application/x-www-from-urlencoded\r\n"
                    . "Content-Length: " . strlen($data) . "\r\n",
                'content' => $data
            )
        );

        $contex = stream_context_create($context_options);
        $result = @file_get_contents($url, false, $contex);

        if ($result) {
            $json = json_decode($result);
            $token = $json->token;
            return $token;
        }
        return $result;

        //file_get_contents();
    }

    public function getEmployees()
    {
        $token = $this->getToken();

        $url = "http://localhost/employees/index.php/employees";

        $context_options = array(
            'http' => array(
                'method' => 'GET',
                'header' => "Authorization: Bearer" . $token
            )
        );
        $contex = stream_context_create($context_options);
        $result = @file_get_contents($url, false, $contex);

        return $result;
    }

    public function createEmployees($data)
    {
        $token = $this->getToken();

        $url = "http://localhost/employees/index.php/employees";

        $data = json_encode($data, JSON_FORCE_OBJECT);

        $context_options = array(
            'http' => array(
                'method' => 'POST',
                'header' => "Authorization: Bearer" . $token . "\r\n" .
                    "Content-Type: application/json\r\n" .
                    "Content-Length: " . strlen($data),
                'content' => $data
            )
        );
        $contex = stream_context_create($context_options);
        $result = @file_get_contents($url, false, $contex);

        return $result;
    }

    public function getEdit($emp_no)
    {
        $token = $this->getToken();

        $url = "http://localhost/employees/index.php/employees/" . $emp_no;

        $context_options = array(
            'http' => array(
                'method' => 'GET',
                'header' => "Authorization: Bearer" . $token
            )
        );
        $contex = stream_context_create($context_options);
        $result = @file_get_contents($url, false, $contex);

        return $result;
    }

    public function updateEmployees($emp_no, $data)
    {
        $token = $this->getToken();

        $url = "http://localhost/employees/index.php/employees/" . $emp_no;

        $data = json_encode($data, JSON_FORCE_OBJECT);

        $context_options = array(
            'http' => array(
                'method' => 'PUT',
                'header' => "Authorization: Bearer" . $token . "\r\n" .
                    "Content-Type: application/json\r\n" .
                    "Content-Length: " . strlen($data),
                'content' => $data
            )
        );
        $contex = stream_context_create($context_options);
        $result = @file_get_contents($url, false, $contex);

        return $result;
    }
    public function getDelete($emp_no)
    {
        $token = $this->getToken();

        $url = "http://localhost/employees/index.php/employees/" . $emp_no;

        $context_options = array(
            'http' => array(
                'method' => 'DELETE',
                'header' => "Authorization: Bearer" . $token
            )
        );
        $contex = stream_context_create($context_options);
        $result = @file_get_contents($url, false, $contex);

        return $result;
    }
}
