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
            <h2>Update Contact</h2>
              
         @if (Session::has('success'))
       <div class="alert alert-success" role="alert" id="alert">
           {{Session::get('success')}}
        </div> 
    @endif 
     <form action="{{url('update-contact')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}">
        <label for="fname" class="form-label">First Name:</label>
        <input type="text " name="fname" id="fname" class="form-control" value="{{$data->firstName}}">
        @error('fname')
        <div class="alert alert-danger" role="alert">
            {{$message}}
         </div> 
        @enderror
        <label for="lname" class="form-label">Last Name:</label>
        <input type="text " name="lname" id="lname" class="form-control" value="{{$data->lastName}}">
        @error('lname')
        <div class="alert alert-danger" role="alert">
            {{$message}} 
         </div>  
         @enderror
        <label for="number" class="form-label">Number:</label>
        <input type="number" name="number" id="number" class="form-control" value="{{$data->Number}}">
        @error('number')
        <div class="alert alert-danger" role="alert">
            {{$message}}
         </div> 
         @enderror
         <label for="email" class="form-label">Email:</label>
         <input type="text" name="email" id="email" class="form-control" value="{{$data->Email}}">
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
    

   
          </div>
        </div>
    </div>
</body>
</html>