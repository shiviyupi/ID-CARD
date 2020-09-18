<?php 
class IDModel extends CI_Model
{
	public function __construct()
    {
      parent::__construct();
     
    }

   public function isvalidate($username,$password)
   {
   	    $cond="select * from user where email="."'".$username."'and password="."'".$password."'";
	      $query=$this ->db ->query($cond)->row();	
	      if ($query)
	         return $query;
	      else return false;
   }
   public function get_dataadmin ($username,$password)
   {
       $query= $this->db->query("Select *from user where email='".$username."' and password='".$password."'")->row();
       return $query;
    }
      public function get_data($id)
   {
    $query= $this->db->query("Select *from user where id='".$id."'")->row();
    return $query;
   }
   public function get_admit()
   { 
   	$query= $this->db->query("select *from user where flag!=1");
   	return $query->result();
   }
   public function saverecords($id,$name,$password,$address,$dob,$pic,$email,$mob,$course,$sem,$flag)
   {
		$picture = $_FILES['pic'];
		$pictureName=$picture['name'];
 		$pictureType=$picture['type'];
   		$pictureTmpName=$picture['tmp_name'];
   		$pictureError=$picture['error'];
   		$pictureSize=$picture['size'];
		$pictureExt=explode('.',$pictureName);
  		$pictureActualExt=strtolower(end($pictureExt));
  		$allowed=array('jpg','jpeg','png');
		if(in_array($pictureActualExt,$allowed)){
   			if($pictureError===0){
	 			if($pictureSize<5000000){
	   				$pictureNameNew=uniqid('',true).".".$pictureActualExt;
	   					$pictureDestination='uploads/'.$pictureNameNew;
	   						move_uploaded_file($pictureTmpName,$pictureDestination);
				$query="INSERT INTO `user` (`id`,`name`, `password`, `address`, `dob`, `pic`, `email`, `mob`, `course`, `sem`,`flag`)
				VALUES('$id','$name','$password','$address','$dob','$pictureDestination','$email','$mob','$course','$sem','$flag')";
				$this->db->query($query);
				}else{
	   				echo "File size is too large";
	 			}
   			}else{
	 			echo "Their is an error uploading your file";
   			}
 			}else{
   				echo "You can't upload file of this type";
 			}

   }
    
}
?>