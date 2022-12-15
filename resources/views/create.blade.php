<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    
   <style>
  textarea {
        overflow-x: scroll;
        height: 100px;
        white-space: nowrap;
        resize: none; /* Remove this if you want the user to resize the textarea */
    }
    .container{
      border:solid blue;
      margin-top : 50px;
      border-width: 40px 4px 4px 4px;
     
    }
.spc1{
 margin-left : 60px;

}
.mgl1{
 margin-left: 100px;
}
.mgl2{
 margin-left: 97px;
}
.mgl3{
 margin-left: 108px;
 
}
.mgl4{
 margin-left: 133px;
}
.mgl5{
 margin-left: 56px;
}
.mgl6{
 margin-left: 95px;
}
.mgl7{
 margin-left: 119px;
}
.mgl8{
 margin-left: 115px;
}
.mgl9{
 margin-left: 373px;

}
.slc{
 color : blue;
 margin-left: 39px;
}
.btn {
  border: 2px solid blue;
  background-color: white;
  color: black;
  
  cursor: pointer;
}

input{
  border : 1px solid blue;
}
   </style>
  </head>
  <body>
    
  <div class="container">
  <p class="cmt">Company Informatio(Add/Edit/Delete)</p> 
    <div class="row">
      
        <div class="col-12 form-control">
         <p class="text-primary">company info.</P> 
        <form action="/post" method="post" id="myForm" enctype="multipart/form-data">
        @csrf
        <div class="mb-2 form-control">
        <label for="country" class="spc1">Country Name</label> <span class="text-danger">*</span>

<select id="country" class="slc" name="country" Required>
<option value=""></option>
  <option value="Bangladesh">Bangladesh</option>
  <option value="India">India</option>
  <option value="Pakistan">Pakistan</option>
  <option value="Srilanka">Srilanka</option>
</select>
     
  <div class="mb-1">
    <label for="name" class="spc1"> Name</label> <span class="text-danger">*</span>
    <input type="text" id="name" class="mgl1" name="name" Required>
  </div>
  <div class="mb-1">
    <label for="address" class="spc1">Address</label>

<textarea id="address" name="address" class="mgl2">
  </textarea>
  </div>
  <div class="mb-1">
    <label for="phone" class="spc1">Phone</label>
    <input type="text"  class="mgl3"  id="phone" name="phone">
  </div>
  <div class="mb-1">
    <label for="fax" class="spc1">fax</label>
    <input type="text" class="mgl4"  id="fax" name="fax">
  </div>
  <div class="mb-1">
    <label for="email" class="spc1">Email address</label>
    <input type="email" class="mgl5"  id="email" name="email">
  </div>
  <div class="mb-1">
    <label for="url" class="spc1">Web Url</label>

<input type="url" name="url" class="mgl6" id="url">
  </div>
  <div class="mb-1">
    <label for="date" class="spc1">Date</label>

<input type="date" id="date" class="mgl7" name="date">

  </div>
  <div class="mb-1">
    <label for="logo" class="spc1">Logo</label>
    <input type="file" id="logo" class="mgl8"  name="logo">
  </div>
  <div class="mgl9">
  <button type="submit" class="btn">Save</button>
  <button type="button" class="btn" onclick="resetForm();">Clear</button>
  </div>
 
  <!-- <button type="button" class="btn btn-primary">Clear</button> -->
</form>

        </div>
    </div>
  </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
function resetForm() {
    document.getElementById("myForm").reset();
}
</script>
  </body>
</html>