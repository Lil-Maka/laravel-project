@extends('layouts.app')
@section('content')
	<h1>Contact</h1>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores enim cum quaerat quos explicabo assumenda et pariatur aliquid laudantium debitis. Quibusdam ipsum quas similique perspiciatis labore libero magnam beatae modi.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quibusdam quisquam at eum, blanditiis officia odio placeat unde quo distinctio laborum aspernatur nihil tenetur fugiat, cumque voluptatibus, vitae dolores ipsam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi doloremque iure laboriosam ea saepe quia, veniam eveniet vel voluptate perferendis. Corporis odit ea placeat repudiandae quo obcaecati iste velit molestias?
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis molestiae culpa quasi architecto unde, quae, aut amet quibusdam repellendus est reprehenderit magnam iste beatae assumenda omnis earum repudiandae qui laudantium.
	</p>

	{!! Form::open(['url' => '/contact/submit']) !!}
		<div class="form-group">
	    	{{Form::label('name', 'Nombre')}}
	    	{{Form::text('name',  '', ['class'=>'form-control'])}}
	    </div>
	    <div class="form-group">
	    	{{Form::label('email', 'E-Mail Address')}}
	    	{{Form::text('email', 'ejemplo@gmail.com', ['class'=>'form-control'])}}
	    </div>
	    <div class="form-group">
	    	{{Form::label('message', 'Message')}}
	    	{{Form::textarea('message', '', ['class'=>'form-control'])}}
	    </div>

	    <div>
	    	{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	    </div>
	{!! Form::close() !!}
@endsection