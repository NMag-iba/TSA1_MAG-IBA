<!DOCTYPE html>
<html>
<head>
    <title>Today's Tasks</title>

    <style>
        body {
            font-family: "Times New Roman", serif;
            margin: 0;
            padding: 10px;
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }

        nav {
            text-align: center;
            margin-bottom: 20px;
        }

        nav a {
            margin: 0 12px;
            color: purple;
        }

        p {
            width: 85%;
            margin: 0 auto 15px;
        }

        table {
            width: 85%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #d3d3d3;
            padding: 9px 10px;
            text-align: left;
        }

        th {
            background-color: #d9ead3;
        }
    </style>
</head>

<body>

    <h1>Today's Tasks</h1>

    <nav>
        <a href="/">Home</a>
        <a href="/tasks">Task List</a>
        <a href="/profile">Profile</a>
        <a href="/about">About</a>
    </nav>

    <p>Date: <?= date('F d, Y') ?></p>

    <?php if (!empty($tasks)): ?>
        <table>
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Date</th>
            </tr>

            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= esc($task['title']) ?></td>
                    <td><?= esc($task['status']) ?></td>
                    <td><?= esc($task['task_date']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No tasks for today.</p>
    <?php endif; ?>

</body>
</html>