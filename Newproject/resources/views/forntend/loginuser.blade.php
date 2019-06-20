<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="{{asset('css/custom.css')}}" type="text/css">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

</head>
<body>

<form  method="POST" autocomplete="off"><br>

    <div class="row">
        <div class="col-md-2">
        </div>
      
        <div class="col-md-8">
         <div class="row">
            <div class="col-md-3">
                 <label>Usename</label>
             </div>
             <div class="col-md-6">
                 <input type="text" name="username" />    
             </div>
         </div>
         <br>
         <div class="row">
                <div class="col-md-3">
                    <label>Password</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="password" />
               
                
                </div>
                <div>
                        {{-- <button type="submit" href="{{route('backend.create')}}" class="btn btn_primary-outline">Add Contact</button> --}}

                        <a style="margin: 19px;" href="{{ route('backend.index')}}" class="btn btn-primary">Login</a>
                        </div>  
        </div>
           <br>
          
        <div class="col-md-2">

        </div>
    </div>
</form>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>