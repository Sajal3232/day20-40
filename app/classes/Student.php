<?php
namespace App\Classes;

use mysqli;

class Student{
    public function saveStudentInfo($data){
$link=mysqli_connect('localhost','root','','bitm');
     $sql="INSERT INTO students(name,email,mobail) VALUES ('$data[name]','$data[email]','$data[mobail]')";
   if(mysqli_query($link,$sql)){
      $message="student information save successfully";
      return $message;
   }else{
       die("error problem".mysqli_error($link));
   };


    }


    public function viewStudentInfo(){
        $link=mysqli_connect('localhost','root','','bitm');
        $sql="SELECT * FROM students";
        if(mysqli_query($link,$sql)){
            $messageResult=mysqli_query($link,$sql);
            return $messageResult;
            
         }else{
             die("error problem".mysqli_error($link));
         };



    }
}


?>