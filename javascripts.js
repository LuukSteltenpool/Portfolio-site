


let Mystring = "test";
let Testvalue=10.5;
let Boolean1=false;
let Undefinedtest= undefined;
console.log(Mystring);
console.log(Testvalue);
console.log(Mystring + '='+ Testvalue + 'jaar oud');
console.log(Boolean1)
console.log('dit is de test' + Undefinedtest)

let MyArray = [

    "jan",
    "feb",
    "mar"
];

for(let i=1; i < MyArray.length; i+) {
    console.log(MyArray[i]);}

//Objecten
const Myobj= {
    person01: {
        naam: 'george'
        achternaam: 'bush'
    },
    person02: {
        naam: 'Stephan'
        achternaam: 'Hoeksema'
    }

}
for (const values in person01) {
    console.log(values + ": " +person01[values]);
}