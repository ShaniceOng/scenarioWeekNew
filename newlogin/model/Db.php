<?php
  class Db {
    protected $con;

    public function __construct() {
      $this->getInstance();
    }

    public function getInstance() {
      // if (!isset($this->con)) {
      //   $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
      //   $this->con = new PDO('mysql:host=localhost;dbname=website', 'root', 'root', $pdo_options);
      // }
      $user = 'root';
      $pass = 'root';
      $db = 'website';
      $host = 'localhost';

      $this->con = mysqli_connect($host, $user, $pass, $db);
    }

    public function select($table)
    {
      $sql = "select * from " . $table . ";";
      $result = mysqli_query($this->con, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      return $row;
    }

    public function select_where($table, $where)
    {
      $sql = "select * from " . $table . " where " . $where . ";";
      // echo $this->con==null; 
      $result = mysqli_query($this->con, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      return $row;
    }

    public function select_all($table, $suffix)
    {
      $sql = "select * from " . $table . " " . $suffix . ";";
      $result = mysqli_query($this->con, $sql);
      $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
      return $rows;
    }

    public function update($table, $updates, $where)
    {
      $sql = "update " . $table . " set " . $updates . " where " . $where . ";";
      // echo $this->con==null; 
      $result = mysqli_query($this->con, $sql);
    }

    public function create($table, $columns, $values)
    {
      $sql = "insert into " . $table . " " . $columns . " values " . $values . ";";
      $result = mysqli_query($this->con, $sql);
    }

    public function get_snippet_id($username)
    {
      $sql = "select id FROM snippets WHERE time_created = (SELECT MAX(time_created) from snippets where username = '$username')";
      $result = mysqli_query($this->con, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      return $row['id'];
    }

    public function create_snippet_return($table, $columns, $values, $username)
    {
      $sql = "insert into " . $table . " " . $columns . " values " . $values . ";";
      $result = mysqli_query($this->con, $sql);
      return $this->get_snippet_id($username);
    }

    public function create_user_return($sql, $username)
    {
      $result = mysqli_query($this->con, $sql);
      if ($result)
      {
        $row = $this->select_where("users", "username = '$username'");
        return $row['id'];
      }
      else
      {
        return -1;
      }
    }

    public function exists($table, $condition)
    {
      $sql = "select count(*) AS count FROM ". $table . " WHERE " . $condition;
      // $sql = "select 1 from " . $table . " where " . $condition;
      // echo 'in exists';
      $result = mysqli_query($this->con, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      if($result)
      {
        // $count=mysqli_num_rows($result);
        // if ($count==1)
        // {
          if ($row['count']>0)
          {
            return true;
          }       
        // }
      }
      return false;
    }

    public function delete($table, $condition)
    {
        $sql = "delete from " . $table . " where ". $condition . ";";
        // echo 'calling '. $sql;
        $result = mysqli_query($this->con, $sql);
    }
}
    
?>