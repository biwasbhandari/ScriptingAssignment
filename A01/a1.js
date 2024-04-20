function odoreven(num) {
  if (num % 2 === 0) {
    console.log(`${num} is an even number.`);
  } else {
    console.log(`${num} is an odd number.`);
  }
}
const input = prompt("Enter a number: ");
const number = Number(input);

if (!isNaN(number)) {
  odoreven(number);
} else {
  console.log("Invalid input!@!!! Please enter number.");
}
