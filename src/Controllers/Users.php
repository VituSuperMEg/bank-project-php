<?php

namespace Root\BankProject\Controllers;

class Users extends Controller {
  
    public function index()
    {
        try {
            $result = $this->query('SELECT * FROM users');
  
            foreach ($result as $row) {
                print_r($row);
            }
        } catch (\Exception $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }
}
