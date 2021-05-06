<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Hello, world!</title>
  </head>
  <body>

  	<div class="container">
  		<div class="header text-center">
        <h1>Read Json Data</h1>
      <input type="submit" class="btn btn-primary" id="load-button" value="Load Data">
  		<div id="load-data" class="mt-5"></div>
  	


    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
       <script type="text/javascript">
         $(document).ready(function(){
          $('#load-button').on("click",function(e){
           $.ajax({
            url:"ajax-get.php",
            type:"POST",
            success: function(data){
             $('#load-data').html(data);
           }
         });
          // $.post('post.php',{ name:"Deepak",pass:"123"},function(data){
          //     $('#load-data').html(data);

          // $.get('ajax-load.php',function(data){
          //     $('#load-data').html(data);
              

          });
          
           });
                      
        
           
         

       </script>  
  </body>
</html> 