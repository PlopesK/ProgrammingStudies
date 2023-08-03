//Basic tests with Objects
const testObj = {
  hat: "ballcap",
  shirt: "jersey",
  shoes: "cleats",
};

const hatValue = testObj.hat;
const shirtValue = testObj.shirt;
const shoesValue = testObj.shoes;
console.log(hatValue); //ballcap
console.log(shirtValue); //jersey
console.log(shoesValue); //cleats

/* ------------- */

const testObj2 = {
  "an entree": "hamburger",
  "my side": "veggies",
  "the drink": "water",
};

const entreeValue = testObj2["an entree"];
const drinkValue = testObj2["the drink"];
const sideValue = testObj2["my side"];
console.log(entreeValue); //hamburger
console.log(drinkValue); //water
console.log(sideValue); //veggies
