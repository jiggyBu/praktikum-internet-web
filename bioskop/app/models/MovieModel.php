<?php
class MovieModel implements ModelInterface {
    public static function getAll() {
        $SQL = 'SELECT movie.director,movie.actors,movie.description,movie.duration,movie.title,movie.trailer,genre.name AS genre 
        FROM movie INNER JOIN genre ON movie.genreFRN_id = genre.genre_id;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $res = $prep->execute();
        if ($res) {
            return $prep->fetchAll(PDO::FETCH_OBJ);
        } else {
            return [];
        }
    }

    public static function insert($genre_id,$director,$actors,$description,$duration,$title,$trailer){
        $SQL = 'INSERT INTO movie (genreFRN_id, director, actors, description, duration, title, trailer) VALUES (?, ?, ?, ?, ?, ?, ?);';
        $pdo=DataBase::getInstance();
        $prep = $pdo->prepare($SQL);
        $res=$prep->execute([$genre_id,$director,$actors,$description,$duration,$title,$trailer]);
        if($res){
            $last_id=$pdo->lastInsertId();
            return $last_id;
        }else{
            return $res;
        }
    }
    public static function getAllTitleID(){
        $SQL='SELECT title,movie_id FROM movie';
        $prep = DataBase::getInstance()->prepare($SQL);
        $res = $prep->execute();
        if ($res) {
            return $prep->fetchAll(PDO::FETCH_OBJ);
        } else {
            return [];
        }
    }
    public static function getById($movie_id){
        $SQL = $SQL = 'SELECT movie.director,movie.actors,movie.description,movie.duration,movie.title,movie.trailer,genre.name AS genre 
        FROM movie INNER JOIN genre ON movie.genreFRN_id = genre.genre_id WHERE movie.movie_id = ?';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$movie_id]);
        return $prep->fetch(PDO::FETCH_OBJ);
    }
     



}