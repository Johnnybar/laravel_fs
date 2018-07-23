<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    {{ "Hello $name, your age is $age" }}
    <ul>
      @foreach ($tasks as $task)
        <li>{{ $task ->body }}</li>
       @endforeach
    </ul>
  {{ $name }}
    </body>
</html>
