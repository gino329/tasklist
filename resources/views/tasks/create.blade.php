@extends('layouts.app')

@section('content')

  <h1>Tasklist新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'Task:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

        {!! Form::close() !!}
        
@endsection