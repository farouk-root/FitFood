// let email = document.getElementById("name");
// email.addEventListener("change", () => {
//   let result = /^[a-zA-Z ]+$/.test("John Doe");
//   console.log(email.value);
// });
// email.onchange(() => {
//   console.log(email.value);
// });
document.getElementById("name").onchange = function () {
  myFunction();
};
document.getElementById("nombre").onchange = function () {
  myFunctionNumber();
};
var sub = document.getElementById("submit");

function myFunction() {
  var x = document.getElementById("name");
  var regName = /^[a-zA-Z]+$/;
  var name = document.getElementById("name").value;
  if (!regName.test(name)) {
    document.getElementById("err").innerHTML =
      "Your name must contain only letters";
    sub.disabled = true;
  } else {
    document.getElementById("err").innerHTML = "";
    sub.disabled = false;
  }
}
function myFunctionNumber() {
  var x = document.getElementById("nombre");
  var regName = /^\d+$/;
  var nombre = document.getElementById("nombre").value;
  if (!regName.test(nombre)) {
    document.getElementById("err-nb").innerHTML = "It must contain only number";
    sub.disabled = true;
  } else {
    document.getElementById("err-nb").innerHTML = "";
    sub.disabled = false;
  }
}
