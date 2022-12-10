document.getElementById("name").onchange = function () {
    myFunction();
  };
  document.getElementById("tel").onchange = function () {
    myFunctionNumber1();
  };



  var sub = document.getElementById("submit");

function myFunction() {
    var x = document.getElementById("name");
    var regName = /^[a-zA-Z]+$/;
    var name = document.getElementById("name").value;
    if (!regName.test(name)) {
      document.getElementById("err").innerHTML =
        "Your name must contain only letters";
        document.getElementById("err").style.color = "red";
      sub.disabled = true;
    } else {
      document.getElementById("err").innerHTML = "";
      sub.disabled = false;
    }
  }
  function myFunctionNumber1() {
    var num=document.getElementById("tel").value;
      var reg = new RegExp("^[0-9]*$")
      var long=num.length    
      var test = reg.test(num);  //Test phone string against the regular expression
      if(!test){
      document.getElementById("msg2").innerHTML= "le numero ne doit contenir que des chiffres";
      document.getElementById("msg2").style.color = "red";
      }
      else{document.getElementById("msg2").innerHTML= "";
    }
}
