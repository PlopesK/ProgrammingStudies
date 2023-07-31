//Basic tests with Cases
function caseInSwitch(val) {
  let answer = "";
  switch (val) {
    case 1:
      answer = "alpha";
      break;

    case 2:
      answer = "beta";
      break;

    case 3:
      answer = "gamma";
      break;

    case 4:
      answer = "delta";
      break;

    default:
      answer = "There's only 4 options!";
      break;
  }
  return answer;
}

console.log(caseInSwitch(1));
console.log(caseInSwitch(2));
console.log(caseInSwitch(3));
console.log(caseInSwitch(4));
console.log(caseInSwitch(5));

/* ------------- */

function switchOfStuff(val) {
    let answer = "";
    switch (val) {
      case "a":
        answer = "apple";
        break;
      
      case "b":
        answer = "bird";
        break;
  
      case "c":
        answer = "cat";
        break;
  
      default:
        answer = 'stuff';
    }
    return answer;
  }
  
  console.log(switchOfStuff('a'));
  console.log(switchOfStuff('b'));
  console.log(switchOfStuff('c'));
  console.log(switchOfStuff('d'));
  console.log(switchOfStuff(4));

  /* ---------------------------------------------------- */
  //Multiple Cases with same Value

  function sequentialSizes(val) {
    let answer = "";
    switch (val) {
      case 1:
      case 2:
      case 3:
        answer = "Low";
        break;
      case 4:
      case 5:
      case 6:
        answer = "Mid";
        break;
      case 7:
      case 8:
      case 9:
        answer = "High";
        break;
      default:
        answer = "Only from 1 to 9!";
        break;
    }
    
    return answer;
  }
  
  console.log(sequentialSizes(1));
  console.log(sequentialSizes(2));
  console.log(sequentialSizes(3));
  console.log(sequentialSizes(4));
  console.log(sequentialSizes(5));
  console.log(sequentialSizes(6));
  console.log(sequentialSizes(7));
  console.log(sequentialSizes(8));
  console.log(sequentialSizes(9));
  console.log(sequentialSizes(10));

  /* ---------------------------------------------------- */

  function chainToSwitch(val) {
    let answer = "";
    switch (val) {
      case "bob":
        answer = "Marley";
        break;
      case 42:
        answer = "The Answer";
        break;
      case 1: 
        answer = "There is no #1";
        break;
      case 99:
        answer = "Missed me by this much!";
        break;
      case 7:
        answer = "Ate Nine";
        break;
      default:
        answer = "Invalid Answer!";
        break;
    }
  
    return answer;
  }
  
  console.log(chainToSwitch("bob"));
  console.log(chainToSwitch(42));
  console.log(chainToSwitch(1));
  console.log(chainToSwitch(99));
  console.log(chainToSwitch(7));
  console.log(chainToSwitch("John"));
  console.log(chainToSwitch(156));