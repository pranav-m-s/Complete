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
				box-shadow: 1px 2px 2px 6px #eee;
				margin: auto;
				padding: 25px;
			}
		</style>
</head>

<body>
		<?php   
			include 'conn.php';
			$question_id = $_GET['id'];

			$query = "SELECT * FROM `answer` WHERE   `question_id` = $question_id ";



// I am getting the following error
// mysqli_fetch_row() expects parameter 1 to be mysqli_result, boolean given in D:\Java 64bit\Apache\wamp\www\project\Question and answer\answer.php on line 32

			$result = mysqli_query($con, $query);
			$row = mysqli_fetch_row($result);
			$question_id = $row[2] ;

			$answer = $row[3]; 
		 
		?>


		<table id="Table">
			
		</table>


		<script type="text/javascript">
				 

						
							function answer_call(){	
								alert("answer_call");
									$.ajax({
										url: 'view1.php',
										type:'get' ,
										data:{

										},
										success:function(res){
										var obj = JSON.parse(res)
										var table_content = '';
										$('#Table').find( 'tr:not(:first)' ).remove();
                      				    $.each(obj,function(index,value){


                      				    	alert("Inside function");
 
									table_content += "<tr>";
									table_content += "<td>"+value.answer+"</td>";	
									table_content += "</tr>"

												

												// <?php 
												// 		if ($result) {
												// 			echo $answer;
												// 			alert($answer);
												// 		}
												//  ?>

												 alert("Outside alert");

									});
                      				    $("#Table").append(table_content);
 
								}

							})
								}

								 
								answer_call();



</script>






</body>