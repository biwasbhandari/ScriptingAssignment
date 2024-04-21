function getElements() {
  let elements = [];
  for (let i = 1; i <= 10; i++) {
    let element = parseFloat(prompt(`Enter element ${i}:`));
    if (!isNaN(element)) {
      elements.push(element);
    } else {
      console.log("Invalid input. Please enter a number.");
      i--;
    }
  }
  return elements;
}
function findLargestAndSmallest(elements) {
  let largest = elements[0];
  let smallest = elements[0];
  for (let element of elements) {
    if (element > largest) {
      largest = element;
    }
    if (element < smallest) {
      smallest = element;
    }
  }
  return { largest, smallest };
}

let userElements = getElements();

let { largest, smallest } = findLargestAndSmallest(userElements);

console.log(`The largest element is: ${largest}<br>`);
console.log(`The smallest element is: ${smallest}`);
