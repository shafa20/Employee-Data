<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	Name Of Country : {{$employee->country}} <br>
    Name : {{$employee->name}} <br>
    Address : {{$employee->address}} <br>
    Phone : {{$employee->phone}} <br>
    Fax : {{$employee->fax}}  <br>
    Email : {{$employee->email}} <br>
    Web URL : {{$employee->url}} <br>
    Date Of Establishment : {{$employee->date}} <br>
	logo <iframe height="250"  width="250" src="/logo/{{$employee->logo}}"></iframe> <br>
    

</body>
</html>