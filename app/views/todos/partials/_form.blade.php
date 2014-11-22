{{ Form::label('name', 'Title:') }}
{{ Form::text ('name') }}
{{ Form::submit('Update', array('class' => 'button')) }}
{{ $errors->first('name', '<small class="error">:message</small>') }}