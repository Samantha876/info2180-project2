

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
    <div class="container">
        <div class= "header">BugMe Issue Tracker</div>

	
		<div class='makeFlex'>
            <div class ="navigation">
              <nav>  
                <ul>
                   <li><a href= "home.php">Home</a></li>
                   <li><a  href= "newuser.php">New user</a></li>
                   <li><a href= "newissue.html">New Issue</a></li>
                   <li><a href= "index.html">Logout</a></li>
                   
                </ul>
            </nav>
            
            </div>
			<div class ="register"><!--Override this div for ajax implementation-->
            <div> 
            <div class='line1'><div class='Istitle'><h2>Issues</h2></div>
            <div class='newisb'><button ><a href='newissue.html'> Create New Issue</a></button></div>
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
                <td>#<a href='fulljob.php'><?php echo $row['id'];?></a> <?php echo' '.$row['title']; ?></td>
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
            </div>
            
				
			
		</main>
    </div>
        
        </body>
</html>
