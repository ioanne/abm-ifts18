<?php
    class users_model{
        private $db;
        private $users;
        private $current_user;
        
    
        public function __construct(){
            $this->db=Connect::connection();
            $this->users=array();
        }
        public function get_users(){
            $_query=$this->db->query("select * from users;");
            while($filas=$_query->fetch_assoc()){
                $this->users[]=$filas;
            }
            return $this->users;
        }

        public function get_user($user_id){
            $_query=$this->db->query("select * from users where user_id = $user_id;");
            // while($filas=$_query->fetch_assoc()){
            //     $this->current_user=$filas;
            // }
            $this->current_user = $_query->fetch_assoc();
            return $this->current_user;
        }

        public function create_user($name, $last_name, $dni){
            $sql = "INSERT INTO users (name, last_name, dni) VALUES ('$name', '$last_name', '$dni');";
            $_query=$this->db->query($sql);
            return True;
        }

        public function update_user($user_id, $name, $last_name, $dni){
            $sql = "UPDATE users SET name = '$name', last_name = '$last_name', dni = '$dni' WHERE user_id = $user_id;";
            $_query=$this->db->query($sql);
            return True;
        }

        public function delete_user($user_id){
            $sql = "DELETE FROM users WHERE user_id = $user_id;";
            $_query=$this->db->query($sql);
            return True;
        }
    }
?>
