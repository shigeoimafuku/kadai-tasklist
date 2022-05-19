@extends('layouts.app')

@section('content')

    <h1>id={{ $task->id }}のタスク詳細</h1>

    <table class="table table-boredered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    {!! link_to_route('tasks.edit','このタスクを編集',['task'=>$task->id],['class'=>'btn btn-light']) !!}
    
    {!! Form::model($task,['route'=>['tasks.destroy',$task->id],'method'=>'delete']) !!}
        {!! Form::submit('削除',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection