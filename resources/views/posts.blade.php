@extends('app')

@section('content')

   	@foreach ($posts as $post)
    <div class="panel-body-c">
            <div class="panel-heading-m">
                {{$post->created_at->format('d-m-Y / h:m:s')}}
            </div>
            <div class="panel-body-m">
                <textarea class="form-control" rows="5" cols="380" disabled>{{$post->content}}</textarea>
                <ul class="list breadcrumbs small" style="padding-left: 0px;">
                    <li>Likes: {{$post->likes}} / Reposts: {{$post->reposts}}</li>
                    <li><button class="btn-inv like-post" value="{{$post->id}}"><span class="mif-thumbs-up fg-blue mif-2x"></span></button></li>
                    <li><button class="btn-inv"><a href="/repost/{{$post->id}}"><span class="mif-share fg-green mif-2x"></span></a></button></li>
                    <li><button class="btn-inv"><a href="posts/{{$post->id}}/edit"><span class="mif-tools fg-yellow mif-2x"></span></a></button></li>
                    <li>{!! Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'DELETE')) !!}
                        <button type="submit" class="btn-inv"><span class="mif-fire fg-red mif-2x"></span></button>
                        {!! Form::close() !!}
                    </li>
                </ul> 
            </div>
    </div>     
   @endforeach

@endsection

@section('psearch')
<div class="panel panel-default">
    <div class="panel-body-pu">
    <h3>Search a Post</h3>
    {!!Form::open(['url'=>'/psearch','route' =>'posts.psearch','method'=>'GET','class' => 'navbar-form','role'=>'search'])!!}
        <div class="form-group">
            {!!Form::text('content',null,['class' => 'form-control','placeholder'=>'Content'])!!}
        </div>
        <button type="submit" class="button loading-pulse lighten success"><span class="mif-search fg-white mif-1x">   Search</span></button>
    {!!Form::close()!!}
    </div>
</div>
@stop


