window.onload=function(){
    var all= document.getElementById("all");
    var open= document.getElementById("open");
    var tickets= document.getElementById("mytickets");

    all.addEventListener("click",(e)=>{
        e.preventDefault();

    });

    open.addEventListener("click",(e)=>{
        e.preventDefault();

    });

    tickets.addEventListener("click",(e)=>{
        e.preventDefault();

    });


    var issueB=document.getElementById('issue');
    
    issueB.addEventListener('click', function(){
        var idVal=issueB.innerHTML;
        console.log(idVal, 'jn');
    });
}
