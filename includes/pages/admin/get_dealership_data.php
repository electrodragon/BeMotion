<?php
use RedBeanPHP\R;

// Table name
$tableName = 'dealership';

// Fetch data using RedBean
$rows = R::findAll($tableName, ' ORDER BY created_at DESC ');
?>

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
