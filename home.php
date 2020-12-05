<?php $query = $conn->query('SELECT * FROM issues');?>

<?php $results = $query->fetchAll(PDO::FETCH_ASSOC);?>


<html>
    <head>
    <script src="home.js" type="text/javascript"></script>
    </head>
    <body>
        <div>
            <button id = "all"> ALL</button>
            <button id = "open"> OPEN </button>
            <button id = "mytickets"> MY TICKETS </button> 
        </div>
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
