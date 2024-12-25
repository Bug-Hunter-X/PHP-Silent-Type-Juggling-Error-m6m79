function myFunction() {
  // Check for undefined variable before using it in calculations.  Using strict comparison will prevent unexpected implicit type conversions. 
  if (isset($undefinedVar) === false){
    return 0; // return 0 or handle the absence appropriately.
  }
  return $undefinedVar + 10;
}