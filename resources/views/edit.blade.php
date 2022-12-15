<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <style>
    textarea
{
    overflow-y:scroll;
    overflow: scroll;
}
   </style>
  </head>
  <body>
    
  <div class="container">
    <div class="row">
        <div class="col-10">
        <form action="/update/{{ $employee->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("put")
        <div class="mb-1">
        <label for="country">Country Name</label>

<select id="country"  name="country" Required>
<option value=""></option>
<option value="Bangladesh" @if ($employee->country == "Bangladesh") selected @endif >Bangladesh</option>
<option value="India" @if ($employee->country == "India") selected @endif >India</option>
<option value="Pakistan" @if ($employee->country == "Pakistan") selected @endif >Pakistan</option>
<option value="Srilanka" @if ($employee->country == "Srilanka") selected @endif >Srilanka</option>
</select>
     
  <div class="mb-1">
    <label for="name" class="form-label" Required> Name</label>
    <input type="text"  id="name" name="name"  value="{{$employee->name}}">
  </div>
  <div class="mb-1">
       <label for="address">Address</label>

<textarea id="address" name="address" rows="4" cols="50">
{{$employee->address}}</textarea>
  </div>
  <div class="mb-1">
    <label for="phone">Phone</label>
    <input type="number"  id="phone" name="phone" value="{{$employee->phone}}">
  </div>
  <div class="mb-1">
    <label for="fax">fax</label>
    <input type="text"  id="fax" name="fax" value="{{$employee->fax}}">
  </div>
  <div class="mb-1">
    <label for="email" class="form-label">Email address</label>
    <input type="email"  id="email" name="email" value="{{$employee->email}}">
  </div>
  <div class="mb-1">
    <label for="url">Web Url</label>

<input type="url" name="url" id="url" value="{{$employee->url}}">
  </div>
  <div class="mb-1">
    <label for="date">Date</label>

<input type="date" id="date" name="date" value="{{$employee->date}}">

  </div>
  <div class="mb-1">
    <label for="logo">Logo</label>
    <input type="file" id="logo"  name="logo">
    <img src="/logo/{{ $employee->logo }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
  </div>
  <button type="submit" class="btn btn-primary mb-1">Save</button>
  
</form>
<form action="/delete/{{ $employee->id }}" method="post">
                            <button class="btn btn-primary" onclick="return confirm('Are you sure?');" type="submit">Clear</button>
                            @csrf
                            @method('delete')
                        </form>
        </div>
    </div>
  </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>