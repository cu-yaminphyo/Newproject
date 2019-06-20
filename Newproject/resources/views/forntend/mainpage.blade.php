@extends('forntend.main')
@section('content')
<br>
<div class="container">
        <div class="row">

          @foreach ($link as $item)
             @if (!empty($item))
                 
            
       <div class="col-md-4">
          <a href="{{url('aa',$item->id)}}">
              <div class="row" id="aa" style="background-image: url('{{$item->imagename}}')">
                  </div>
           
            </a>
            <div class="row" id="textcolor">
               <div class="col-md-12">
                    <div class="row">

                    
                        <div class="col-md-12">{{$item->moviename}}</div>
                    </div>
                     <div class="row">
                      
                        <div class="col-md-12"> {{$item->name}}</div>
                     </div>
         @foreach ($random as $randoms)
                         
                    
           @if ($randoms->id == $item->cid)
           {{$randoms->categoryname}}
               
          
               
           @endif
           @endforeach
             </div>
            </div>
            <br><br>  
                
        
        
        </div>  
      @endif
       @endforeach   
        </div>
      </div>   
      
    
@endsection