windows.onload=function(){
      
 
    var loadhere = document.querySelector('issue');
    var httpReq;
  
    loadhere.addEventListener('click', function(element) {
      element.preventDefault();
        
  
      httpReq = new XMLHttpRequest();
  
      var url = "fulljob.php";
      httpReq.onreadystatechange = loadResult;
      httpReq.open('GET', url);
      httpReq.send();
    });
  
    function loadResult() {
      if (httpReq.readyState === XMLHttpRequest.DONE) {
        if (httpReq.status === 200) {
          var response = httpReq.responseText;
          var result = document.querySelector('register');
          result.innerHTML = response;
        } else {
          alert('No result found.');
        }
      }
    }
    
    
 }