var form = document.getElementsByTagName('form')[0];
var email = document.querySelector('#email');
var error = document.querySelector(".error");

email.addEventListener("input", function(event){
  if (email.validity.valid) {
    email.innerHTMl = "";
    email.className = "error";
  }
},false);

function valid(form) {
  var error = false;
  var name = form.name.value;
  var surname = form.surname.value;
  var email = form.email.value;
  var phone = form.phone.value;

  if (name == "" || name == " ") {
    alert("enter please your valid name");
  }else if (surname == "" || surname == " ") {
    alert("enter please your valid surname");
  }else if (email == "" || email == " ") {
    alert("enter please your valid E-mail");
  }else if (phone == "" || phone == " ") {
    alert("enter please your valid Phone Number");
  }if (error) {
    alert(error)
  }else {
    window.location = "";
  }
};

function validPhone(event) {
  var char = String.fromCharCode(event.which);

  if (!(/[0-9+]/.test(char))) {
    event.preventDefault();
  }
};

  function validName(event) {
    var char = String.fromCharCode(event.which);

      if (!(/[a-z,A-Z]/.test(char))) {
        event.preventDefault();
    }
  };
