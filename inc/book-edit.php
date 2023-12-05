<?php
include ("connection.php" );
$title =  $_POST['title' ]; 
$isbn =  $_POST['isbn' ]; 
$author =  $_POST['author' ]; 
$publisher =  $_POST['publisher' ]; 
$year_published =  $_POST['year_published' ]; 
$category =  $_POST['category' ];
$id = $_POST['id' ];

$sql= "UPDATE `books`  SET  `title` = '". $title."'  , `isbn` =  '". $isbn."' , 
`author`  =  '".$author ."' , `publisher`  ='".$publisher ."', `year_published`  ='".$year_published ."', `category`  ='".$category ."' WHERE `id` = $id " ;

if(mysqli_query($conn , $sql)){
    $response = [
        'status'=>'ok',
        'success'=>true,
        'message'=>'Record updated succesfully!'
    ];
    print_r(json_encode($response));
}else{
    $response = [
        'status'=>'ok',
        'success'=>false,
        'message'=>'Record updated failed!'
    ];
    print_r(json_encode($response));
} 
?>