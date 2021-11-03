<?php

    class user
      {

         private $db;

         function __construct($conn)
         {
                $this->db = $conn;
         }

         public function InsertUser($username,$password)
         {

            $checkUser = $this->getUserByUsername($username);

            if($checkUser['num'] > 0)
              {
                //return false;
                echo "here";
              }
            else
              {
                $new_password = md5($password.$username);
                 try
                    {
                        $query = "INSERT INTO users (username,password) VALUES (:user,:password)";
                        $stmt = $this->db->prepare($query);

                        $stmt->bindparam(':user',$username);
                        $stmt->bindparam(':password',$new_password);

                        $stmt->execute();
                        return true;

                    }
                  catch(PDOException $error)
                    {
                        echo $error->getMessage();
                        //return false;
                    }

              }


            
         }

         public function getUser($username,$password)
         {
           try
             {
                $query = "SELECT * FROM users WHERE username = :user  AND password = :pass";

                $stmt = $this->db->prepare($query);
    
                $stmt->bindparam(':user',$username);
                $stmt->bindparam(':pass',$password);
    
                $stmt->execute();

                $results = $stmt->fetch();

                return $results;
             } 
            catch(PDOException $error)
            {
                echo $error->getMessage();
                return false;
            }

         }

        public function getUserByUsername($username)
          {
                try
                {
                    $query = "SELECT COUNT(*) AS num FROM users WHERE username = :user";
                    $stmt = $this->db->prepare($query);

                    $stmt->bindparam(':user', $username);

                    $stmt->execute();

                    $result = $stmt->fetch();

                    return $result;
                }
                catch(PDOException $err)
                {
                    echo $err->getMessage();
                    return false;
                }


          } 

      }


?>