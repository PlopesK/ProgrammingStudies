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

/* ------------- */

const testObj3 = {
  12: "Namath",
  16: "Montana",
  19: "Unitas",
};

const playerNumber = 16;
const player = testObj3[playerNumber];
console.log(player); //Montana

/* ----------------------------------- */
//Add

const myDog = {
  name: "Happy Coder",
  legs: 4,
  tails: 1,
  friends: ["freeCodeCamp Campers"],
};
myDog.bark = "bow-wow"; //Adding 'bark'
console.log(myDog);

/* ----------------------------------- */
//Delete

const myDog = {
  name: "Happy Coder",
  legs: 4,
  tails: 1,
  friends: ["freeCodeCamp Campers"],
  bark: "woof",
};
delete myDog.tails; //Deleting 'tails'
console.log(myDog);

/* ----------------------------------- */
//Search inside object

function phoneticLookup(val) {
  let result;
  const lookup = {
    alpha: "Adams",
    bravo: "Boston",
    charlie: "Chicago",
    delta: "Denver",
    echo: "Easy",
    foxtrot: "Frank",
  };
  result = lookup[val];
  return result;
}

console.log(phoneticLookup("alpha"));
console.log(phoneticLookup("bravo"));
console.log(phoneticLookup("charlie"));
console.log(phoneticLookup("delta"));
console.log(phoneticLookup("echo"));
console.log(phoneticLookup("foxtrot"));
console.log(phoneticLookup(""));

/* ------------- */
//Check

function checkObj(obj, checkProp) {
  if (obj.hasOwnProperty(checkProp)) {
    return obj[checkProp];
  } else {
    return "Not Found";
  }
}

console.log(checkObj({ gift: "pony", pet: "kitten", bed: "sleigh" }, "gift"));
console.log(checkObj({ gift: "pony", pet: "kitten", bed: "sleigh" }, "pet"));
console.log(checkObj({ gift: "pony", pet: "kitten", bed: "sleigh" }, "house"));
console.log(checkObj({ city: "Seattle" }, "city"));
console.log(checkObj({ pet: "kitten", bed: "sleigh" }, "gift"));

/* ------------- */

const myStorage = {
  car: {
    inside: {
      "glove box": "maps",
      "passenger seat": "crumbs",
    },
    outside: {
      trunk: "jack",
    },
  },
};

const gloveBoxContents = myStorage.car.inside["glove box"];
console.log(gloveBoxContents);

/* ------------- */

const myPlants = [
  {
    type: "flowers",
    list: ["rose", "tulip", "dandelion"],
  },
  {
    type: "trees",
    list: ["fir", "pine", "birch"],
  },
];

const secondTree = myPlants[1].list[1];
console.log(secondTree); //pine
