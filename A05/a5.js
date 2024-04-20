function getMarks() {
  let marks = [];
  for (let i = 1; i <= 5; i++) {
    let mark = parseFloat(prompt(`Enter mark ${i} (out of 5):`));
    if (!isNaN(mark) && mark >= 0 && mark <= 5) {
      marks.push(mark);
    } else {
      alert("Invalid input. Please enter a number between 0 and 100.");
      i--;
    }
  }
  return marks;
}
function calculateAverage(marks) {
  let sum = 0;
  for (let mark of marks) {
    sum += mark;
  }
  return sum / marks.length;
}
let subjectMarks = getMarks();
