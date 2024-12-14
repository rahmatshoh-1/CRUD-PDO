<?php
class QueryBuilder{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function getAll($table){
        $query = $this->pdo->prepare("Select * from {$table}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function create($table,$data){
        $keys = implode(',',array_keys($data));
        $tags = ":".implode(', :',array_keys($data));
        $query = $this->pdo->prepare("INSERT INTO {$table} ($keys) VALUES ($tags)");
        $query->execute( [
            'title'=> $data['title']
        ]);
    }
    public function getOne($table,$id){
        $query = $this->pdo->prepare("SELECT * FROM $table where id = :id");
        $query->execute([
            'id'=> $id
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function update($table,$data,$id) {
        $keys = array_keys($data);
        $string = '';
        foreach($keys as $key){
            $string .=$key . '=:'.$key.',';
        }
        $keys = rtrim($string,',');
        $data['id'] = $id;
         $query = $this->pdo->prepare("UPDATE {$table} SET $keys where id=:id");
        //  $query->execute($data);
         dd( $query->execute($data));
        // UPDATE `posts` SET `title` = 'My first blog1' WHERE `posts`.`id` = 1;
    }
    public function delete($table,$id){
        $query = $this->pdo->prepare("DELETE FROM $table WHERE id = :id");
        $query->execute([
            'id'=> $id
        ]);
    }
}