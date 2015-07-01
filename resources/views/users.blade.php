@extends('app')

@section('welcome')
<div class="container">
	
				<div class="panel-heading"><h3>Users</h3></div>
				
   <tbody>
   	@foreach ($users as $user)
    <tr>
        <td><a href="/{{$user->user_name}}"><img src="{{ ($user->image == null) ? '/uploads/default.png' : $user->image}}" style="width:35px;height:35px;" alt=""></a></td>
        <td>{{$user->name}}</td>
        
    </tr>
      @endforeach
   </tbody>

			
</div>
@endsection