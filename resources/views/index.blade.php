{{--Hello I am blade Template!--}}
<br>
{{--@isset($name)
The name is: {{$name}}
@endisset
--}}
<div>
    {{--@if(count($tasks))
        <div>There are tasks</div>
        <div>There are {{count($tasks)}} tasks</div>

        @foreach($tasks as $task)
            <div>{{$task->title}}</div>
        @endforeach
    @elseif(count($tasks))

    @else
        <div>No tasks</div>
    @endif

    --}}

    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id])}}">{{ $task->title}}</a>    
        </div>
    @empty
        <div>No tasks</div>
    @endforelse



</div>
