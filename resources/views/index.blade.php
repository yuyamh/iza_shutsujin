<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>いざ、出陣！</title>
  <style>
    body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  </style>
</head>
<body>
  <div class="main">
    <h2>いざ、出陣！</h2>
    <ul>
      <li>徳川 家康</li>
    </ul>
    {{-- <input type="text" name="id" value="" placeholder="ID番号を入力"> --}}
    <input type="radio" name="id" value="1">酒井忠次
    <input type="radio" name="id" value="2">本多忠勝
    <input type="radio" name="id" value="3">井伊直弼
    <button class="iza">出陣ボタン</button>
    <script>
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr("content")
        },
      })
      $('.iza').on('click', function () {
        id = $('input:radio[name="id"]:checked').val();
        $.ajax({
          url: "{{ route('iza') }}",
          method: "POST",
          data: { id : id },
          dataType: "json",
        }).done(function (res) {
          console.log(res);
          $('ul').append('<li>' + res.name + '</li>');
        }).fail(function () {
          alert('通信に失敗しました。');
        });
      });
    </script>
  </div>
</body>
</html>
