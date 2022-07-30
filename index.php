<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2>
  </div>

    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
           <label>Username</label>
           <input type="text" name="user" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
           <label>Email Id</label>
           <input type="text" name="email" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
           <label>Mobile</label>
           <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
           <label>Comments</label>
           <textarea class="form-control" name="comments">
     </textarea>  
         
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>

  </section>

  <footer>
     <p class="p-3 bg-dark text-white text-center">Desinged By @RajarshiYadav
  </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>