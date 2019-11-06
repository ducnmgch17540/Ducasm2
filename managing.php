<?php 
require_once './connect.php';  
if(isset($_POST["aduser"]) && isset($_POST["adpass"]))
{
	$user = $_POST["aduser"];
	$pass = $_POST["adpass"];
	$sql ="SELECT * FROM account WHERE username = '$user' AND pwd= '$pass'";
	$rows = pg_query($sql);
	if(pg_num_rows($rows)==1) { ?>
		<script>
            alert("Login successfully!!");
        </script>
    <?php
    } else { 
        ?>
            <script>
                alert("Wrong Username/Password");
                window.location.href = "/index.php";
            </script>
        <?php }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/3fa7701fe0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="body">



            <div class="container">
                    <form class="form-horizontal" action="/admin/add/student" method="POST">
            
                        <div class="register-new-student">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <h2>Product Management</h2>
                                    <hr>
                                </div>
                            </div>
                        </div>

                           <!-- ID -->
                           <div class="row">
                                <div class="col-md-3 field-label-responsive">
                                    <label for="name">ID</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon" style="width: 2.6rem"><i class="fas fa-id-card"></i></div>
                                            <input type="text" name="id" class="form-control" id="name" placeholder="ID" required autofocus>
                                        </div>
                                    </div>
                                </div>                       
                            </div>     
                        
                        <!-- Name -->
                        <div class="row">
                            <div class="col-md-3 field-label-responsive">
                                <label for="name">Name</label>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <div class="input-group-addon" style="width: 2.6rem"><i class="far fa-user"></i></div>
                                        <input type="text" name="proname" class="form-control" id="name" placeholder="Name" required autofocus>
                                    </div>
                                </div>
                            </div>                       
                        </div>     
                        
                         <!-- Price -->
                         <div class="row">
                                <div class="col-md-3 field-label-responsive">
                                    <label for="name">Price</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon" style="width: 2.6rem"><i class="fas fa-money-check-alt"></i></div>
                                            <input type="text" name="price" class="form-control" id="name" placeholder="Price" required autofocus>
                                        </div>
                                    </div>
                                </div>                       
                            </div>      

                             <!-- Description  -->
                        <div class="row">
                                <div class="col-md-3 field-label-responsive">
                                    <label for="name">Description</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon" style="width: 2.6rem"><i class="fas fa-user-edit"></i></div>
                                            <input type="text" name="descrip" class="form-control" id="name" placeholder="Description" required autofocus>
                                        </div>
                                    </div>
                                </div>                       
                            </div>     
                            
                            <div class="row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-6">
                                    <button type="submit"  value="Add" class="btn btn-success"><i class="fa fa-user-plus"></i> <a href="/add.php" style="text-decoration: none; color: white;">Add More</a></button>
                                </div>
                            </div>







            
            <?php
            require_once './database.php';
            $sql = "SELECT * FROM product";
            $stmt = $pdo->prepare($sql);
            foreach ($pdo->query($sql) as $row) {
            ?>
                <tr>
                    <td class="info"><?php echo $row['productid']?></td> 
                    <td class="info"><?php echo $row['proname']?></td> 
                    <td class="info"><?php echo $row['price']?></td> 
                    <td class="info"><?php echo $row['descrip']?></td> 
                </tr>
            <?php
            }
            ?> 
           

        
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>