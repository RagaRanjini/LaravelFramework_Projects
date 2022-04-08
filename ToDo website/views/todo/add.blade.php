<?php
session_start();
$conn=mysqli_connect('localhost','ragaranjini','phpmyadmin@raji13','todos');
$show = array('title' => '', 'desc' => '' , 'priority'=> '' );
if(isset($_POST['add'])){
	$title = $_POST['title'];
    $description = $_POST['descriptionn'];
    $priority = $_POST['priority'];
	if(empty($_POST['title'])){
		$show['title'] = '* Title is required *';
	}else if(empty($_POST['descriptionn'])){
        $show['desc'] = '* Description is required *';
    }else if(empty($_POST['priority'])){
        $show['priority'] = '* Priority is required *';
    }else{
        function function_alert($message) {
      
            // Display the alert box 
            echo "<script>alert('$message');</script>";
        }
        $query = "SELECT * FROM todolist WHERE title='$title' ";
        $query_run = mysqli_query($conn,$query);
        if (mysqli_num_rows($query_run)==1) 
{
    function_alert("This ToDo already exists !");
}else{
    $sql = "INSERT INTO todolist(title,descriptionn,priority) VALUES ('$title','$description','$priority')";
        if(mysqli_query($conn,$sql)){
            function_alert("New ToDo added !");
        }else{
            function_alert("*error interupt* --check DB connection ! ");
        }
}
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Adding ToDo</title>
        <link href="css/app.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/todo/add.css" type="text/css" />
    </head>
    <body>
        <form action="#" method="POST">
        {{ method_field('get')}}
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="title for your ToDo">
            <p class="red-text" ><?php echo $show['title']; ?></p>
            <br>
            <label for="description">Description</label>
            <textarea name="descriptionn" id="description"></textarea>
            <p class="red-text" ><?php echo $show['desc'] ?></p>
            <br>
            <label for="priority">Priority</label>
            <input type="number" name="priority" id="priority" placeholder="priority in the list">
            <p class="red-text" ><?php echo $show['priority'] ?></p>
            <br>
            <input class="btn btn-dark" type="submit" id="btn" name="add">
        </form>
        <br>
        <br>
        
        <button class="btn btn-primary" ><a href="/">Go Back</a></button>
    </body>
</html>