<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-top: 20px">
      <div class="row">
        <div class="col-md-12">
            <h2>Contacts</h2>
            @if (Session::has('success'))
       <div class="alert alert-success" role="alert">
           {{Session::get('success')}}
        </div>
        @endif  
            <div style="margin-right: 10%; float: right;">
                <a href="{{url('add-contact')}}" class="btn btn-primary">Add Contact</a>
            </div>
           <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Telephone</th>
                    <th>Number</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1
                @endphp
                @foreach ($data as $newcontact)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$newcontact->firstName}}</td>
                        <td>{{$newcontact->lastName}}</td>
                        <td>{{$newcontact->Number}}</td>
                        <td>{{$newcontact->Email}}</td>
                        <td><a href="{{url('edit-contact/'.$newcontact->id)}}" class="bi bi-pencil-square"></a></td>
                        <td><a href="{{url('delete-contact/'.$newcontact->id)}}" class="bi bi-trash"></a></td>
                    </tr>
                @endforeach
            </tbody>
           </table>
        </div>
      </div>
    </div>
 
</body>
</html>