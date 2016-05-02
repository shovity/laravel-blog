<div class="form-group">
    {!! Form::label('title', 'Title', [ 'class' => 'control-label' ]) !!}
    {!! Form::text('title', null, [ 'id' => 'title', 'class' => 'form-control', 'placeholder' => 'Input article title here', 'required' => 'true' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('content', 'Content', [ 'class' => 'control-label' ]) !!}
    {!! Form::textarea('content', null, [ 'id' => 'content', 'class' => 'form-control', 'placeholder' => 'Input article content here', 'required' => 'true' ]) !!}
</div>

<div class="form-group">
    {!! Form::submit($btn_name, [ 'class' => 'btn btn-primary' ]) !!}
</div>