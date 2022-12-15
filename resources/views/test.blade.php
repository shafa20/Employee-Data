<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
  textarea {
        overflow-x: scroll;
        height: 100px;
        resize: none; /* Remove this if you want the user to resize the textarea */
    }
    .sp{
      margin-right: auto;
  margin-left: auto;
    }

   </style>
  </head>
  <body>
 
<!-- <div class="container border border-primary">
  <h1 class="">ADD/EDIT/DELETE</h1>
  <div class="row">
    <form action="" clas="col-12">
    <div class="col-4">
      safa
    </div>
    <div class="col-4">
      safa
    </div>
    <div class="col-4">
      safa
    </div>
    </form>
    
  </div>
</div>
<button>Clear</button> -->
<textarea>
  </textarea>
   
<div class="row">
  <div class="col">
    <div class="col-6">
    <label for="exampleInputEmail1" class="form-label sp">Email address</label>
    </div>
    <div class="col-6">
    <input type="email" class="" id="exampleInputEmail1" aria-describedby="emailHelp">
   
    </div>
  </div>
</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
  let btnClear = document.querySelector('button');
let inputs = document.querySelectorAll('input');
btnClear.addEventListener('click', () => {
    inputs.forEach(input =>  input.value = '');
});
</script>
   
  </body>
</html>