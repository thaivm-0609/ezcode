<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Decsription</th>
            <th>Price</th>
            <th>Status</th>
            <th>Total register</th>
        </tr>
        <?php foreach($courses as $course) { ?>
            <tr>
                <td><?=$course['id'] ?></td>
                <td><?=$course['name'] ?></td>
                <td><?=$course['description'] ?></td>
                <td><?=$course['price'] ?></td>
                <td><?=$course['status'] ?></td>
                <td><?=$course['total_register'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>