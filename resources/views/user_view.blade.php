<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
       <div class="row">
           <div class="col-md-8">
               <h1>User All Data</h1>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user_data as $item)
                           <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>
                                <a href="{{route('user.edit', $item->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('user.delete', $item->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                           </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
           <div class="col-md-4">
               <h1>Add your user</h1>
               @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
               <form action="{{route('user.store')}}" method="POST">
                   @csrf
                   <div class="form-group">
                       <label for="">Enter your Name</label>
                       <input class="form-control" type="text" name="name" placeholder="Enter your name">
                   </div>
                   <div class="form-group">
                    <label for="">Enter Your Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="">Enter your Password</label>
                    <input class="form-control" type="text" name="password" placeholder="Enter your Password">
                </div>
                <br>
                <button class="btn btn-primary" type="submit">submit</button>
               </form>
           </div>
       </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>