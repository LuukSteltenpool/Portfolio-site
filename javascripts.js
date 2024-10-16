let i = 0
let txt = 'Software Engineer'
let speed = 20
function typewriter() {
    if (i < txt.length) {
        document.getElementById("demo").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typewriter, speed);

    }
}
