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
  $id=$_GET['id'];
?>
      
		<nav>
			<h1>PES UNIVERSITY</h1>
			<a   class="active"href="login.php">Login</a>
			<a href="register.php">Register</a>
			<a href="#">Contact us</a>
			<a href="#">About</a>
			<a href="index.php" >Home</a>
			
		<div class="container">
      <header>Registration</header>

      <form action="database.php?id=<?php echo $id?>"method="post">
        <div class="form first">
          <div class="details personal">
            <span class="title">DD Information</span>

            <div class="fields">
              

              <div class="input-field">
                <label>DD number</label>
                <input name="ddn"
                  type="number"
                  placeholder="DD number"
                  required
                />
              </div>
              

              <div class="input-field">
                <label>DD Amount</label>
                <input name="damn"
                  type="number"
                  placeholder="DD number"
                  required
                />
              </div>
              <div class="input-field">
                <label>PASSAT RANK</label>
                <input
                name="rank"
                  type="text"
                  placeholder="Enter your PASSAT RANK"
                  required
                />
              </div>
              
            </div>
            </div>
            
			<button class="submit" name="dd">Submit</button>
          </div>
          </div>
        </div>
      </form>
    </div>

    <script src="script.js"></script>

            <footer class="footer">
			
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
		
		
		
		

		  	</body>
</html>