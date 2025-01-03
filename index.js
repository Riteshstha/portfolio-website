var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");

function opentab(tabname) {
    for (var tablink of tablinks) {
        tablink.classList.remove("active-link");
    }
    for (var tabcontent of tabcontents) {
        tabcontent.classList.remove("active-tab");
    }
    event.currentTarget.classList.add("active-link");
    document.getElementById(tabname).classList.add("active-tab");
}




function validation()
{
    var user= document.getElementById('name').value;
    var email= document.getElementById('email').value;
    var message= document.getElementById('message').value;
    if(user == ""){

document.getElementById('user').innerHTML="Please enter your name";
return false;

    }
    if(user.length<=2){
        document.getElementById('user').innerHTML="more than 2 character."
        return false;
    }
    if(!isNaN(user)){
        document.getElementById('user').innerHTML="numbers are not allowded";
        return false;

    }
    else{
        document.getElementById('user').innerHTML="";
    }
    if(email == ""){

        document.getElementById('emaill').innerHTML="Please enter your email";
        return false;
       
            }
           else{
            document.getElementById('emaill').innerHTML="";
           }
            if(message == ""){

                document.getElementById('messages').innerHTML="Please write some messages";
                return false;
                    }
                    else{
                        document.getElementById('messages').innerHTML="";
                    }
}