@extends('base')

@section('main')

<div class="col-sm-12">

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
    @endif
  </div>

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Myanmar Movies</h1> 
    <div>
        <a style="margin: 19px;" href="{{ route('backend.create')}}" class="btn btn-primary">New Movie</a>
        </div>       
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Id</td>
          <td>Category Id</td>
          <td>Moviename</td>
          <td>Link</td>
          <td>Imagename</td>
          <td>Name</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($newlinks as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->cid}}</td>
            <td>{{$contact->moviename}}</td>
            <td>{{$contact->link}}</td>
            <td>{{$contact->imagename}}</td>
            <td>{{$contact->name}}</td>
            <td>
                <a href="{{ route('backend.edit',$contact->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('backend.destroy', $contact->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection