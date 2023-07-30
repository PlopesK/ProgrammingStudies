const Lines = "FirstLine\n\t" + '\\' + 'SecondLine\nThirdLine';
console.log(Lines);

/* 

\'	single quote
\"	double quote
\\	backslash
\n	newline
\t	tab
\r	carriage return
\b	backspace
\f	form feed

*/
const myStr = "I come first. " + "I come second.";
myStr += '\nThis is the first sentence. ';
myStr += 'This is the second sentence.';
console.log(myStr);

const myName = "PlopesK";
const me = "My name is " + myName + " and I am well!";

const someAdjective = "Fun and interesting";
let myOpinion = "Learning to code is ";
myOpinion += someAdjective + '!';

const fullLine = me + '\n' + myOpinion;

/* --------------------------------------------------- */
let lastNameLength = 0;
const lastName = "Lovelace";
let firstLetterOfLastName = "";
let lastLetterofLastName = " ";

lastNameLength = lastName.length;
firstLetterOfLastName = lastName[0];
lastLetterofLastName = lastName[lastName.length - 1];

/* --------------------------------------------------- */
const myArray = ["string", 4];
const myNest = [["Candys", 54], ["Bags", 6]];
const newArray = [18, 64, 99];
newArray[0] = 45

const arr = [
    [1, 2, 3], //Line 0
    [4, 5, 6], //Line 1
    [7, 8, 9], //Line 2
    [[10, 11, 12], 13, 14] //Line 3
  ];
  
  const subarray = arr[3]; //[[10, 11, 12], 13, 14] (Line 3);
  const nestedSubarray = arr[3][0]; //[10, 11, 12] (Line 3 first array);
  const element = arr[3][0][1]; //11 (Line 3, first array, second value);

const arr1 = [1, 2, 3];
arr1.push(4); //Put a new value. Resulting in: [1, 2, 3, 4];

const arr2 = [["John", 23], ["cat", 2]];
arr2.push(["dog", 3]); //Result: [["John", 23], ["cat", 2], ["dog", 3]];

const threeArr = [1, 4, 6];
const oneDown = threeArr.pop(); //Removes last value
console.log(oneDown); //6
console.log(threeArr); //1, 4

const firstDown = threeArr.shift(); //Removes first
console.log(firstDown); //1
console.log(threeArr); //4

threeArr.unshift(9); //Put a new value at beggining;

/* --------------------------------------------------- */
function reusableFunction  () {
    console.log("Hi World");
}
reusableFunction();

function testFun(param1, param2) {
    console.log(param1, param2); //"Hello World"
}
testFun("Hello", " World");  

function functionWithArgs(arg1, arg2) {
    const sum = arg1 + arg2;
    console.log(sum);
}
functionWithArgs(1,2);
functionWithArgs(7,9);

function timesFive(num) {
    return (num) * 5;
  }
const FIVE = timesFive(5);
const TWO = timesFive(2);
const ZERO = timesFive(0);

const myGlobal = 10; //Global value

function fun1() {
  oopsGlobal = 5; //Without let, const or var, it's automatically a Global Value
}

function fun2() {
  let output = "";
  if (typeof myGlobal != "undefined") {
    output += "myGlobal: " + myGlobal;
  }
  if (typeof oopsGlobal != "undefined") {
    output += " oopsGlobal: " + oopsGlobal;
  }
  console.log(output);
}

function myLocalScope() {
    const myVar = "Local Message!";
    console.log('inside myLocalScope', myVar);
  }
  myLocalScope();
  
  // myVar is not defined outside of myLocalScope
  console.log('outside myLocalScope', myVar); //The color even changes :O

  let sum = 0;

function addThree() {
  sum = sum + 3; //Adds 3 to the global var, return is set as 'undefined'
}

function addFive() {
  sum = sum + 5; //Adds 5 to the global sum var, resulting in 8
}

addThree();
addFive();

  