<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>User Details</title>
</head>
<div class="container mt-2">

    <body>
        <div class="container">
            <table class="table table-info table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PHONE</th>
                        <th>EMAIL</th>
                        <th>BIRTHDAY</th>
                        <th>NATIONALITY</th>
                        <th>GENDER</th>
                        <th>HOBBY</th>
                        <th colspan="2">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Demo_registration as $user)
                    <tr>

                        <td>{{$user->user_id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->dob}}</td>
                        <td>{{$user->nationality}}</td>
                        <td>{{$user->gender}}</td>
                        <td>{{$user->hobby}}</td>
                        <td><a href="{{url('/register/delete/')}}/{{$user->user_id}}"><button class="btn btn-danger">DELETE</button></a></td>
                        <td><a href="{{url('/register/update/')}}/{{$user->user_id}}"><button class="btn btn-info">UPDATE</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</div>

</html>