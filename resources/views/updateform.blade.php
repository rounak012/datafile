<html>
<head>
<style>
</style>

</head>

<body>
<form action="{{route('updatecall')}}" method = "post">



   new employee <input type="text" name="username" placeholder="enter username">
   password:  <input type="text" name="password" placeholder="enter password">
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