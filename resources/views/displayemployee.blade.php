<html>
<body>





@foreach($var as $key=>$blogs)

   {{$blogs->username}} 
	  <form action="{{route('updateform1')}}" method="post">
	  <input type="hidden" value="{{$blogs->id}}"  name="id">
         <input type="submit" value="update">
		 </form>
		 

  
  
@endforeach


</form>
</body>
</html>