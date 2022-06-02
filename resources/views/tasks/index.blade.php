@extends('layouts.app')

@section('content')

<h1>{{ $user->name }}のタスクたち</h1>
        @if (count($tasks)>0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>user_id</th>
                        <th>id</th>
                        <th>ステータス</th>
                        <th>タスク内容</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->user_id }}</td>
                        <td>{!! link_to_route('tasks.show',$task->id,['task'=>$task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $tasks->links() }}
            @else
            {!! link_to_route('tasks.create','新規タスクの入力',[],['class'=>'btn btn-primary']) !!}
       
    @endif
    
@endsection