<?php

class GuestModel implements ModelInterface{
     public static function getAll(){
        $SQL = 'SELECT * FROM guess';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    public static function getById($guest_id){
        $SQL = 'SELECT * FROM guest WHERE guest_id = ?';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$guest_id]);
        return $prep->fetch(PDO::FETCH_OBJ);
    }
    public static function getById($email){
        $SQL = 'SELECT * FROM guest WHERE email = ?';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$guest_id]);
        return $prep->fetch(PDO::FETCH_OBJ);
    }

    public static function insert($first_name, $last_name, $email, $phone, $number_of_waiting_res) {
        $SQL = 'INSERT INTO guest (first_name, last_name, email, phone, number_of_waiting_res) VALUES (?, ?, ?, ?, ?);';
        $prep = DataBase::getInstance()->prepare($SQL);
        return $prep->execute([$first_name, $last_name, $email, $phone, $number_of_waiting_res]);
    }
    
    public static function update($email,$number_of_waiting_res){
        $SQL='UPDATE guest SET num_of_waiting_res = num_of_waiting_res + ? WHERE email= ? and num_of_waiting_res+ ? <5';
        $prep=DataBase:getInstance()->prepare($SQL);
        $prep->execute([$number_of_waiting_res,$email,$number_of_waiting_res]);
        return $prep->rowCount();
    }



//UPDATE guest SET num_of_waiting_res = num_of_waiting_res + 2 WHERE email='delije@gmail.com' and num_of_waiting_res+2<5

}