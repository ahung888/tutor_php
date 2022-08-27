<?php

$data = [
    // [ID, Name, Salary],
    [1, 'John', 4000],
    [2, 'Mary', 7000],
    [3, 'William', 2000],
    [4, 'Martin', 5000],
    [5, 'Angela', 3000],
];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homework</title>
</head>
<body>
    <h1>Homework</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Rank</th>
            </tr>
        </thead>
        <!-- 作法一 -->
        <tbody>
            <?php
                function sort_by_salary($a, $b) {
                    return $b[2] > $a[2];
                }
                usort($data, 'sort_by_salary');
            ?>
            <?php for ($i=0; $i < sizeof($data); $i++) { ?>
                <tr>
                    <td><?= $data[$i][0] ?></td>
                    <td><?= $data[$i][1] ?></td>
                    <td><?= $data[$i][2] ?></td>
                    <td><?= $i + 1 ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- 作法二 -->
    <script>
    </script>
</body>
</html>