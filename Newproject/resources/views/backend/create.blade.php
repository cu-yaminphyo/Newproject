@extends('base')
@section('main')
 
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a movie</h1>
        <div>   
                  
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
        </div><br>
        @endif
    <form method="POST" action="{{ route('backend.store')}}" autocomplete="off">
    @csrf
    
    <div class="form-group">
        <label for="cid"> Category Name</label>
        <input type="text" class="form-control" name="cid" />
       
    </div>
    <div class="form-group">
        <label for="moviename">Moviename</label>
        <input type="text" class="form-control" name="moviename" />
    </div>
    <div class="form-group">
        <label for="link">Link</label>
        <input type="text" class="form-control" name="link" />
    </div>
    <div class="form-group">
        <label for="imagename">Imagename</label>
      

        <div class="file-upload">
          <div class="file-select">
            {{-- <div class="file-select-button" id="imagename">Choose File</div> --}}
          
            <input type="file" name="imagename" id="chooseFile">
          </div>
        </div>
        
        <!-- IGNORE -->
       
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" />
    </div>
    <button type="submit" class="btn btn_primary-outline">Add Contact</button>

    </form>
    
    </div>
        </div>
    </div>

@endsection