<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      body {
        background-color: #CBAD60;
      }
    </style>
    <br>
    <br>
    <br>
</head>
<body>
  <div class="container text-center">
<div class="card">
  <div class="card-body" style="background-color:#AAC1B1">
    <div class="row">
        <div class="col-sm-7">
            <img src="<?php echo base_url()?>assets/img/logoo.png" width="600">
        </div>
        <div class="col-sm-4">   
            <form>
                <div class="form-group">
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                    <label for="exampleInputEmail1"><h2>Register</h2></label>
                    <input type="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" style="background-color:black">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="email"style="background-color:black">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"style="background-color:black">
                </div>
                <div class="row">
                    <div class="col">
                    <button type="submit" class="btn btn-success">Regis</button>
                    </div>
                    <div class="col">
                    <a type="submit" class="btn btn-info" href="<?php echo base_url()?>login"> Login</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
  </div>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>


</body>
</html>