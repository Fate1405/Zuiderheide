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

    if (!(myData)) {
        return;
    }

    $.ajax({
        url: "./stats.php",
        
    });
}