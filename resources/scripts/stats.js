function getLastStar() {
    const rating = document.getElementById("star-rating");
    const children = rating.children;

    for (let i = 0; i < children.length; i++) {

        const star = children[i].firstElementChild;

        if (star.classList.contains("far")) {
            console.log(parseInt(star.id.toString()[star.id.toString().length - 1]) - 1);
            return parseInt(star.id.toString()[star.id.toString().length - 1]) - 1;
        }
    }
    console.log(5);
    return 5;
}

function updateStarVisuals(starnum) {
    const rating = document.getElementById("star-rating");
    const children = rating.children;

    for (let i = 0; i < children.length; i++) {
        const star = children[i].firstElementChild;

        if (star.classList.contains("fas")) {
            star.classList.remove("fas");
            star.classList.add("far");
        }
    }

    for (let i = 0; i < starnum; i++) {
        const star = children[i].firstElementChild;

        if (star.classList.contains("far")) {
            star.classList.remove("far");
            star.classList.add("fas");
        }
    }
}

function sendData() {

    const myData = getLastStar();
    const submitButton = document.getElementById("submit-btn");
    const thanks = document.getElementById("thanks");

    if (!(myData)) {
        return;
    }

    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);
        }
      };
    xmlhttp.open("GET", "https://www.zuiderheide.com/resources/scripts/changeStats.php?q=" + myData.toString());
    xmlhttp.send();

    submitButton.disabled = true;
    thanks.innerHTML = "Thank you for rating us!";
    
}