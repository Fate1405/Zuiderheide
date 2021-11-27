if (!(localStorage.getItem("count"))) {
    localStorage.setItem("count", "0");
}

let n = parseInt(localStorage.getItem("count")) + 1;

localStorage.setItem("count", n.toString());

const disp = document.getElementById("visitorcount");

disp.innerHTML = `Number of reloads: ${localStorage.getItem("count")}`;