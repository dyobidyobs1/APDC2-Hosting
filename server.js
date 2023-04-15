/*
TO TEACH:
1. Loop Statements
2. Create Functions
3. Array
4. JSON
5. ExpressJS
6. Databases (MongoDB)
7. ReactJS

ACTIVITY OUTPUT:

Name: Harold Eustaquio
Country: Philippines
Nationality: Filipino
Birth Year: 2001
Age: 21
Status: Legal Age
After 5 Years: 26
Status: Legal Age

*/
console.clear();

let firstname = "Katherine";
let lastname = "Maamo";
let country = "Philippines";
let birth = 2001;
let age = 2023-birth; 
let status;
if(age >= 18){
    status = "Legal Age";
}else{
    status = "Not Legal age";
}
let after = (age+5);
if(after >= 18){
    after = "Legal Age";
}else{
    after = "Not Legal Age";
}
let nationality;
if(country == "Philippines"){
    nationality = "Filipino";
}else{
    nationality = "Not Filipino";
}


console.log("Name: " + firstname + " " + lastname);
console.log("Country: " + country);
console.log("Nationality: " + nationality);
console.log("Birth Year: " + birth);
console.log("Age: " + age);
console.log("Status: " + status);
console.log("After 5 Years: " + (age+5));
console.log("Status: " + after);