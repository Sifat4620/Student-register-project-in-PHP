<?php include("db.php");?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Project student info</title>
  </head>
  <body>
   <section class="Project_title">
    <div class="row">
        <div class="offset-3 col-md-6">
        <h1>Project about a student info collection</h1>
        </div>
    </div>
   </section>

   <section class="nav_section">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
   </section>
    
   <section class="Table">
    <div class="row">
        <div class="col-md-12">
        <table class="table">
                <thead>
                    <tr>
                    <th scope="col">S Number</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Address</th>
                    <th scope="col">Other</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                      $sql="SELECT * FROM student";
                      $readstud=mysqli_query($db,$sql);
                      
                      $i=0;
                      while($row=mysqli_fetch_assoc($readstud)){
                           $id       =$row['id'];
                           $name     =$row['name'];   
                           $email    =$row['email'];
                           $mobile   =$row['mobile'];
                           $address  =$row['address'];      
                           $other    =$row['other']; 
                           $i++;

                     ?> 
                           <tr>
                           <th scope="row"><?php echo $i?></th>
                           <td>  <?php echo $name?>       </td>
                           <td>  <?php echo $email?>      </td>
                           <td>  <?php echo $mobile?>     </td>
                           <td>  <?php echo $address?>    </td>
                           <td>  <?php echo $other?>       </td>
                           </tr>
                    <?php
                      }
                   

                    ?>
                   
                    
                </tbody>
                </table>
        </div>
    </div>
   </section>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>