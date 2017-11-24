<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <ul>
        <!-- show all tasks -->
        @foreach ($tasks as $task)
            <li>
                <a href="/tasks/{{ $task->id }}">{{ $task->body }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
