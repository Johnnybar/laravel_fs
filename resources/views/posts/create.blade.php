
@extends ('layouts.master')


@section ('content')


  <h1>Create a post</h1>

  <hr>

  <form method="POST" action="/posts">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" >
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Body</label>
      <textarea name="body" id="body" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Publish</button>
  </form>

  <!-- //echoing out all errors in page -->
@include ('layouts.errors')


@endsection
