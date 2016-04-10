<html>
<head>
<style>
</style>

</head>

<body>
<form action="{{route('updatecall')}}" method = "post">

 <input type="hidden" value="{{$var->id}}" name="id">

   new employee <input type="text" name="username"  value="{{$var->username}}">
   
  
   roleid: 
     <select name="roleid">
      <option value='1'>admin</option>
      <option Value='2'>employee</option>
      <option Value='3'selected="selected">student</option>
    
    </select>
	 
  <input type="submit" value="submit">
  </form> 
  
  

</body>
</html>