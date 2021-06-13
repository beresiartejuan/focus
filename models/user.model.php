<?php

class UserModel extends BaseModel{

    public function register(array $user){
        $insert = $this->driver->insert($user)->into('users');
        if($insert->execute()){
            echo 'SE PUDO HACER!!!!!!!!!!!';
        }else{
            echo "No se pudo :(";
        }
    }

    public function login(array $data){
        $select = $this->driver->select()->from('users');
        $select->where(new \FaaPz\PDO\Clause\Grouping("AND", 
            new \FaaPz\PDO\Clause\Conditional('password', '=', $data['password']),
            new \FaaPz\PDO\Clause\Conditional('email', '=', $data['email']),
            new \FaaPz\PDO\Clause\Conditional('username', '=', $data['username'])
        ));

        $execute = $select->execute();

        if($execute){
            return $execute->fetch();
        }else{
            echo "NO!";
        }

    }

    public function getInfoFrom($id){
        $select = $this->driver->select()->from('users');
        $select->where(new \FaaPz\PDO\Clause\Conditional('id', "=", $id));
        $execute = $select->execute();
        if($execute){
            $data = $execute->fetch();
            return $data;
        }else{
            return false;
        }
    }
}