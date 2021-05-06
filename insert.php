<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Hello, world!</title>
    <style type="text/css">
      #modal{
             background: rgb(0,0,0,0.7);
             position: fixed;
             left: 0;
             top: 0;
             width:100%;
             height:100%;
             z-index: 100;
             display:none ; 
      }
      #modal-form{
        background: #fff;
        width:30%;
        position: relative;
        top: 20%;
        left: calc(38%);
        padding: 15px;
        border-radius: 4px;  
      }
      #close-btn
      {
        background:red;
        color: white;
        width:30px;
        height:30px;
        line-height:27px;
        text-align:center;
        border-radius:50%;
        position: absolute;
        top:-15px;
        right:-15px;      
        cursor: pointer;
      }
    </style>
  </head>
  <body>

  	<div class="container" >
  		<div class="header text-center">
        <h1>Insert Records With Ajax & PHP</h1>
        <div class="bg-secondary p-1 text-white"  >
        <form id="addform"> 
        Name: <input type="text" id="name">
        User Name: <input type="text" id="username">
        Password: <input type="text" id="password">
      <input type="submit" class="btn btn-primary" id="save" value="Save">
      </form>
      </div>
  		<div id="load-data" class="mt-5"></div>
       <div id="modal">
         <div id="modal-form">
           <h2><hr>Edit From<hr></h2>
           <table width="100%">
             
           </table>
           <div id="close-btn">x</div>
         </div>
       </div>  	


    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
       <script type="text/javascript">
         $(document).ready(function(){
          function loadtable(){
            $.ajax({
            url:"ajax-get.php",
            type:"POST",
            success: function(data){
             $('#load-data').html(data);
           }
         });
          }
            loadtable();
            $('#save').on("click",function(e){
              e.preventDefault();
              var nm= $("#name").val();
              var un= $("#username").val();
              var pass= $("#password").val();
                 $.ajax({
                url:"insert-data.php",
                type:"POST",
                data: {name:nm,username:un,password:pass},
                success: function(data){
                  if (data==1){
                    loadtable();
                    $('#addform').trigger('reset');
                  }else{
                   alert("can't Save record")
                  }
                }
           
                });   
            })

            $(document).on("click","#delete-btn",function(){
                 var userId=$(this).data("id");
                 $.ajax({
                      url:"ajax-delete.php",
                      type:"POST",
                      data: {id:userId},
                      success: function(data){
                        loadtable();
                      }
                    });
            });
            $(document).on("click","#edit-btn",function(){
               $('#modal').show();
               var userId=$(this).data("eid");
               $.ajax({
                      url:"ajax-edit.php",
                      type:"POST",
                      data: {id:userId},
                      success: function(data){
                        $('#modal-form table').html(data);
                      }
                    });
            });
            $('#close-btn').on("click",function(){
               $('#modal').hide();
             });

             $(document).on("click","#edit-save",function(){
                 var usId=$("#e-id").val();
                 var uname=$("#ename").val();
                 $.ajax({
                url:"ajax-update-form.php",
                type:"POST",
                data: {id:usId,name:uname},
                success:function(data){
                  if (data==1){
                    $('#modal').hide();
                     loadtable();
                  }
                  }
                })
             });
           });
                      
        
           
         

       </script>  
  </body>
</html> 