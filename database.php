<?php
      include("conn.php");
    //   include("register.php");
    //   include("selection.php");
    //   include("dd.php");
      
      $conn=new mysqli($servername,$username,$password,$dbname);
      $stmt=$conn->prepare("INSERT INTO `registration`( `fullname`, `dob`, `email`, `mobile`, `adress`, `branch`, `rank`, `pan`, `adhar`, `passwwd`, `confpasswd`, `image`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssdssdddsss",$first,$last,$email,$mob,$add,$branch,$rank,$pan,$adhar,$pass,$cpass,$image);
$first=$last=$email=$mob=$add=$branch="";
$rank=$pan=$adhar=$pass=$cpass=$image="";
if(isset($_POST['submit']))    {
$first=$_POST['name'];
// echo $first;
// die();
$last=$_POST['dob'];
$email=$_POST['email'];
$mob=$_POST['num'];
$add=$_POST['add'];
$branch=$_POST['branch'];
$rank=$_POST['rank'];
$pan=$_POST['pan'];
$adhar=$_POST['adar'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$image=$_POST['image'];

if($stmt->execute())
{
  //  print_r($stmt->execute());
  //  exit();
    // header("location"."/selection.php");
    // $sql="SELECT * FROM registration WHERE  "
    $sql = "SELECT * FROM `registration` WHERE email like '%$email%'";
    $row=$conn->query($sql);
    // echo $row['id'];
    $result=mysqli_fetch_array($row);

    $uid=$result['id'];
    echo "<script>window.location.href='http://localhost/webh/selection.php?id=$uid'</script>";
}
}
// $stmt->close();
$stmt1=$conn->prepare("INSERT INTO selection( `rank`, `pucmarks`, `puccard`, `ugmarks`, `ugcard`, `firstpref`, `secondpref`) VALUES (?,?,?,?,?,?,?)");
      $puc=$pucm=$ug=$ugm=$rank=$first=$second="";
$stmt1->bind_param("ddsdsss",$rank,$puc,$pucm,$ug,$ugm,$first,$second);
// if($_SERVER['REQUEST_METHOD']=="POST")
if(isset($_POST['selection']))
    {
      
       $rank=$_POST['rank'];
      $puc=$_POST['puc'];
      $pucm=$_POST['pucm'];
      $ug=$_POST['ug'];
      $ugm=$_POST['ugm'];
      
      
      $first=$_POST['fpref'];
      $second=$_POST['spref'];
      if($stmt1->execute())
      {
        $uid=$_GET['id'];
    echo "<script>window.location.href='http://localhost/webh/dd.php?id=$uid'</script>";
      }
    
    }
//  $stmt1->close();
      
      
$stmt2=$conn->prepare("INSERT INTO `dddetails`( `ddnum`, `ddamount`, `applno`, `slot`) VALUES (?,?,?,?)");
$stmt2->bind_param("ssss",$ddn,$damn,$applno,$slot);
$ddn=$damn=$applno=$slot=$time="";
$randomNumber = rand(10000,99999);

function slot($rank)
{
	
if($rank<=200)
{
	$time="8:30 to 9:30";
}
elseif($rank>200 and $rank<=2500)
{
	$time="11:30 to 12:30";
}
else
{
	$time="3:30 to 4:30";
}
return $time;
}
if(isset($_POST['dd']))
    {
      $ddn=$_POST['ddn'];
      $damn=$_POST['damn'];
      $applno=$randomNumber;
	  $rank=$_POST['rank'];
      $slot=slot($rank);
      
      if($stmt->execute())
{
    // header("location"."/selection.php");
    $uid=$_GET['id'];
    echo "<script>window.location.href='http://localhost/webh/display.php?id=$uid'</script>";
}
    }
// $stmt2->close();
?>