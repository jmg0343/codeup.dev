(function(){
    "use strict";

    // TODO: Create an array holding the names of the eight planets in our solar system in order, starting closest to the sun.
    var planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"];

    // function for logging the planets array
    function logPlanets() {
        // console.log("Here is the list of planets:");
        // console.log(planets);
        // console.log("---- ---- ---- ----");
        console.log("Here is a list of the planets in our solar system:\n" + planets);
    }

    logPlanets();

    console.log("\n");

    console.log('Adding "The Sun" to the beginning of the planets array.');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    logPlanets(planets.unshift("The Sun"));

     console.log("\n");



    console.log('Adding "Pluto" to the end of the planets array.');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    logPlanets(planets.push("Pluto"));

    console.log("\n");



    console.log('Removing "The Sun" from the beginning of the planets array.');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    logPlanets(planets.shift());

    console.log("\n");



    console.log('Removing "Pluto" from the end of the planets array.');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    logPlanets(planets.pop());

    console.log("\n");



    console.log('Finding and logging the index of "Earth" in the planets array.');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    console.log("The index of Earth is: " + planets.indexOf("Earth"));

    console.log("\n");



    console.log('Using splice to remove the planet after "Earth".');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    logPlanets(planets.splice(3, 1));

    console.log("\n")



    console.log('Using splice to add back the planet after "Earth".');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    logPlanets(planets.splice(3, 0, "Mars"));

    console.log("\n");



    console.log("Reversing the order of the planets array.");
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    logPlanets(planets.reverse());

    console.log("\n");

    

    console.log("Sorting the planets array.");
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    logPlanets(planets.sort());
})();
