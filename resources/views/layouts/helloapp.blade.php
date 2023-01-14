<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .menutitle {
            background-color: 'red';
        }
        .content {
            background-color: 'gray';
        }
        .footer {
            background-color: 'blue';
        }
    </style>
</head>
<body>
      <h1>@yield('title')</h1>
      @section('member')
      <h2 class="menutitle">メニュー</h2>
      <ul>
        <li>@show</li>
      </ul>
      <hr size="1">
      <div class="content">
        @yield('content')
      </div>
      <div class="footer">
        @yield('footer')
      </div>
</body>
</html>