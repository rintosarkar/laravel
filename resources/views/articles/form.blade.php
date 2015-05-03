	{!! Form::hidden('user_id', 1) !!}
	
	<div class="form-group">
		{!! Form::label('title','Article Titel :') !!}
		{!! Form::text('title', null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('article_post','Article Post :')!!}
		{!! Form::textarea('body', null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('published_at','Publish On')!!}
		{!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		<div class="col-sm-6">
		    {!! Form::submit('Publish', ['class'=>'btn btn-primary form-control']) !!}
		</div>
	</div>