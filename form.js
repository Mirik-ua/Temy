window.onload = function(){
  var inp_email = document.querySelector("input[name=email]");
  var inp_phone = document.querySelector("input[name=phone]");
  var inp_name = document.querySelector("input[name=name]");
  var inp_surname = document.querySelector("input[name=surname]");
 
  document.querySelector('#send').onclick = function(){
    var param =
          "email=" + inp_email.value +
          "&" + "phone=" + inp_phone.value +
          "&" + "name=" + inp_name.value +
          "&" + "surname=" + inp_surname.value;
    ajaxPost(param);
  };
}

function ajaxPost(param) {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if(request.readyState == 4 && request.status == 200){
      if (request.responseText == "1") {
        document.querySelector("#result").innerHTML = "all good";
        document.querySelector("form").style.display = "none";
      }else {
        document.querySelector('#result').innerHTML = request.responseText;
      }
    }
  }

  request.open('POST', 'ip.php');
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(param);
}
