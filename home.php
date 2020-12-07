

<?php 

include('connection.php');
$query = mysqli_query($conn, 'SELECT * FROM issues');?>

<?php $results = $query?>

<!DOCTYPE html>
<html>
    <head>
    <script src="home.js" type="text/javascript"></script>
    <link href="issue.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <div> 
            <div class='line1'><div class='Istitle'><h2>Issues</h2></div>
            <div class='newisb'><button> Create New Issue</button></div>
        </div>
        <div class='Ifilter'>
            <h4>Filter by:</h4>
            <button id = "all"> ALL</button>
            <button id = "open"> OPEN </button>
            <button id = "mytickets"> MY TICKETS </button>
        </div> 
        </div>
        
            
    <table>
        <thead>
            <tr class='Iheading'>
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
                <td>#<button><?php echo $row['id'];?></button> <?php echo' '.$row['title']; ?></td>
                <td><?php echo $row['type']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><?php echo $row['assigned_to'];?></td>
                <td><?php echo $row['created'];?></td>
            <tr>
                <form id='issue'> 
                    <input type='hidden' value= <?php echo $row['id'];?>>
                </from>
        <?php endforeach;?>
        
        </tbody>
    </table>
        </div>
        </body>
</html>
