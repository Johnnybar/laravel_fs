
@extends ('layouts.master')

@section ('content')

<div class="col-sm-8">

  <h1>Register</h1>

  <form class="" action="index.html" method="post">

    {{ csrf_field() }}

    <div class="form-group">

      <label for="name">Name:</label>

      <input type="text" class='form-control' id='name' name="name" value="">

    </div>

    <div class="form-group">

      <label for="email">Email:</label>

      <input type="email" class='form-control' id='email' name="email" value="">

    </div>

    <div class="form-group">

      <label for="password">Password:</label>

      <input type="text" class='form-control' id='password' name="password" value="">

    </div>

  </form>
</div>

@endsection
