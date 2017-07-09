<?php 
class ReservationModel implements ModelInterface{

    public static function getAll(){
        $SQL = 'SELECT * FROM reservation';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    public static function getAllRezByEmail($email){
        $SQL = 'SELECT reservation.projectionFRN_id,guest.email,reservation.seat_num FROM reservation INNER JOIN guest on reservation.guestFRN_id=guest.guest_id where guest.email=?';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    public static function insert($guestFRN_id,$projectionFRN_id,$seat_num){
        $SQL='INSERT INTO reservation (guestFRN_id, projectionFRN_id, seat_num) SELECT ?, ?, ? FROM dual WHERE NOT EXISTS (SELECT * FROM reservation WHERE reservation.guestFRN_id=? and reservation.seat_num=?);'    
        $pdo=DataBase::getInstance();
        $prep =$pdo->prepare($SQL);
        $prep->execute([$guestFRN_id,$projectionFRN_id,$seat_num,$guestFRN_id,$seat_num]);
        return $pdo->lastInsertId();
    }
    public static function delete($reservation_id)
        $SQL='DELETE FROM reservation WHERE reservation.reservation_id=?';
        $prep=DataBase:getInstance()->prepare($SQL);
        return $prep->execute();
    }