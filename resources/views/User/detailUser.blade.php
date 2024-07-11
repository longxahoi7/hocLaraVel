<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div>
        <h1>Form Add User</h1>    
      <form action="{{route('user.updateUser',$user->id)}}" method="post"> 
            @csrf
            <input type="hidden" class="form-control" id="name" name="id" value="{{$user->id}}" >
            <div class="mb-3">
                <label for="user" class="form-label">Tên người dùng</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" >
            </div>
            <div class="mb-3">
                <select id="" name="phongban_id">
                    @foreach ($phongban as $value)

                        <option
                        value="{{$value->id}}"
                        @if ($user->phongban_id==$value->id)selected  @endif 
                         >{{$value->ten_donvi}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tuoi" class="form-label">Tuổi</label>
                <input type="text" class="form-control" id="tuoi" name="tuoi" value="{{$user->tuoi}}" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>