window.onload = function(){
  document.querySelector("#send").onclick = function(){
    ajaxGet();
   };
}

function ajaxGet() {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if(request.readyState == 4 && request.status == 200){
        document.querySelector("#result").innerHTML = request.responseText;
    }
  }

  request.open('GET', 'ip.php');
  request.send();
}
