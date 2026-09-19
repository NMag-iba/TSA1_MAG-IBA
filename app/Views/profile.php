<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>

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

        .profile-info {
            width: 85%;
            margin: 0 auto;
            border: 1px solid #d3d3d3;
        }

        .profile-info h2 {
            margin: 0;
            padding: 10px;
            background-color: #d9ead3;
            font-size: 18px;
        }

        .profile-info p {
            margin: 0;
            padding: 9px 10px;
            border-top: 1px solid #d3d3d3;
        }
    </style>
</head>
<body>

    <h1>Profile</h1>

    <nav>
        <a href="/">Home</a>
        <a href="/tasks">Task List</a>
        <a href="/profile">Profile</a>
        <a href="/about">About</a>
    </nav>

    <div class="profile-info">
        <h2><?= esc($user['full_name']) ?></h2>
        <p>Username: <?= esc($user['username']) ?></p>
        <p>Email: <?= esc($user['email']) ?></p>
        <p>Created At: <?= esc($user['created_at']) ?></p>
    </div>

</body>
</html>