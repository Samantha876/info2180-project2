<?php
include('connection.php');

$id=1;//$_POST('1');

$sql="SELECT * FROM issues WHERE id = $id";

$query=$conn->query($sql);
 ?>  
 <!DOCTYPE html> 
<html> 
<head>
        <meta charset="utf-8">
		<title>BugMe Issue Tracker</title>
		<link href="issue.css" type="text/css" rel="stylesheet" />
        <script src="fulljob.js" type="text/javascript"></script>
	</head>
<body>
 <?php foreach($query as $row):?>
 
    <h1> <?php echo $row['title'];?> </h1>
    <h3> <?php echo $row['id'];?></h3>
    <div class='issBody'>
        <div class= 'des'> 
            <p > <?php echo $row['description'];?></p>
        </div>
        <div class='side'> 
            <div class='sidebox'>
                <h3> Assigned To: <h3>
                <h4> <?php echo $row['assigned_to'];?></h4>
                <h3> Type: <h3>
                <h4> <?php echo $row['type'];?></h4>
                <h3> Priority: <h3>
                <h4> <?php echo $row['priority'];?></h4>
                <h3> Status: <h3>
                <h4> <?php echo $row['status'];?></h4>
        </div>
            <button class='closed'> Mark as Closed</button>
            <button class='progress'> Mark In Progress</button>
        </div>

    </div>
 <?php endforeach;?>
 <script type="text/javascript">
    windows.onload=function(){
        document.getElementsbyClassName('closed').
    
     
        
        
     }
 </script>
 </body>
</html>