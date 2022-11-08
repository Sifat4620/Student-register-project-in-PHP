<?php
include "db.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Register form</title>
  </head>
  <body>
   <section class="Reg_form">
    <div class="row">
        <div class="offset-3 col-md-6">
        <h1>Register form</h1>
        </div>
    </div>
   </section>

   <section class="nav_section">
    <div class="row">
        <div class="offset-2 col-md-8">
            <form action="" method="POST">     
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Full name</label>
                    <input type="text" class="form-control" name="name">
                 </div>    
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" >Email address</label>
                    <input type="email" class="form-control" name="email">
                    </div>   
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mobile number</label>
                    <input type="text" class="form-control" name="mobile">
                    </div> 
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" >Address</label>
                    <input type="text" class="form-control" name="address">
                    </div>  
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Other</label>
                    <input type="text" class="form-control" name="other">
                    </div> 
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                   <button type="submit" class="btn btn-primary" name="reg_bth">Submit</button>
            </form>

            <?php
                if(  isset($_POST['reg_bth']) ){
                    $name    = $_POST['name'];
                    $email   = $_POST['email'];
                    $mobile  = $_POST['mobile'];
                    $address = $_POST['address'];
                    $other   = $_POST['other'];
                      
                   
                   $sql="INSERT INTO student(name,email,mobile,address,other) VALUES('$name','$email','$mobile','$address','$other')";
            
                    $addstud=mysqli_query($db,$sql);

                    if($addstud){
                            header("location:index.php");
                    }
                    else{
                        die("Error".mysqli_error($db));
                    }
                    

                }
            ?>


        </div>
        <div class="col-md-2"></div>
    </div>
   </section>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>