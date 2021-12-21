<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User</title>
</head>
<body>

    <h4>User:</h4>
    <section>
        <table >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                </thead>
            <tbody>
                    <?php
                    foreach ($UserArr as $user) {
                        echo "<tr>
                                <td> {$user['id']} </td>
                                <td> {$user['name']} </td>
                                <td> {$user['email']} </td>
                              </tr>";
                    }
                    ?>
            </tbody>
        </table>
    </section>

</body>
</html>
