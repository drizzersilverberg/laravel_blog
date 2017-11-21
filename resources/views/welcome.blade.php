<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Hello, <?= $name;  ?></h1>
    <h2>Using PHP:</h2>
    <ul>
        <!-- using php -->
        <?php foreach ($tasks as $task) : ?>
            <li><?= $task; ?></li>
        <?php endforeach; ?>
    </ul>
    <h2>Using Blade:</h2>
    <ul>
        <!-- using blade -->
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
</body>
</html>
