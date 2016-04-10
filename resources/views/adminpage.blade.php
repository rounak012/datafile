<html>
<head>
<style>
</style>

</head>

<body>
<form action="{{route('adminpost')}}" method = "post">



   new employee <input type="text" name="username" placeholder="enter username">
   password:  <input type="text" name="password" placeholder="enter password">
   roleid: 
     <select name="roleid">
      <option value='1'>admin</option>
      <option Value='2'>employee</option>
      <option Value='3'selected="selected">student</option>
    
    </select>
	department;
	
     <select name="department">
		@foreach($dept as $key=>$dept)
		<option value="{{$dept->id}}">{{$dept->dept}}</option>
		@endforeach
    </select>
	  
	 
	 
  <input type="submit" value="submit">
  </form> 
  
  <form action="{{route('showall')}}" method="get">
  <input type="submit" value="show all employee">
  </form>
     
  
  
  
  <form action="{{route('logout')}}" method = "post">
    <input type="submit" value="logout">
  </form>
  

</body>
</html>