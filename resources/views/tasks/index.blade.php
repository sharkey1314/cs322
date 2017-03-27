<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <h1>Hello <?php echo 'name'; ?> </h1>
    <?php foreach($tasks as $task) : ?>
        <li>
            <?php echo $task->body; ?>
        </li>
    <?php endforeach; ?>

    <ul>
        @foreach ($tasks as $task)
            <li>
                <a href="/tasks/{{$task->id}}">{{$task->body}}</a>
            </li>
        @endforeach
    </ul>




</body>
<footer>

</footer>
</html>
