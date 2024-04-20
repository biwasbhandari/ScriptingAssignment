function odoreven(num) {
  if (num % 2 === 0) {
    alert(`${num} is an even number.`);
  } else {
    alert(`${num} is an odd number.`);
  }
}
const input = prompt("Enter a number: ");
const number = Number(input);

if (!isNaN(number)) {
  odoreven(number);
} else {
  alert("Invalid input!@!!! Please enter number.");
}
