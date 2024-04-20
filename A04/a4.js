alert("This is alert box");
let userConfirm = confirm("Do you want to proceed?");
if (userConfirm) {
  console.log("You clicked OK!");
} else {
  console.log("You clicked Cancel!");
}
let userName = prompt("Please enter your name:");
if (userName !== null) {
  console.log("Hello, " + userName + "!");
} else {
  console.log("You didn't enter your name.");
}
