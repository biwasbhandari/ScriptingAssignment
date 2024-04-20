let sum = 0;
let count = 0;
let number = 0;

while (count < 20) {
  if (number % 2 === 0) {
    sum += number;
    count++;
  }
  number++;
}

document.write("The sum of the first 20 even numbers is: " + sum);
