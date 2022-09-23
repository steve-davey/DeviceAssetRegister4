<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h2>Devices Details</h2>
        <a href="?action=create">Add New Device</a>
        <table>
            <thead>
                <tr>
                    <th>Asset tag</th>
                    <th>Assigned to</th>
                    <th>Date bought</th>
                    <th>Date decommissioned</th>
                    <th>Device type</th>
                    <th>Operating system</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach ($records as $row) { ?>
                <tr>
                    <td><?= $view->escape($row['assetTag']) ?></td>
                    <td><?= $view->escape($row['assignedTo']) ?></td>
                    <td><?= $view->escape($row['dateBought']) ?></td>
                    <td><?= $view->escape($row['dateDecommissioned']) ?></td>
                    <td><?= $view->escape($row['deviceType']) ?></td>
                    <td><?= $view->escape($row['operatingSystem']) ?></td>
                    <td>
                        <a href="?action=read&assetTag=<?= $view->escape($row['assetTag']) ?>">Read</a> |
                        <a href="?action=update&assetTag=<?= $view->escape($row['assetTag']) ?>">Update</a> |
                        <a href="?action=delete&assetTag=<?= $view->escape($row['assetTag']) ?>">Delete</a>
                    </td>
                </tr>
        <?php } ?>
            </tbody>
        </table>
    </body>
</html>