<!--  
    // if(!empty($_POST)){
    //     echo "<pre>";
    //         print_r($_POST);
    //     echo "</pre>";

    //     // Test the file actually works 

    //     // store data in a csv file
    // }else{
    //     echo "No data was transferred";
    // }



     -->

<!--      
// if(isset($_POST['create_file']))
// {
//  $file_name=$_POST['file_name'];
//  $folder="files/";
//  $ext=".txt";
//  $file_name=$folder."".$file_name."".$ext;
//  $create_file = fopen($file_name, 'w');
//  fclose($create_file);
// } -->
















<?php

if ( isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['Email'])){

    $firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$Email = $_POST['Email'];
$filename = $firstName.".txt";
$file = fopen($filename,"w");
fwrite($file, $firstName . " ");
 fwrite($file, $lastName  . " ");
fwrite($file, $Email);
fclose($file);
} 

?>
