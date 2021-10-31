<?php

   class crud
   {
       private $db;

       function __construct($conn)
       {
           $this->db = $conn;
       }

       public function insert($fname, $lname, $dob, $email, $contact, $specialty)
       {
           try
           {
            //create insert statement
             $query = "INSERT INTO attendee (firstname,lastname,DOB,email,contactnumber,specialty_id) VALUES (:fname,:lname, :dob, :email, :contact, :specialty)";
             
             //prepare sql statement for execution
             $stmt = $this->db->prepare($query);

             //bind parameters
             $stmt->bindparam(':fname',$fname);
             $stmt->bindparam(':lname',$lname);
             $stmt->bindparam(':dob', $dob);
             $stmt->bindparam(':email', $email);
             $stmt->bindparam(':contact',$contact);
             $stmt->bindparam(':specialty',$specialty);

             //execute parameter
             $stmt->execute();
             return true;

           }

           catch(PDOException $err)
           {
               echo $err->getMessage();
           }

       }

       public function UpateRecord($id, $fname, $lname, $dob, $email, $contact, $specialty)
         {
            
            try
              {
                
                $query = "UPDATE `attendee` SET `firstname`= :fname,`lastname`=:lname,`DOB`= :dob,`email`= :email,`contactnumber` = :contact,`specialty_id`= :specialty WHERE attendee_id = :id";

                $stmt = $this->db->prepare($query);
                
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':specialty',$specialty);

                $stmt->execute();
                return true;
             }
           catch(PDOException $err)
             {
                 echo $err->getMessage();
                 return false;
             }

         }

       public function getAttendeeDetail($id)
       {
           $query = "SELECT * FROM attendee WHERE attendee_id = :id";
           $stmt =$this->db->prepare($query);
           $stmt->bindparam(':id',$id);
          $stmt->execute();
          $res = $stmt->fetch();
           return  $res;


       }

       public function getAttendee()
       {
           $query = "SELECT * FROM attendee a inner join specialties s on a.specialty_id = s.specialty_id";
           $result = $this->db->query($query);
           return $result;
       }

    public function getSpecialties()
       {
           $query = "SELECT * FROM specialties";
           $result = $this->db->query($query);
           return $result;
       }

    public function deleteRecord($id)
       {
           try{

            $query = "DELETE FROM attendee WHERE attendee_id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
           }
         catch(PDOExecption $e)
           {
                echo $e->getMessage();
                return false;
           }
       }

   }

?>