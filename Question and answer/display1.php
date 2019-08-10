 <!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
			<style type="text/css">
				h2{
					color:#000;
					font-size: 25px;
					font-style: bold;
					font-weight: 600;
					text-align: left;
					font-family: Arial;
				}
				body{
					margin: 0px;
					background-color: #c8dee3;
					
				}
				#container-div
				{
					
					width: 100%;
					height: 100vh;

					margin-top: 80px;
					width: 60%;
					background-color: #fff;
					margin-left: auto;
					border-radius: 4px;
					box-shadow: 2px 14px 46px -11px rgba(0,0,0,0.75);
					margin-right: auto;
				}

				.header
				{
					width: 100%;
					display: block;
					position: fixed;
					top: 0;
					display: inline-flex;
					float: right;
					box-shadow: 3px 15px 20px -11px rgba(0,0,0,0.75);
					background-color: #d12519;
				}

				.nav-bar
				{
					height:  50px;
					float: right;				
				}

				.nav-search
				{
					margin: 10px;
					border-radius: 4px;
					border-style: 1px solid #ccc;
				}

				.wrapper
				{
					float: right;
				}

				.top-item
				{
					padding: 10px;
					padding-left: 30px;
					padding-right: 30px;
				}

				.top-input
				{
					width: 100%;
					font-family: Arial;
					font-weight: 500;
					font-size: 15px;
					resize: none;;
					height: 80px;
				}

			.button-post
			{
				width: 160px;
				padding: 10px;
				font-family: Arial;
				font-size: 15px;
				border-radius: 4px;
				border:1px solid #ccc;
				color:#fff;
				background-color: #3458eb;
			}

			.main-content
			{
				padding: 10px;
				padding-left: 30px;
				padding-right: 30px;
			}

			</style>
</head>
<body>
	<form>
	<div class="header">
		<div class="nav-bar">
			<div class="wrapper">


			<input type="text" class="nav-search" name="">
			<button>
				<a href="">search</a>
			</button>
			</div>
		</div>
	</div>
	<div id = "container-div">
	<div class="top-item">
		<h2>Post your question here?<h2>
		<textarea class="top-input" name="question" placeholder="Enter your question" id="question"></textarea>
		<input  type="submit" value="Post" class="button-post">
	</div>



	<!-- It is not processing this part  -->
	<!-- <div class="main-content">
		<table  >question
			<th >
			<a id="question"></a>
		</th>
		<tr>
			<td>
				<a>Answer</a>
			</td>
			<td>
				<a>Comments</a>
			</td>
		</tr>
		</table> -->
 
	

<div  align="center">
<table id="Table" >

	<table id="Table2">
		
	</table>
 
</table>
</div>


</form>

<script type="text/javascript">
			 

				function call(){alert("ALERT");
					$.ajax({
						url: 'view.php',
						type:'get',
						data:{

						},
						success:function(res){
							alert("ALERT");
				var obj = JSON.parse(res)
				var table_content = '';
				$('#Table').find( 'tr:not(:first)' ).remove();
                        $.each(obj,function(index,value){
									table_content += "<tr>";
									table_content += "<td >" + value.question_id + "</td>"
									table_content += "<td>"+value.question+"</td>"; 
										



										alert(value.question_id);






										// answer_call(question_id);
									  // table_content+="<td><a class='btn btn-primary' href='answer.php?id="+value.id+"'>Answer</a><button class='btn btn-danger' onclick='dele("+value.id+")'>Delete</button><button class='btn btn-info' onclick='studentView("+value.id+")'>View</button><a class='btn btn-primary href ='answer.php?id =" + value.id + "'></a></td>";
           //                  table_content+="</tr>";

								 
								});
								$("#Table").append(table_content);

 }
})
				}
 
								call();
								 



</script>

</body>
</html>