function calculate() {
  var operand1 = parseFloat(document.getElementById("operand1").value);
  var operand2 = parseFloat(document.getElementById("operand2").value);
  var operation = document.getElementById("operation").value;
  var result;

  switch (operation) {
    case "add":
      result = operand1 + operand2;
      break;
    case "sub":
      result = operand1 - operand2;
      break;
    case "multiply":
      result = operand1 * operand2;
      break;
    case "divide":
      if (operand2 !== 0) {
        result = operand1 / operand2;
      } else {
        result = "Cannot divide by zero!";
      }
      break;
    default:
      result = "Invalid operation";
  }

  document.getElementById("result").innerHTML = "Result: " + result;
}
