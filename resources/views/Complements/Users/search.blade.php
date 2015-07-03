{!! Form::model(Request::all(),['route'=>'searchUser','method'=>'GET','class'=>'','role'=>'search']) !!}
    {!! Form::text('name',null,['class'=>'','placeholder'=>'Nombre del usuario']) !!}
    {!! Form::submit('buscar',['class'=>'btn btn-default'])!!}
{!! Form::close() !!}