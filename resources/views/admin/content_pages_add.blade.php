<div class="wrapper container-fluid">
	{!! Form::open(['url'=>route('pagesAdd'),'class'=>'form-horizontal','method'=>'post','enctype'=>'multipart/form-data']) !!}

		<div class="form-group">
			{!! Form::label('name','Name',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Enter page title']) !!}				
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('alias','Alias',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::text('alias',old('alias'),['class'=>'form-control','placeholder'=>'Enter page alias']) !!}				
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('text','Text',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::textarea('text',old('text'),['class'=>'form-control','id'=>'editor','placeholder'=>'Enter page text']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('images','Image:',['class'=>'col-xs-2 control-label']) !!}
			<div class="col-xs-8">
				{!! Form::file('images',[
					'class'=>'filestyle ',
					'data-buttonText'=>'Enter the image',
					'data-buttonName'=>'btn-primary',
					'data-placeholder'=>'File havnt'
					]) !!}				
			</div>
		</div>

		<div class="form-group">
			<div class="col-xs-8">
				{!! Form::button('Save',[
					'class'=>'btn btn-primary',
					'type'=>'submit'
					]) !!}				
			</div>
		</div>

	{!! Form::close() !!}

	<script>
		CKEDITOR.replace('editor');
	</script>
</div>