const progressBar = document.querySelector(".progress-bar");
const counter = document.querySelector("#counter")
const total = 15;
let remaining = total;
let width = 100;
progressBar.style.width = `${width}%`;
let interval = setInterval(() => {
    remaining--;
    width = (remaining / total) * 100;

    console.log(remaining);
    counter.innerHTML = remaining
    progressBar.style.width = `${width}%`;

    if(remaining <= 0) {
        clearInterval(interval)
        window.open("/", "_self")
    }
}, 1000);