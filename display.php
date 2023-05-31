<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="footer.css">
		<link rel="stylesheet" href="home.css">
		<link rel="stylesheet" href="style.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
	<body>		  
		  <?php
      include("conn.php");
      $id=$_GET['id'];
      $conn=new mysqli($servername,$username,$password,$dbname);
      if($_SERVER['REQUEST_METHOD']=="POST")
    {
      $rank=$_POST['rank'];
    }
     ?>
		<nav>
			<h1>PES UNIVERSITY</h1>
			<a   class="active"href="login.php">Login</a>
			<a href="register.php">Register</a>
			<a href="#">Contact us</a>
			<a href="#">About</a>
			<a href="index.php" >Home</a>
			
	
      
      
      

<div class="container">
<table class="table table-striped table-hover"  method="post">
                        <thead>
                            <tr>

                                <th>Photo</th>
                                <th>Student name</th>
                                <th>Date of Birth</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Branch</th>
                                <th>rank</th>
                                <!-- <th>Branch</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT  * FROM `registration` WHERE id =$id";
                            $result = $conn->query($sql);
                            
                            // print_r(mysqli_fetch_array($result));
                            
                            while ($row = mysqli_fetch_array($result,)) {
                            ?>
                                <tr>
                                    <!-- <td style="display: flex;align-items: center;">
                                  </span>
                                    </td> -->
                                    <td><?php echo $row['image']?></td>
                                    <td><?php echo $row['fullname']; ?></td>
                                    <td><?php echo $row['dob']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['mobile']; ?></td>
                                    <td><?php echo $row['adress']?></td>
                                    <td><?php echo $row['branch']?></td>
                                    <td><?php echo $row['rank']?></td>
                                    

                                    
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                    <table class="table table-striped table-hover"  method="post">
                        <thead>
                            <tr>

                                <th>PUC Marks</th>
                                <th>PUC Card</th>
                                                                <th>UG marks</th>
                                <th>UG Card</th>
                               
                                <th>Frist Preference</th>
                                <th>Second Prefrenece</th>
                                <!-- <th>Branch</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql1 = "SELECT  * FROM `selection` WHERE id =$id";
                            $result1 = $conn->query($sql1);
                            
                            // print_r(mysqli_fetch_array($result));
                            
                            while ($row = mysqli_fetch_array($result1)) {
                            ?>
                                <tr>
                                    <!-- <td style="display: flex;align-items: center;">
                                  </span>
                                    </td> -->
                                    <td><?php echo $row['pucmarks']?></td>
                                    <td><?php echo $row['puccard']; ?></td>
                                    <td><?php echo $row['ugmarks']; ?></td>
                                    <td><?php echo $row['ugcard']; ?></td>
                                    <td><?php echo $row['firstpref']; ?></td>
                                    <td><?php echo $row['secondpref']?></td>
                                  
                                    

                                    
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                    <table class="table table-striped table-hover"  method="post">
                        <thead>
                            <tr>

                                <th>DD Number</th>
                                <th>DD Amunt</th>
                                <th>Application Number</th>
                                <th>Slot</th>
                                
                                <!-- <th>Branch</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql2 = "SELECT  * FROM `dddetails` WHERE id =$id";
                            $result2 = $conn->query($sql2);
                            
                            // print_r(mysqli_fetch_array($result));
                            
                            while ($row = mysqli_fetch_array($result2)) {
                            ?>
                                <tr>
                                    <!-- <td style="display: flex;align-items: center;">
                                  </span>
                                    </td> -->
                                    <td><?php echo $row['ddnum']?></td>
                                    <td><?php echo $row['ddamount']; ?></td>
                                    <td><?php echo $row['applno']; ?></td>
                                 
                                    <td><?php echo $row['slot']; ?></td>
                                   
                                    

                                    
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                    <button class="submit"name="submit">submit</button>

</div>

    <script src="script.js"></script>

            <!-- <footer class="footer">
			
			<ul class="social-icon">
			  <li class="social-icon__item"><a class="social-icon__link" href="#">
				  <ion-icon name="logo-facebook"></ion-icon>
				</a></li>
			  <li class="social-icon__item"><a class="social-icon__link" href="#">
				  <ion-icon name="logo-twitter"></ion-icon>
				</a></li>
			  <li class="social-icon__item"><a class="social-icon__link" href="#">
				  <ion-icon name="logo-linkedin"></ion-icon>
				</a></li>
			  <li class="social-icon__item"><a class="social-icon__link" href="#">
				  <ion-icon name="logo-instagram"></ion-icon>
				</a></li>
			</ul>
			<ul class="menu">
			  <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
			  <li class="menu__item"><a class="menu__link" href="#">About</a></li>
			  <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
			  <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
			  <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>
		
			</ul>
			<p>&copy;PesuAcademy| All Rights Reserved</p>
		  </footer>
		  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
		 -->
		
		
		

		  	</body>
</html>