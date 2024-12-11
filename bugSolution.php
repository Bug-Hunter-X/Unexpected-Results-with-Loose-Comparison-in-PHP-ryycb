function foo(a, b) {
  if (a === b) {
    return true;
  } else {
    return false; 
  }
}

//This function will return false when comparing 0 and '0' because of the strict comparison.
var result = foo(0, '0'); //false
console.log(result);

function bar(a, b) {
  if (a == b) {
    return true;
  } else {
    return false; 
  }
}

//This function will return true when comparing 0 and '0' because of the loose comparison. 
var result2 = bar(0, '0'); //true
console.log(result2); 