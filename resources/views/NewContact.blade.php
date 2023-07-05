<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
          <div class="col-md-12">
            <h2>Add new Contact</h2>
              
         @if (Session::has('success'))
       <div class="alert alert-success" role="alert">
           {{Session::get('success')}}
        </div> 
    @endif 
     <form action="{{url('save-contact')}}" method="post">
        @csrf
        <label for="fname" class="form-label">First Name:</label>
        <input type="text " name="fname" id="fname" class="form-control" value="{{old('fname')}}">
        @error('fname')
        <div class="alert alert-danger" role="alert">
            {{$message}}
         </div> 
        @enderror
        <label for="lname" class="form-label">Last Name:</label>
        <input type="text " name="lname" id="lname" class="form-control" value="{{old('lname')}}">
        @error('lname')
        <div class="alert alert-danger" role="alert">
            {{$message}}
         </div>
         @enderror  
        <label for="number" class="form-label">Number:</label>
        <input type="number" name="number" id="number" class="form-control" value="{{old('number')}}">
        @error('number')
        <div class="alert alert-danger" role="alert">
            {{$message}}
         </div> 
         @enderror
         <label for="email" class="form-label">Email:</label>
         <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
         @error('email')
         <div class="alert alert-danger" role="alert">
             {{$message}}
          </div>
          @enderror

          <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{url('contact')}}" class="btn btn-primary">Cancel</a>
          </div>
    </form>
    

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