<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style type="text/css">
         body{
         }
         .navbar{
         background-image: linear-gradient(to right top, #d3b1f9, #d2a9f6, #d0a1f3, #d099f0, #cf91ec, #ca89ec, #c582eb, #c07aeb, #b372ee, #a36bf2, #9064f7, #795ffb);
         }
         #container-div{
         width: 600px;
         height: 700px;
         box-shadow: 1px 1px 1px 1px #ccc; 
         margin:auto;
         padding: 25px
         }
      </style>
   </head>
   <body>
      <div id="navigationbar" >
         <nav class= "navbar navbar-default" >
            <div class="container-fluid">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="file:///D:/Java%2064bit/Apache/wamp/www/project/UI.html#">
                     <h1 style="font-style:italic;">
                        Q
                        <h1>
                  </a>
                  </h1>
                  </h1>
                  </a>
               </div>
            </div>
         </nav>
      </div>
      <div id="container-div">
         <div  align="center">
            <table id="Table" >
               <input type="text" name="name" class="form-control" placeholder="Enter your name">
               <table id="Table2">
               </table>
            </table>
         </div>
      </div>
      <script type="text/javascript">

         function call(){alert("ALERT");
         	$.ajax({
         		url: 'view.php',
         		type:'get',
         		data:{
         		}
            })
      </script>
   </body>
</html>