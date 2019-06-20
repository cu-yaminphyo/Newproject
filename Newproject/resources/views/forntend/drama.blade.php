<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css">
    <title>Drama Movies</title><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

</head>
<body>
@include('forntend.nav')
@yield('content') 
<div class="container-fruid">
    <div  id="carda">
        <div class="card-body">
         <h3>အချစ်ဇာတ်လမ်းများ   </h3>     </div>
      </div><br>
    </div>
      <div class="container">
   <div class="row">
    
     @foreach ($link as $item)
    
 <div class="col-md-4">
    <a href="{{url('aa',$item->id)}}">
       <div class="row" id="aa" style="background-image: url('{{$item->imagename}}')">
          
        </div> 
       
      </a>
      
   <div class="row" id="textcolor">
      <div class="col-md-10">
     {{$item->moviename}}<br>
     {{$item->name}}<br>
     @foreach ($random as $randoms)
                         
                    
     @if ($randoms->id == $item->cid)
     {{$randoms->categoryname}}
         
    
         
     @endif
     @endforeach
      </div>
     </div><br><br>
 </div>
 @endforeach  
     
          
  </div> 
  
   </div>
           
   <span>{{$link->links()}}</span>             
        
                         
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>