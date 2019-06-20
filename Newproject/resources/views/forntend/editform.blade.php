<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
       
                <form autocomplete="off">
        <br>
       
        <div  id="type" class="header-center">
         <h3>ပြန်လည်ပြင်ဆင်ရန်</h3>
       </div>
            
       <br>
       
        <div class="form-group">
            
                <div class="form-group">
                        <div class="row">
                                <div class="col-md-3">
                    <label for="moviename">ဇာတ်လမ်းအမည်</label>
                                </div>
                                <div class="col-md-6">
                    <select>
                       
                            @foreach ($link as $item)<option>
                 {{$item->moviename}}
                 </option>
                 @endforeach
               
                   </select>
                                </div>
                </div><br><br>
            <div class="row">
                <div class="col-md-3">
                <label for="cid"> အမျိုးအစား</label>
            </div>
            <div class="col-md-6" autocomplete="OFF">
              <input type="text" class="form-control" name="cid">
            </div>
            </div>
            </div>
           
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                <label for="link">Link</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="link" />
            </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                            <label for="imagename">Imagename</label>
                        </div>
                        <div class="col-md-6">
                
              
        
                <div class="file-upload">
                  <div class="file-select">
                    {{-- <div class="file-select-button" id="imagename">Choose File</div> --}}
                  
                    <input type="file" name="imagename" id="chooseFile">
                  </div>
                  </div>
                </div>
                </div>
                <!-- IGNORE -->
               
            </div>
            <div class="form-group">
                    <div class="row">
                            <div class="col-md-3">
                                    <label for="name">Name</label>
                                </div>
                                <div class="col-md-6">
               
                <input type="text" class="form-control" name="name" />
                                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                        <button type="button" class="btn btn-primary">Edit Data</button>
        </div>
    </div>
        <div class="col-md-4"></div>

            </div>
        </div>
   
            </form>
        </div>
        <div class="col-md-2">

        </div>
    </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>