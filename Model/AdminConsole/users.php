<?php
session_start();
include_once("../../Controller/DBConnection/DBConnectionController.php");

class getSusers{
    
    public function confirmUser(){
      
        // Create connection
        $dbConn = new DBConnectionController();
        $conn = $dbConn->getConnetion();
       
       if(isset($_POST["confirm"])){
          
            if(!empty($_POST['enable'])) {
                                         
                 $user_id=$_POST['enable']; 
                 $N = count($user_id);
                 for($i=0; $i < $N; $i++)
                {
                    $query= "UPDATE s_user SET usertype='ok' WHERE ID='$user_id[$i]'";
                    $result = mysqli_query($conn,$query)or die(mysqli_error());
                    
                }
                echo '<meta http-equiv="refresh" content="1; URL=../../View/AdminConsole/Susers.php" />';
                echo '<meta http-equiv="refresh" content="1; URL=../../View/AdminConsole/Requests.php" />';
            }
            
       }
       
       if(isset($_POST["ignore"])){
           if(!empty($_POST['enable'])) {
                                         
                 $user_id=$_POST['enable']; 
                 $N = count($user_id);
                 for($i=0; $i < $N; $i++)
                {
                    $query= "DELETE FROM s_user WHERE ID='$user_id[$i]'";
                    $result = mysqli_query($conn,$query)or die(mysqli_error());
                }
                
                echo '<meta http-equiv="refresh" content="1; URL=../../View/AdminConsole/Requests.php" />';
                echo '<meta http-equiv="refresh" content="1; URL=../../View/AdminConsole/Susers.php" />';
            }
       }
       
       if(isset($_POST["ignore_guser"])){
           if(!empty($_POST['enable'])) {
                                         
                 $user_id=$_POST['enable']; 
                 $N = count($user_id);
                 for($i=0; $i < $N; $i++)
                {
                    $query= "DELETE FROM g_user WHERE ID='$user_id[$i]'";
                    $result = mysqli_query($conn,$query)or die(mysqli_error());
                }
                
                echo '<meta http-equiv="refresh" content="1; URL=../../View/AdminConsole/Gusers.php" />';
                
            }
       }
     
    }
    
}

$object1 = new getSusers();
$object1->confirmUser();

