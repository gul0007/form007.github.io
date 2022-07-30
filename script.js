 // PROMPT ALERT 
        
 function myPrompt() {
    var person = prompt("Please enter Your name"); //The second string optional
    

    
    if (person !== null) { //! means "not equal to"}
    document.getElementById("test").innerHTML =
    "Thanks! for using my Calculator"+ " " + person +"😁";
    
  }
  
  else
   
  {
  alert("Hey, no input !");
  }   
  

} 
function reset() {
    document.getElementById("test").innerHTML ="";
    
} 