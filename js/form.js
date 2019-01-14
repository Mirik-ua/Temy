window.onload = function(){
  var inp_name = document.querySelector("input[name=name]");
  var inp_surname = document.querySelector("input[name=surname]");
  var inp_email = document.querySelector("input[name=email]");
  var inp_phone = document.querySelector("input[name=phone]");
  var inp_country = document.querySelector("select[name=country]");
  var inp_state = document.querySelector("select[name=state]");
  var inp_city = document.querySelector("select[name=city]");
  var inp_adress = document.querySelector("input[name=adress]");
  var inp_about = document.querySelector("textarea[name=about]");

  document.querySelector('#send').onclick = function(){
    var param =
                "name=" + inp_name.value +
          "&" + "surname=" + inp_surname.value+
          "&" + "email=" + inp_email.value +
          "&" + "phone=" + inp_phone.value +
          "&" + "country=" + inp_country.value +
          "&" + "state=" + inp_state.value +
          "&" + "city=" + inp_city.value +
          "&" + "adress=" + inp_adress.value +
          "&" + "about me=" + inp_about.value;
    ajaxPost(param);
  };
}

function ajaxPost(param) {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if(request.readyState == 4 && request.status == 200){
      if (request.responseText == "1") {
        alert("you comleted the registration form!\n Congratulations!!!");
      }else {
        alert("enter all empty line");
      }
    }
  }

  request.open('POST', '../php/ip.php');
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(param);
}
