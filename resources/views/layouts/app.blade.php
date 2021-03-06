<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Todo List</title>
</head>
<body class="bg-dark">
    
      <div class="bg-primary ">
        <h1 class="text-white h3 py-4 text-center">Ashadul Todo</h1>
      </div>
      <div class="container bg-white py-3 px-3" style="margin-top: 50px;">
        @yield('todo')
      </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>