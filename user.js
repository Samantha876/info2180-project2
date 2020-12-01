window.onload=function(){
    var form= document.getElementById("form");

    form.addEventListener("submit",(e)=>{
        e.preventDefault();

        var firstname = document.getElementById('firstname');
        var lastname = document.getElementById('lastname');
        var password = document.getElementById('password');
        var email = document.getElementById('email');
        var status="ok";

        if (isValid(firstname.value.trim())) {
            alert('Invalid Firstname');
            status="no";
        };

        if (isValid(lastname.value.trim())) {
            alert('Invalid Lastname');
            status="no";
        };

        if (isPassword(password.value.trim())) {
            alert ('Try another password');
            status="no";
        };

        if (isEmail(email.value.trim())) {
            alert('Invalid Email Address');
            status="no";
        };

        

        function isValid(name){
            if(!name.match("^[a-zA-Z]+$")){
                return true;
            }
        }

        function isPassword(password){
            if (!password.match("/[a-z+A-z+0-9+]{8,}$/")) {
                return true;
            }
        }

        function isEmail(email) {
            if(!email.match("/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/")){
                return true;
            }

        }

        if (status=="ok"){
            form.submit();
            console.log("End of validation");
        }

    });

}