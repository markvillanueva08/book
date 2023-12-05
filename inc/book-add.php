<?php
 include ("connection.php" ); 
$title =  $_POST['title' ]; 
$isbn =  $_POST['isbn' ]; 
$author =  $_POST['author' ]; 
$publisher =  $_POST['publisher' ]; 
$year_published =  $_POST['year_published' ]; 
$category =  $_POST['category' ]; 
$sql=  "INSERT  INTO `books`(`title` , `isbn` , `author` , `publisher` , `year_published` , `category`) 
VALUE  (' {$title} ' , ' {$isbn } ' , ' {$author } ' , ' {$publisher } ' , ' {$year_published } ' , ' {$category } ')" ; 

if(mysqli_query($conn , $sql)){
    $response = [
        'status'=>'ok',
        'success'=>true,
        'message'=>'Record created succesfully!'
    ];
    print_r(json_encode($response));
}else{
    $response = [
        'status'=>'ok',
        'success'=>false,
        'message'=>'Record created failed!'
    ];
    print_r(json_encode($response));
} 
?> 