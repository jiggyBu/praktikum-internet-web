<?php 
class ProjectionModel implements ModelInterface{

    public static function getAll(){
        $SQL = 'SELECT projection.date_time,hall.name,movie.title,projection.price FROM projection INNER JOIN hall  on projection.hallFRN_id = hall.hall_id INNER JOIN movie on projection.movieFRN_id=movie.movie_id';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    public static function getById($projection_id){
        $SQL = 'SELECT projection.date_time,hall.name,movie.title,projection.price FROM projection INNER JOIN hall  on projection.hallFRN_id = hall.hall_id INNER JOIN movie on projection.movieFRN_id=movie.movie_id WHERE projection.projection_id=?';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$projection_id]);
        return $prep->fetch(PDO::FETCH_OBJ);
    }
    public static function getByMovieId($movie_id){
        $SQL = 'SELECT projection.date_time,projection.projection_id FROM projection WHERE projection.movieFRN_id=?';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$movie_id]);
        return $prep->fetch(PDO::FETCH_OBJ);
    }
    public static function insert($hall_id, $movie_id, $price, $date_time) {
        $SQL = 'INSERT INTO projection (hallFRN_id, movieFRN_id, price, date_time) VALUES (?, ?, ?, ?);';
        $prep = DataBase::getInstance()->prepare($SQL);
        return $prep->execute($hall_id, $movie_id, $price, $date_time]);
    
    }
    

    //
}