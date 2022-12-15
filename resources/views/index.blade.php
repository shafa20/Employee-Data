<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TSL.</title>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // $("#myInput").on("keyup", function() {
  //   var value = $(this).val().toLowerCase();
  //   $("#myTable tr").filter(function() {
  //     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  //   });
  // });
  $("#search").on("click", function() {
    var value1 = $("#myInput2").val().toLowerCase();
    // $("#myTable tr").filter(function() {
    //   $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    // });
    var value2 = $("#myInput").val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value1) > -1 && $(this).text().toLowerCase().indexOf(value2) > -1)
    });
  });
});
</script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width : 100%;
  margin-bottom : 10px;
 
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 2px;
}
 .container{
      border:solid blue;
      margin-top : 50px;
      border-width: 40px 4px 4px 4px;
     
    }
.add{
  margin-left : 1000px;
  margin-top : 10px;
  margin-bottom: 20px;
  
}
h3{
  color : white;
  background : blue;
 
}
.row{
 border : 1px solid #96D4D4;
}
select , input {
  border : 1px solid blue;
  margin-left : 30px;
}
label {
  margin-left : 50px;
}
</style>
  </head>
  <body>  
<div class="container">
  <h3>Company List</h3>
    <div class="row">
        <div class="col-12">
        
        <label for="myInput2">Name Of Country</label>
        <select id="myInput2">
        @foreach ($employee as $emp)
    <option  value="{{ $emp->country }}">{{ $emp->country }}</option>
    @endforeach
</select>
<label for="myInput">Name</label>
        <input id="myInput" type="text" placeholder="Search..">
<button class="btn btn-outline-primary m-3" id="search">Search</button>

        </div>
    </div>

 
<a href="/create" class="btn btn-outline-primary add">Add New</a>

<table>
  <thead>
  <tr>
    <th>#</th>
    <th>Name of Country</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Fax</th>
    <th>Email</th>
    <th>Web Url</th>
    <th>view</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody id="myTable">
  @php $sl=1; @endphp
  @foreach ($employee as $employee)
  <tr>
  <th scope="row">{{ $sl }}</th>
  <td>{{ $employee->country }}</td>
  <td>{{ $employee->name }}</td>
  <td>{{ $employee->phone }}</td>
  <td>{{ $employee->fax }}</td>
  <td>{{ $employee->email }}</td>
  <td>{{ $employee->url }}</td>
  <td><a href="{{url('/view',$employee->id)}}"><i class="fa fa-eye"></i></a></td>
  <td><a href="/edit/{{ $employee->id }}"><i class='fas fa-edit'></i></a></td>
  <td>
  <form action="/delete/{{ $employee->id }}" method="post">
                            <button class="btn btn-primary" onclick="return confirm('Are you sure?');" type="submit"><i class='fas fa-trash'></i></button>
                            @csrf
                            @method('delete')
                        </form>
    
  </td>
 
  </tr>
  @php $sl++; @endphp
  @endforeach
  </tbody>
</table>
</div> 


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>