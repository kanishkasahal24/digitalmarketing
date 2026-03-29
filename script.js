const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add("show");
        }
    });
});

document.querySelectorAll(".fade-in").forEach(el => observer.observe(el));



const faqs = document.querySelectorAll(".questions");

faqs.forEach(faq => {
    faq.querySelector(".question-header").addEventListener("click", () => {

        faqs.forEach(item => {
            if(item !== faq) item.classList.remove("active");
        });

        faq.classList.toggle("active");
    });
});



const signupForm = document.getElementById("signupForm");

if(signupForm){
signupForm.addEventListener("submit", function(e){
let p = document.getElementById("signupPassword").value;
let c = document.getElementById("confirmPassword").value;

if(p !== c){
alert("Passwords do not match");
e.preventDefault();
}
});
}

const loginForm = document.getElementById("loginForm");

if(loginForm){
loginForm.addEventListener("submit", function(e){
let email = document.getElementById("loginEmail").value;

if(email === ""){
alert("Fill all fields");
e.preventDefault();
}
});
}

// Dark/Light mode toggle
const toggleBtn = document.getElementById("theme-toggle");

toggleBtn.addEventListener("click", function() {
    document.body.classList.toggle("dark-mode");
    
    // Toggle icon
    if(document.body.classList.contains("dark-mode")){
        toggleBtn.textContent = "☀️"; // sun icon for light mode
    } else {
        toggleBtn.textContent = "🌙"; // moon icon for dark mode
    }

    // Optional: save preference in localStorage
    if(document.body.classList.contains("dark-mode")){
        localStorage.setItem("theme", "dark");
    } else {
        localStorage.setItem("theme", "light");
    }
});

// Check saved preference on page load
if(localStorage.getItem("theme") === "dark"){
    document.body.classList.add("dark-mode");
    toggleBtn.textContent = "☀️";
}