
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


		<nav>
			<h1>PES UNIVERSITY</h1>
			<a   class="active"href="login.php">Login</a>
			<a href="register.php">Register</a>
			<a href="#">Contact us</a>
			<a href="#">About</a>
			<a href="index.php" >Home</a>
			
		<div class="container">
      <header>Registration</header>

      <form action="database.php" method="post">
        <div class="form first">
          <div class="details personal">
            <span class="title">Student Details</span>

            <div class="fields">
              <div class="input-field">
                <label>Full Name</label>
                <input type="text" name="name" placeholder="Enter your name" required />
              </div>

              <div class="input-field">
                <label>Date of Birth</label>
                <input type="date" name="dob" placeholder="Enter birth date" required />
              </div>

              <div class="input-field">
                <label>Email</label>
                <input type="email" name="email"placeholder="Enter your email" required />
                
              </div>

              <div class="input-field">
                <label>Mobile Number</label>
                <input
                  type="text"name="num" pattern="[6-9][0-9]{9}"
                  placeholder="Enter mobile number"
                  required
                />
              </div>

              <div class="input-field">
                <label>Address Type</label>
                <input
                  type="text" name="add"
                  placeholder="Permanent or Temporary"
                  required
                />
              </div>
              <div class="input-field">
                <label>Branch</label>
                <select  name="branch"required>
                  <option disabled selected>Select Branch</option>
                  <option>EC</option>
                  <option>RR</option>
                </select>
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

              <div class="input-field">
                <label>PAN Number</label>
                <input
                  type="password" name="pan"
                  placeholder="Enter your PAN Number"
                  required
                />
              </div>

              <div class="input-field">
                <label>Aadhaar Number</label>
                <input
                  type="number" name="adar"
                  placeholder="Enter your Aadhaar Number"
                  required
                />
              </div>

              <div class="input-field">
                <label>Password</label>
                <input
                  type="password" name="pass"
                  placeholder="Enter your Password"
                  required
                />
              </div>
              <div class="input-field">
                <label>Confirm Password</label>
                <input
                  type="password" name="cpass"
                  placeholder="Enter your Password"
                  required
                />
              </div>

              <div class="input-field image">
                <label>Select Image</label>
                <input type="file" name="image" required />
              </div>
            </div>
            <!-- <a href='selection.php'><input type="button" class="submit" value="submit" name="submit" required></a> -->
            <button class="submit"name="submit">submit</button>
              <!-- <span class="btnText">Next</span>
               <i class="uil uil-navigator"></i>   -->
            
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