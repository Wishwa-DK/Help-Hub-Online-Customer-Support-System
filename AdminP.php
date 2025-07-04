<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
  </head>
</head>
<body >
    
        <?php
            include "./adminHeader.php";
            include "./sidebar.php";
        ?>

    <br>
    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-user-circle mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Users</h4>
                    <h5 style="color:white;"></h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-ticket mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Tickets</h4>
                    <h5 style="color:white;"></h5>
                </div>
            </div>
            <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-reply-all" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Agent Replies</h4>
                    <h5 style="color:white;"></h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-handshake-o" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Sponsors</h4>
                    <h5 style="color:white;"></h5>
                </div>
            </div>
        </div>
        
    </div>

    <script type="text/javascript" src="./assets/js/script.js"></script>

</body>
 
</html>