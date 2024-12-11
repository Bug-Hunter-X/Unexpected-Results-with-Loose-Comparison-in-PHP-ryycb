function foo(a, b) {
  if (a === b) {
    return true;
  } else {
    return false; 
  }
}

//This function will return false when comparing 0 and '0'.
//This is because the loose comparison operator (==) does not type check the variables.
//The strict comparison operator (===) will return false only when both variables are not of the same type.
var result = foo(0, '0'); //false
console.log(result);