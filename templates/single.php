<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>View Record</title>
    </head>
    <body>
        <h1>View Record</h1>
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
                <tr>
                    <td><?= $view->escape($record['assetTag']) ?></td>
                    <td><?= $view->escape($record['assignedTo']) ?></td>
                    <td><?= $view->escape($record['dateBought']) ?></td>
                    <td><?= $view->escape($record['dateDecommissioned']) ?></td>
                    <td><?= $view->escape($record['deviceType']) ?></td>
                    <td><?= $view->escape($record['operatingSystem']) ?></td>
                    <td>
                        <a href="?action=update&assetTag=<?= $view->escape($record['assetTag']) ?>">Update</a> |
                        <a href="?action=delete&assetTag=<?= $view->escape($record['assetTag']) ?>">Delete</a>
                    </td>
                </tr>
            </tbody>
        <p><a href="/">Back</a></p>
    </body>
</html>