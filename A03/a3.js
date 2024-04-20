let term1 = 0;
let term2 = 1;
let nextTerm;
console.log(term1 + " ");
console.log(term2 + " ");
for (let i = 3; i <= 15; i++) {
  nextTerm = term1 + term2;
  console.log(nextTerm + " ");
  term1 = term2;
  term2 = nextTerm;
}
