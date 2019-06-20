@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a contact</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('backend.update', $contact->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="cid"> CID:</label>
                <input type="text" class="form-control" name="cid" value={{ $contact->cid }} />
            </div>

            <div class="form-group">
                <label for="moviename">Moviename:</label>
                <input type="text" class="form-control" name="moviename" value={{ $contact->moviename }} />
            </div>

            <div class="form-group">
                <label for="link">Link:</label>
                <input type="text" class="form-control" name="link" value={{ $contact->link }} />
            </div>
            <div class="form-group">
                <label for="imagename">Imagename:</label>
                <input type="text" class="form-control" name="imagename" value={{ $contact->imagename }} />
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value={{ $contact->name }} />
            </div>
           
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection