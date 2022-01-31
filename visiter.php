<?php  
	session_start();


?>

<!DOCTYPE html >

<head>
  <meta charset="utf-8" />
  <title>場地管理表</title>

  <style type="text/css">
  	
	.container{
		display:flex;
		justify-content: center;
		align-items: center;
	}
	
	.box {
	width: 200px;
	height:200px;
	background-image: linear-gradient(135deg, #FFD306, #FFE982);
	text-decoration: none;
	text-align: center;
	border-radius: 50px;
	border-style:hidden;
	font-family:Microsoft JhengHei;
	font-size:20px;
	float:left;
	margin:30px;
	font-weight: bold;
	letter-spacing: 5px;
	top: 50%;
	}

	input[type="submit"]{
	width: 200px;
	height:200px;

	background-image: linear-gradient(135deg, #FFD306, #FFE982);
	text-decoration: none;
	text-align: center;
	border-radius: 50px;
	border-style:hidden;
	font-family:Microsoft JhengHei;
	font-size:18px;
	float:left;
	margin:30px;
	font-weight: bold;
	letter-spacing: 5px;
	}

	select {
  	height: 25px;
  	width: 130px;
  	border-radius: 5px;
	}

	h2{
  	padding-top: 70px;
  	text-align:center;
  	font-family:Didot;
  	font-size:50px;
	}

	body{
	background:url("menu.png");
	background-size:1280px 800px;
	background-repeat:no-repeat;
	}

	select:focus{
  	outline-color: #FFD306;
  	border-style: solid;
	}

	#t{
		padding-top: 75px;
		font-size: 18px
	}

	input[type="button"]{
  		width: 90px;
  		height: 30px;
  		background-color: #6C6C6C;
  		color: white;
  		border-radius: 30px;
  		border: none;
  		text-decoration: none;
  		top:0px;
  		right:0px;
	}


  </style>

</head>


<body>

		<input type="button" value="登出" onclick="location.href='http://localhost/預約場地系統_v2/login.html'">
		<h2>Main menu</h2>

		<div class="container">

		<div class="box">
		<form action>
		<div id="t">場地租借</div>
		<select align="center" name="sports" onChange="location = this.options[this.selectedIndex].value;" >
			<option value="#" selected>請選擇場地</option>
			<option value="http://localhost/預約場地系統_v2/baseball_visiter.php">棒球場</option>
			<option value="http://localhost/預約場地系統_v2/basketball_visiter.php" >籃球場</option>
			<option value="http://localhost/預約場地系統_v2/volleyball_visiter.php">排球場</option>
		</select>
		</form>
						

	</div>
			
				
				

</body>
  
  
</html>