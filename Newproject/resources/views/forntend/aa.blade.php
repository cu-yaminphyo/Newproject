@extends('forntend.main')
@section('content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/my_MM/sdk.js#xfbml=1&version=v3.3&appId=712745789184358&autoLogAppEvents=1"></script>


<head>
  <meta property="fb:app_id" content="712745789184358">
</head>
<body>
<div id="fb-root"></div>
<div class="fb-comments" data-href="https//localhost:8000" data-width="100%" data-numposts="5"></div> 

<script>
    window.fbAsyncInit = function(){
      FB.init({
      appId: '712745789184358',
      autoLogAppEvents: true,
      xfbml: true,
      version: 'v3.2'
    });
  };
</script>
<script async defer  src="https://connect.facebook.net/en_US/sdk.js"></script>
</body>



<div class="container">
<div class="row">

<div class="col-md-4">
   
           <iframe width="807" height="454" src="{{$id->link}}" frameborder="0" allowfullscreen ></iframe>
         
             <div class="row" id="textcolor">
                 <div class="col-md-12">
             {{$id->moviename}} <br>
             {{$id->name}}<br>
             @foreach ($random as $randoms)
                         
                    
             @if ($randoms->id == $id->cid)
             {{$randoms->categoryname}}
                 
            
                 
             @endif
             @endforeach
                  
                 </div>
                 <div class="row">
                   <div class="col-md-4">
                 <div class="fb-like" data-href="https://localhost:8000/aa" data-width="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div></div>
                 <div class="col-md-6">
                <div class="fb-comments" data-href="{{Request::url()}}" data-width="" data-numposts="10"></div></div>
              </div>
              </div><br><br>
            </div>

      
          </div>
        </div>
       
        

</body>
@endsection