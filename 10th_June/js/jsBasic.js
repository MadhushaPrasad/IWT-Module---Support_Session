// Numerical
const numberInt = 10;
const numberTest = 10.5;

// Strings
const variableString = "hello";
const variableString02 = 'hello';
const variableSingleCharString = 'a'; //const variableSingleCharString = "a";

// Boolean
const variableBoolean = true;//const variableBoolean = false;

// Null
const variableNull = null;

// Undefined
const variableUndefined = undefined;

// Object
class MyClass {
    constructor(name) {
        this.name = name;
    }
}

const variableObject = new MyClass("hello");

//can't be use js keyword for variable names
// const break = 'hello';

const selectVehicle = document.getElementById("Vehicles");
console.log(selectVehicle);


// if statement
if (selectVehicle === "01") {
    console.log("Car");
} else {
    console.log("Not A Car");
}

// if statement with else if
if (selectVehicle === "01") {
    console.log("Car");
} else if (selectVehicle === "02") {
    console.log("Van");
} else if (selectVehicle === "03") {
    console.log("Bus");
} else {
    console.log("Not a vehicle");
}

// switch statement
switch (selectVehicle) { //1 || "01"
    case "01":
        console.log("Car");
        break;
    case "02":
        console.log("Van");
        break;
    case "03":
        console.log("Bus");
        break;
    default :
        console.log("Not a vehicle");
}

// for
for (let count = 1; count <= 10; count++) {
    console.log(count);
}

var count02 = 1;

while (count02 <= 10) {
    console.log("Hello");
    count02++;
}
