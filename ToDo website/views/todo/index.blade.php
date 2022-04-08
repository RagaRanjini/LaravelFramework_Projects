<?php
session_start();
$conn=mysqli_connect('localhost','ragaranjini','phpmyadmin@raji13','todos');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My ToDos</title>
        <link href="css/app.css" rel="stylesheet" type="text/css" />
        <style>
            img{
                width:500px;
                height:500px;
                margin:150px 70px 100px 100px;
            }
            .card{
                width:500px;
                height:auto;
                margin:150px 70px 100px 100px;
                border-width:7px;
            }
            button{
                border-width:4px;
            }
            button a{
                text-decoration:none;
            }
            button a:hover{
                color:black;
            }
            button a b{
                font-family: Sans-serif;
                font-size: 12pt;
            }
            h4 a{
                text-decoration: none;
                color: black;
            }
            .desc{
                display: none;
            }
            .title:hover + .desc{
                display: block;
                color: red;

            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col">
                <img src="images\todo1.png" alt="todo_image">
            </div>
            <div class="col">
                <div class="card border-primary">
                    <div class="card-header border-primary bg-primary text-white">
                        <div class="row">
                            <div class="col-8">
                            <h2>< Things to do ></h2>
                            </div>
                            <div class="col-2">
                                <button class="rounded border-white bg-light text-primary" style="padding:5px 10px 5px 10px;"><a href="/add"><b>+</b></a></button>
                            </div>
                            <div class="col-2">
                                <button class="rounded border-white bg-light text-primary" style="padding:5px 10px 5px 10px;"><a href="/delete"><b>delete</b></a></button>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h3>Title</h3>
                            </div>
                            <div class="col">
                                <h3>Priority</h3>
                            </div>
                        </div>
                        <?php
                        $sql = "SELECT title,priority,descriptionn FROM todolist ORDER BY priority";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){
                                ?>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="title"><h4><a href="#"><?php echo $row['title'];?></a></h4></div>
                                        <div class="desc"><p><?php echo $row['descriptionn'];?></p></div>
                                    </div>
                                    <div class="col">
                                        <h4><?php echo $row['priority'] ;?></h4>
                                    </div>
                                </div>
                                <?php
                            }
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>