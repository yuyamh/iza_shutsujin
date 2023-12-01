<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>いざ、出陣！</title>
</head>
<body>
  <div class="main">
    <h2>いざ、出陣！</h2>
    <ul>
      <li>徳川 家康</li>
    </ul>
    <input type="text" name="id" value="" placeholder="ID番号を入力">
    <button class="iza">出陣ボタン</button>
  </div>
</body>
</html>
