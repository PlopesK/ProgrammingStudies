//Basic tests with functions
//Calling
function reusableFunction  () {
    console.log("Hi World");
}
reusableFunction();

/* ---------------------------------------------------- */
//Parameter

function testFun(param1, param2) {
    console.log(param1, param2); //"Hello World"
}
testFun("Hello", " World");  

/* ------------- */

function functionWithArgs(arg1, arg2) {
    const sum = arg1 + arg2;
    console.log(sum);
}
functionWithArgs(1,2);
functionWithArgs(7,9);

/* ------------- */

function timesFive(num) {
    return (num) * 5;
  }
const FIVE = timesFive(5);
const TWO = timesFive(2);
const ZERO = timesFive(0);

/* ---------------------------------------------------- */
//Var Tests 

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

/* ------------- */

function myLocalScope() {
    const myVar = "Local Message!";
    console.log('inside myLocalScope', myVar);
  }
  myLocalScope();
  
// myVar is not defined outside of myLocalScope
console.log('outside myLocalScope', myVar); //The color even changes :O

/* ------------- */

let sum = 0;

function addThree() {
  sum = sum + 3; //Adds 3 to the global var, return is set as 'undefined'
}

function addFive() {
  sum = sum + 5; //Adds 5 to the global sum var, resulting in 8
}

addThree();
addFive();


/* ---------------------------------------------------- */
//If-Booleans

function trueOrFalse(wasThatTrue) {
    if (wasThatTrue) {
      return "Yes, that was true";
    }
    return "No, that was false";
}

trueOrFalse(true);
trueOrFalse(false);

/* ------------- */

function testEqual(val) {
  if (val == 12) { 
    return "Equal";
  }
  return "Not Equal";
}

console.log(testEqual(10));
console.log(testEqual(12)); //It understand both 12 and '12'
console.log(testEqual('12'));

/* ------------- */

function testStrict(val) {
  if (val === 7 ) { //It will equal STRICTLY to 7 and ONLY 7, "7" doesn't work
    return "Equal";
  }
  return "Not Equal";
}

console.log(testStrict(10));
console.log(testStrict(7));
console.log(testStrict("7"));

/* ------------- */

function compareEquality(a, b) {
  if (a === b) {
    return "Equal";
  }
  return "Not Equal";
}

console.log(compareEquality(10, "10"));
console.log(compareEquality("20", 20));

/* ------------- */

function testGreaterThan(val) {
  if (val >= 101) {
    return "Over 100";
  }

  if (val >= 11 && val <= 100) { 
    return "Over 10";
  }

  return "10 or Under";
}

console.log(testGreaterThan(0));
console.log(testGreaterThan(10));
console.log(testGreaterThan(11));
console.log(testGreaterThan(99));
console.log(testGreaterThan(100));
console.log(testGreaterThan(101));
console.log(testGreaterThan(150));