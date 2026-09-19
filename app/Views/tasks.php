<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>

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

        table {
            width: 85%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
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

    <h1>Task List</h1>

    <nav>
        <a href="/">Home</a>
        <a href="/tasks">Task List</a>
        <a href="/profile">Profile</a>
        <a href="/about">About</a>
    </nav>

    <?php if (!empty($tasks)): ?>
        <table>
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Date</th>
                <th>Created</th>
            </tr>

            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= esc($task['title']) ?></td>
                    <td><?= esc($task['status']) ?></td>
                    <td><?= esc($task['task_date']) ?></td>
                    <td><?= esc($task['created_at']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p style="text-align: center;">No tasks found.</p>
    <?php endif; ?>

</body>
</html>