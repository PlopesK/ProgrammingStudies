//Basic tests with Loops
//WHILE
const myArray = [];
let i = 5; //5 to 0

while (i >= 0) {
  myArray.push(i);
  console.log(i);
  i--;
}

/* ----------------------------------- */
//FOR
const myArray1 = [];
for (let i = 1; i <= 5; i++) {
  myArray1.push(i);
  console.log(i);
}

/* ------------- */

const myArrayOdd = [];
for (let i = 1; i <= 9; i += 2) {
  myArrayOdd.push(i);
  console.log(i);
}

const myArrayEven = [];
for (let i = 0; i <= 10; i += 2) {
  myArrayEven.push(i);
  console.log(i);
}

/* ------------- */

const myArr = [2, 3, 4, 5, 6];
let total = 0;

for (let i = 0; i < myArr.length; i++) {
  total += myArr[i];
  console.log("Value " + [i + 1] + ": " + myArr[i]);
}
console.log("Total: " + total);
