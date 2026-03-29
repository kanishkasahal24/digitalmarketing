e.preventDefault();
document.getElementById("mainForm").addEventListener("submit", function(e){



let name = document.getElementById("name").value.trim();
let email = document.getElementById("email").value.trim();
let phone = document.getElementById("phone").value.trim();
let company = document.getElementById("company").value.trim();
let industry = document.getElementById("industry").value;
let service = document.getElementById("service").value;
let budget = document.getElementById("budget").value.trim();
let goals = document.getElementById("goals").value.trim();
let location = document.getElementById("location").value.trim();
let years = document.getElementById("years").value.trim();
let teamSize = document.getElementById("teamSize").value.trim();
let audience = document.getElementById("audience").value.trim();
let marketing = document.getElementById("marketing").value;
let timeline = document.getElementById("timeline").value;

let valid = true;

/* NAME */
if(name.length < 3){
document.getElementById("nameError").innerText = "Enter valid name";
valid = false;
}else document.getElementById("nameError").innerText = "";

/* EMAIL */
let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
if(!email.match(emailPattern)){
document.getElementById("emailError").innerText = "Invalid email";
valid = false;
}else document.getElementById("emailError").innerText = "";

/* PHONE */
let phonePattern = /^[0-9]{10}$/;
if(!phone.match(phonePattern)){
document.getElementById("phoneError").innerText = "Enter 10 digit number";
valid = false;
}else document.getElementById("phoneError").innerText = "";

/* COMPANY */
if(company === ""){
document.getElementById("companyError").innerText = "Enter company name";
valid = false;
}else document.getElementById("companyError").innerText = "";

/* INDUSTRY */
if(industry === ""){
document.getElementById("industryError").innerText = "Select industry";
valid = false;
}else document.getElementById("industryError").innerText = "";

/* SERVICE */
if(service === ""){
document.getElementById("serviceError").innerText = "Select service";
valid = false;
}else document.getElementById("serviceError").innerText = "";

/* BUDGET */
if(budget === "" || isNaN(budget)){
document.getElementById("budgetError").innerText = "Enter valid budget";
valid = false;
}else document.getElementById("budgetError").innerText = "";

/* LOCATION */
if(location === ""){
document.getElementById("locationError").innerText = "Enter location";
valid = false;
}else document.getElementById("locationError").innerText = "";

/* YEARS */
if(years === "" || isNaN(years)){
document.getElementById("yearsError").innerText = "Enter valid years";
valid = false;
}else document.getElementById("yearsError").innerText = "";

/* TEAM */
if(teamSize === "" || isNaN(teamSize)){
document.getElementById("teamError").innerText = "Enter team size";
valid = false;
}else document.getElementById("teamError").innerText = "";

/* AUDIENCE */
if(audience.length < 5){
document.getElementById("audienceError").innerText = "Describe audience";
valid = false;
}else document.getElementById("audienceError").innerText = "";

/* MARKETING */
if(marketing === ""){
document.getElementById("marketingError").innerText = "Select option";
valid = false;
}else document.getElementById("marketingError").innerText = "";

/* TIMELINE */
if(timeline === ""){
document.getElementById("timelineError").innerText = "Select timeline";
valid = false;
}else document.getElementById("timelineError").innerText = "";

/* GOALS */
if(goals.length < 10){
document.getElementById("goalsError").innerText = "Explain your goals";
valid = false;
}else document.getElementById("goalsError").innerText = "";


document.getElementById("clearBtn").addEventListener("click", function(){
    document.getElementById("mainForm").reset();
});

/* SAVE MULTIPLE CLIENTS */

if(valid){

let clients = JSON.parse(localStorage.getItem("clients")) || [];

let newClient = {
name,
email,
phone,
company,
industry,
service,
budget,
goals,
location,
years,
teamSize,
audience,
marketing,
timeline
};

clients.push(newClient);

localStorage.setItem("clients", JSON.stringify(clients));

alert("Form Submitted Successfully!");

document.getElementById("mainForm").reset();
}

const elements = document.querySelectorAll(".section-title, input, textarea, select");

elements.forEach(el => el.classList.add("hidden"));

function reveal(){
    let trigger = window.innerHeight * 0.85;

    elements.forEach(el => {
        let top = el.getBoundingClientRect().top;

        if(top < trigger){
            el.classList.add("show");
        }
    });
}

window.addEventListener("scroll", reveal);

});