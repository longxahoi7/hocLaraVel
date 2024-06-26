<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container border border-warning card mt-5 bg-succes">
  <div class="">
  <h1 class=" p-2 mb-2" >Thông tin về bản thân</h1>
   <p class="p-2 mb-2">Họ và tên: <span>{{$thongtin['0']}}</span></p>
   <p class="p-2 mb-2">Ngày tháng năm sinh:<span>{{$thongtin['1']}}</i:span></p>
   <p class="p-2 mb-2">Tuổi:<span>{{$thongtin['2']}}</i:span></p>
   <p class="p-2 mb-2">Quê quán:<span>{{$thongtin['3']}}</i:span></p>
   <p class="p-2 mb-2"> Ngành học:<span>{{$thongtin['4']}}</span></p>
   <p class="p-2 mb-2"> Ngành hẹp:<span>{{$thongtin['5']}}</span></p>
  </div>
</div>
<script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</script>
</body>
</html>