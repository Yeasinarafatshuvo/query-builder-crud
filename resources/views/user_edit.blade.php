<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{route('user.update', $specefic_user_data->id)}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Enter your Name</label>
                <input class="form-control" type="text" name="name" value="{{$specefic_user_data->name}}">
            </div>
            <div class="form-group">
                <label for="">Enter Your Email</label>
                <input class="form-control" type="email" name="email" value="{{$specefic_user_data->email}}">
            </div>
         <br>
         <button class="btn btn-primary" type="submit">update</button>
        </form>
    </div>
</body>
</html>