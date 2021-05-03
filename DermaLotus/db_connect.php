<?php
	session_start();
	$servername="localhost";
	$username="root";
	$password = "";
	$dbname ="dermalotus";

	$conn = mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn){
		echo "<p style='color:red;'>Unable to connect to the database.</p>";
	}
	
	
		$usergender= "";
		$UserLName="";
		$UserFName="";
		$UserPhone="";
		$CityAddress="";
		$CountryAddress="";
		$StreetAddress="";
		$UserEmail="";
		$UserPass="";
		$UserConfirmPass="";
	if(isset($_POST['btnSave'])){
		$usergender= $_POST['user_gender'];
		$UserLName=$_POST['UserLName'];
		$UserFName=$_POST['UserFName'];
		$UserPhone=$_POST['UserPhone'];
		$CityAddress=$_POST['CityAddress'];
		$CountryAddress=$_POST['CountryAddress'];
		$StreetAddress=$_POST['StreetAddress'];
		$UserEmail=$_POST['UserEmail'];
		$UserPass=$_POST['UserPass'];
		$UserConfirmPass=$_POST['UserConfirmPass'];

		if ($UserPass != $UserConfirmPass) 
		{
			header('location: index.php?registererror');
		}
		else{
			$idQuery= "SELECT UserEmail from users where UserEmail = '$UserEmail'";
			$search = mysqli_query($conn,$idQuery);
			$row =mysqli_num_rows($search); 
			if($row>0){

				echo"<p style='color:red;'>User email already exist. Please use another Email.</p>";
			}else{

				$insert ="INSERT into users(UserLName, UserFName, UserGender, UserPhone, CityAddress, CountryAddress, StreetAddress, UserEmail, UserPass)
				VALUES('$UserLName','$UserFName','$usergender','$UserPhone','$CityAddress','$CountryAddress','$StreetAddress','$UserEmail','$UserPass')";
				$result= mysqli_query($conn,$insert);
				if( !$result )
				{
					echo "<p style='color:red;'>Record not saved. Please check your query.</p>";
				}
				else{
				echo"<p style='color:green;'>Record saved.</p>";
				header('location:index.php');

				}
			}	
		}
		
	}

	/* LOG IN */
	if(isset($_POST['btnLogin'])){

		$UserEmail=$_POST['UserEmail'];
		$UserPass =$_POST['UserPass'];

		$Query= "SELECT * from users where UserEmail = '$UserEmail' AND UserPass='$UserPass' ";
		$search = mysqli_query($conn,$Query);
		//$row =mysqli_num_rows($search); 
		$row = mysqli_fetch_assoc($search);

		if(mysqli_num_rows($search)>0)
		{
			$_SESSION['UserID']= $row['UserID'];
			$_SESSION['UserEmail']=$row['UserEmail'];
			header('location:index.php?');
		}else{
			header('location:index.php?error');
		}

	}

?>