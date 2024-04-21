function calculateInterest() {
  var principal = parseFloat(document.getElementById("principal").value);
  var time = parseFloat(document.getElementById("time").value);
  var rate = parseFloat(document.getElementById("rate").value);

  var simpleInterest = (principal * time * rate) / 100;

  document.getElementById("interestResult").innerHTML =
    "Simple Interest: " + simpleInterest.toFixed(2);
}
