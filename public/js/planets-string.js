(function(){
    "use strict";

    var planetsString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";
    var planetsArray;

    // TODO: Convert planetsString to an array, save it to planetsArray.
    planetsArray = planetsString.split("|");
    console.log(planetsArray);


    // TODO: Create a string with <br> tags between each planet. console.log() your results.
    //       Why might this be useful?
    var planetsStringBreak = planetsArray.join("<br>");
    console.log(planetsStringBreak);

   

    // Bonus: Create a second string that would display your planets in an undordered list.
    //        You will need an opening AND closing <ul> tags around the entire string, and <li> tags around each planet.
    //        console.log() your results.
    var planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"];;
    function PlanetsList() {
        console.log("Here is my ordered list of the planets: " + planets);
    }

    console.log(planetsArray);

    var planetsToString = planetsArray.join("</li>,<li>");
    console.log(planetsToString);
    var planetsToArray = planetsToString.split(",");
    console.log(planetsToArray);

    planetsToArray.push("</li>");
    planetsToArray.push("</ul>");
    planetsToArray.unshift("<li>");
    planetsToArray.unshift("<ul>");

    var planetsFinalString = planetsToArray.join("");

    console.log(planetsFinalString);
   
})();
