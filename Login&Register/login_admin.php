<!DOCTYPE html>	
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	#container-div{
		width: 600px;
		height: 700px;
		box-shadow: 1px 1px 2px 6px #ccc; 
		margin:auto;
		padding: 25px
	}
	body{
		background-image: linear-gradient(to right top, #90fb04, #fcc300, #ff7016, #ff0087, #f609eb);
	}
	h1{
			color:yellow;
			font-size: 50px;
			font-style: bold;
			text-align: center;
		}
</style>
</head>
<body>
<div id="container-div">
	<div id="div1" class="alert alert-danger"></div>
	<form>
		<!-- <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name"> -->
		<h1>Admin Login</h1><br><br><br>
		<input type="email" name="email" id="email" class="form-control" placeholder="Enter yout Email">
		<br>
		<input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
		<br>
		<!-- <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Enter your number"> -->
		<input type="button" id="btn" name="submit" value="Register" class="btn btn-primary">
	</form>
</div>



<script type="text/javascript">
	$(function(){
		$('#div1').hide()
		$('#btn').click(function(){
			// var name =$('#name').val();
			var email = $('#email').val();
			var password = $('#password').val();
 			// var phone_number=$('#phone_number').val();

			$.ajax({
				url:'verify1.php',
				type:'post',
				data:{
					// name:name,
					email:email,
					password:password,
					// phone_number:phone_number
					 
				},
				success:function(res){
					if(res.includes("success")){
						alert("Successful Login")
						localStorage.setItem("adminEmail",email)
						location.href="index.php"
					}
					else{
						$('#div1').show()
						$('#div1').html(res)
					}
				},
				error:function(){
					alert("failed to insert")
				}
			})
		})
	})
</script>				
</body>
</html>