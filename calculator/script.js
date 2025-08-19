let btns = document.querySelectorAll(".add");
let calcScreen = document.getElementById("display");

btns.forEach(btn => {
    btn.addEventListener("click", (e) => {
        e.preventDefault();
        calcScreen.value += btn.getAttribute("datakey");
    })
})

let cancelBtn = document.querySelector(".dellast");
cancelBtn.addEventListener("click", (e) => {
    e.preventDefault();
    calcScreen.value = calcScreen.value.slice(0, -1);
})

let deleteBtn = document.querySelector(".delall");
deleteBtn.addEventListener("click", (e) => {
    e.preventDefault();
    calcScreen.value = "";
})

let calculator = document.getElementById("calculator");
calculator.addEventListener("submit", (e) => {
    e.preventDefault();

    const formData = new FormData(calculator);

    fetch("calculator.php", {
        method: "POST", 
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        calcScreen.value = data;
    })
    .catch(err => console.error(err));
})