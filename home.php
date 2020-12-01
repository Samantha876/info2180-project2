
<?php if($status=="go"):?>
<!--a query is made to get all items from the table-->
<?php $query = $conn->query('SELECT * FROM StationVotes');?>
<!--retrieves data quiered from the database-->
<?php $results = $query->fetchAll(PDO::FETCH_ASSOC);?>

<html>
    <body>
        <div>
            <ul>
                <li>All</li>
                <li>Open</li>
                <li>My Tickets</li>
            </ul>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Type</th>
                <th>Status</th>
                <th>Assigned To</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($results as $row):?>
            <tr>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['type']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><?php echo $row['assigned_to'];?></td>
                <td><?php echo $row['created'];?></td>
            <tr>
        <?php endforeach;?>
        </tbody>
    </table>
        </div>
        </body>
</html>
<?php endif; ?>