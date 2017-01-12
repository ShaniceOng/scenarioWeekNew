<?php
require_once "Db.php";
  class UserModel extends Db{
    
    public function __construct() {
      // echo 'in model';
      parent::__construct();
    }
    
    public function authenticate($username, $password)
    {
      // echo 'authenticating';
      $icon_url = "";
      $homepage_url = "";
      $profile_color = "black";
      $private_snippet = "";
      $row = $this->select_where("users", "username = '$username'");
      if($row){
        if ($row['password'] === $password) {
            $addProfile = mysqli_query($this->con, "insert into profiles (username, password, icon_url, homepage_url, profile_color, private_snippet) values ('$username', '$password', '$icon_url', '$homepage_url', '$profile_color', '$private_snippet');");
            return $row['id'];
          } else {
            return -1;
          }
        }else{
          return -1;
        }
        
    } 

    public function logout()
    {
      session_destroy();
      header('Location:../view/loggedout.html');
    }

    public function create_user($username, $password)
    {
      $sql = "insert into users (username, password) values ('$username', '$password');";
        $result = $this->create_user_return($sql, $username);
        if ($result!=-1){
          $this->create("recent_snippets", "(user_id, username)", "('$result', '$username')");
          // $row = $this->select_where("users", "username = '$username'");
          return $result;
        }
        else
        {
          return -1;
        }
        // if($result){
        //   echo "Signup successful!!! Welcome ". $row['username'];
        // }else{
        //   echo 'empty query results';
        // }
    }

    public function updateProfile ($username, $new_username, $password, $icon_url, $homepage_url, $profile_color, $private_snippet)
    {
      $this->update("users", "username = '$new_username', password = '$password', icon_url = '$icon_url', homepage_url = '$homepage_url', profile_color = '$profile_color', private_snippet = '$private_snippet'", "username='$username'");
    }

    public function getProfile($username)
    {
      // echo 'authenticating';
      $row = $this->select_where("users", "username = '$username'");
      return $row;
    }

    public function getStatus($userid)
    {
      $row = $this->select_where("users", "id = '$userid'");
      return $row['status'];
    } 

    public function getUsername($userid)
    {
      $row = $this->select_where("users", "id = '$userid'");
      return $row['username'];
    }
  }
?>
