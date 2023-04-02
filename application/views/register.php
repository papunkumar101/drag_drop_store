<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>User</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  
    </head>
   <body>
       <div class="container"> 
        <h1 class="my-5" >User Register Form</h1>
       <form action= "<?=base_url('register')?>" method="POST" > 
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" aria-describedby="" name="name"> 
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="form-group form-check"> 
                <label class="form-check-label" for="exampleCheck1">Dont't have Account ? </label>
                <a href="<?=base_url('register')?>">Create here</a>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
   </body>
</html>
