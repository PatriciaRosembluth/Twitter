@extends('app')
@section('welcome')
<div class="container">
	
				<div class="panel-heading"><h3>Followers</h3></div>
				
   <tbody>
    @foreach ($follows as $follow)
    @foreach ($users as $user)
     @if ($follow->follower_id == $user->id)
    <tr>
        <td><a href="/{{$user->user_name}}"><img src="{{ ($user->image == null) ? '/uploads/default.png' : $user->image}}" style="width:100px;height:100px;" alt=""></a></td>
        <td>{{$user->name}}</td>
    </tr>
    @endif
      @endforeach
      @endforeach
   </tbody>

			
</div>
@endsection