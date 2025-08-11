<?php
use RedBeanPHP\R;

// Table name
$tableName = 'dealership';

// Fetch data using RedBean
$rows = R::findAll($tableName, ' ORDER BY created_at DESC ');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submitted Form Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h2 {
            margin-bottom: 30px;
        }

        table {
            border-radius: 10px;
            overflow: hidden;
        }

        .table th {
            background-color: #343a40;
            color: #fff;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Submitted Contact Form Data</h2>

    <?php if (!empty($rows)): ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Interest</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Submitted At</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?= $row->id ?></td>
                        <td><?= htmlspecialchars($row->interest) ?></td>
                        <td><?= htmlspecialchars($row->name) ?></td>
                        <td><?= htmlspecialchars($row->email) ?></td>
                        <td><?= nl2br(htmlspecialchars($row->message)) ?></td>
                        <td><?= $row->created_at ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p class="alert alert-warning text-center">No data found yet!</p>
    <?php endif; ?>

</div>

</body>
</html>
