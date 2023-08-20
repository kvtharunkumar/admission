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
            <span class="title">Campus Selection</span>

            <div class="fields">
              

              <div class="input-field">
                <label>PUC marks</label>
                <input name="puc"
                  type="number"
                  placeholder="Puc marks"
                  required
                />
              </div>
              <div class="input-field image">
                <label>PUC card</label>
                <input type="file" name="pucm" required />
              </div>
              <div class="input-field">
                <label>Branch</label>
                <select required>
                  <option disabled selected>Select Branch</option>
                  <option>PCMB</option>
                  <option>PCMC</option>
                  <option>CEMB</option>
                </select>
</div>

              <div class="input-field">
                <label>UG marks</label>
                <input
                  type="number" name="ug"
                  placeholder="UG marks"
                  required
                />
              </div>
              <div class="input-field image">
                <label>UG card</label>
                <input type="file" name="ugm" required />
              </div>
              <div class="input-field">
                <label>Branch</label>
                <select  nrequired>
                  <option disabled selected>Select Branch</option>
                  <option>MECS</option>
                  <option>CSE</option>
                </select>
              </div>

              <div class="input-field">
                <label>PASSAT RANK</label>
                <input
                  type="text" name="rank"
                  placeholder="Enter your PASSAT RANK"
                  required
                />
              </div>

              <div class="input-field">
                <label>Frist Prefrenece</label>
                <select name="fpref" required>
                  <option disabled selected>Select Branch</option>
                  <option>AI</option>
                  <option>ML</option>
                  <option>cyber security</option>
                </select>
              </div>
              <div class="input-field">
                <label>second Prefrenece</label>
                <select name="spref"required>
                  <option disabled selected>Select Branch</option>
                  <option>AI</option>
                  <option>ML</option>
                  <option>cyber security</option>
                </select>
              </div>

              

             
              

              
              </div>
           <button class="submit" name="selection">Submit</button>
          </div>
        </div>
      </form>
    </div>

    <!-- <script src="script.js"></script> -->

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