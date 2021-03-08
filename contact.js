function ValidationEvent() {
    var firstName = document.getElementById("firstname").value; 
    var lastName = document.getElementById("lastname").value; 
    var email = document.getElementById("email").value; 
    var message = document.getElementById("message").value; 
    var emailExp = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/; 

    if (firstName != "" && lastName != "" && email != "") { 
        alert("Error! Please enter require fields...");
        return false;
    } 
    if (email.match(emailExp)) {
        alert("Error! Invalid email");
        return false; 
    }

}




/*var a = document.getElementById("contact_form");
var createform = document.createElement('form');
createform.setAttribute("action", ""); 
createform.setAttribute("method", "post");
a.appendChild(createform)

var heading = document.createElement('h2');
heading.innerHTML = "Contact Form"; 
createform.appendChild(heading); 

var line = document.createElement('hr');
createform.appendChild(line); 

var linebreak = document.createElement('br'); 
createform.appendChild(linebreak); 

var firstname = document.createElement('label'); 
firstname.innerHTML = "First Name * "; 
createform.appendChild(firstname); 

var firstinput = document.createElement('input');
firstinput.setAttribute("type", "text");
firstinput.setAttribute("name", "dname");
createform.appendChild(firstinput); 

var linebreak = document.createElement('br'); 
createform.appendChild(linebreak); 

var lastname = document.createElement('label');
lastname.innerHTML = "Last Name *"; 
createform.appendChild(lastname); 

var lastinput = document.createElement('input');
lastinput.setAttribute("type", "text");
lastinput.setAttribute("name", "dname");
createform.appendChild(lastinput); 
 
var linebreak = document.createElement('br'); 
createform.appendChild(linebreak); 

var emaillabel = document.createElement('label');
emaillabel.innerHTML = "Email Address * "; 
createform.appendChild(emaillabel); 

var emailinput = document.createElement('input');
emailinput.setAttribute("type", "text");
emailinput.setAttribute("name", "dname");
createform.appendChild(emailinput); 

var linebreak = document.createElement('br'); 
createform.appendChild(linebreak); 

var messagelabel = document.createElement('label');
messagelabel.innerHTML = "Message (Optional)"; 
createform.appendChild(messagelabel); 

var messagetext = document.createElement('textarea'); 
messagetext.setAttribute("name", "dname"); 
createform.appendChild(messagetext)

var sendbutton = document.createElement('input'); 
sendbutton.setAttribute("type", "submit");
sendbutton.setAttribute("name", "dsubmit"); 
sendbutton.setAttribute("value", "Send"); 
createform.appendChild(sendbutton);*/ 

