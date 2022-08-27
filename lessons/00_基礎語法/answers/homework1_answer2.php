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
        <tbody></tbody>
    </table>

    <!-- 作法二 -->
    <script>
        var data = [
            <?php foreach ($data as $d) { ?>
                [ <?= $d[0] ?>, '<?= $d[1] ?>', <?= $d[2] ?> ],
            <?php } ?>
        ];
        var table = document.querySelector('tbody')
        var html = ''
        data.sort((a,b) => b[2] - a[2])
            .map((d,i) => {
                html += '<tr>'
                    + '<td>' + d[0] + '</td>'
                    + '<td>' + d[1] + '</td>'
                    + '<td>' + d[2] + '</td>'
                    + '<td>' + (i+1) + '</td>'
                    +  '</tr>';
            })
        table.innerHTML = html;
    </script>
</body>
</html>