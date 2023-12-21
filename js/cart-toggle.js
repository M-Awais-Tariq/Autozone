function toggleDiv() {
    // Get the div element by its ID
    const myDiv = document.getElementById("myDiv");
  
    // Toggle the display style between "block" and "none"
    if (myDiv.style.display === "none") {
      myDiv.style.display = "block";
    } else {
      myDiv.style.display = "none";
    }
  }