<?php
include('connection.php');

$id=1;//$_POST('idVal');

$issql="SELECT * FROM issues WHERE id = $id";

$Iquery=$conn->query($issql);

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
<div class="container">
        <div class= "header">BugMe Issue Tracker</div>

	
		
            <div class ="navigation">
              <nav>  
                <ul>
                   <li><a href= "home.php">Home</a></li>
                   <li><a  href= "newuser.html">New user</a></li>
                   <li><a href= "newissue.html">New Issue</a></li>
                   <li><a href= "index.html">Logout</a></li>
                   
                </ul>
            </nav>
            <main>
            </div>
            <div class ="register"><!--Override this div for ajax implementation-->
            <?php foreach($Iquery as $row):?>
 
 <h2> <?php echo $row['title'];?> </h2>
 <h4>Issue #<?php echo $row['id'];?></h4>
 <div class='issBody'>
     <div class= 'des'> 
         <p > <?php echo $row['description'];?></p>
         <ul >
             <li><strong>></strong> Issue created on <?php echo $row['created'];?> by <?php echo $row['created_by'];?></li>
             <li><strong>></strong> Last updated on <?php echo $row['updated'];?> </li>
         </ul>
     </div>
     <div class='side'> 
         <div class='sidebox'>
             <h3>Assigned To: <h3>
             <h4> <?php echo $row['assigned_to'];?></h4>
             <h3>Type: <h3>
             <h4> <?php echo $row['type'];?></h4>
             <h3>Priority: <h3>
             <h4> <?php echo $row['priority'];?></h4>
             <h3>Status: <h3>
             <h4> <?php echo $row['status'];?></h4>
     </div>
         <button class='closed'> Mark as Closed</button>
         <button class='progress'> Mark In Progress</button>
     </div>

 </div>
 <script type="text/javascript">
 
    var closed= document.querySelector('closed');
     closed.addEventListener("click", function(e){
         
         <?php
         $id='Closed';
     $stmt = $conn->prepare("insert into issues(status) values (?)");
     $stmt->bind_param("s",$id);
     $stmt->execute();
     
     $stmt->close();
     $conn->close();?>
         
     });

     var progress= document.querySelector('progress');
     progress.addEventListener("click", function(e){
         
         <?php
         $id='In Progress';
     $stmt = $conn->prepare("insert into issues(status) values (?)");
     $stmt->bind_param("s",$id);
     $stmt->execute();
     
     $stmt->close();
     $conn->close();?>
         
     });
 
</script>
<?php endforeach;?>
            </div>
            
</div>
            
				
			
		</main>
    </div>

 
 
 </body>
</html>