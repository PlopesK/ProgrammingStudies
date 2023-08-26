/* --------------------------------------------------- */
/* Write a function that takes an integer as input, and returns the number of bits that are equal to one in the
 binary representation of that number. You can guarantee that input is non-negative.*/

var countBits = function (n) {
  var result =
    n.toString(2).match(/1/g) != null ? n.toString(2).match(/1/g).length : 0;
  return result;
};

/* --------------------------------------------------- */
/* Remove vowels */
function disemvowel(str) {
  return str.replace(/[aeiou]/gi, "");
}

/* Replace elements */
function change(str) {
  return str.replace(/hate/gi, "love");
}

console.log(change("I hate being alive"));
