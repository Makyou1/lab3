  document.addEventListener("DOMContentLoaded", function () {
    createMusicians();

    const navbar = document.querySelector('.navbar');
    const checkBtn = document.getElementById('check');

    checkBtn.addEventListener('change', function () {
        navbar.style.display = checkBtn.checked ? 'flex' : 'none';
    });

    document.querySelectorAll('nav ul li a').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                if (targetId === 'profile-intro') {
                    delayedAlert();
                }

                window.scrollTo({
                    top: targetElement.offsetTop - navbar.offsetHeight,
                    behavior: 'smooth'
                });
            }
        });
    });

    const d = new Date();
    const formattedDate = d.toLocaleString(); // Format the date
    document.getElementById("currentdate").innerHTML = formattedDate;

    let answer1 = "You";
    let answer2 = " are viewing my Website";
    let answer3 = ' at this specific date and time';

    document.getElementById("demo").innerHTML +=
        "<br>" + answer1 + answer2 + answer3;

});

function toggleImages(artistId) {
    var imageContainer = document.getElementById(artistId);
    if (imageContainer.style.display === 'none') {
        imageContainer.style.display = 'block';
    } else {
        imageContainer.style.display = 'none';
    }
}

var buttonPressed = false;

function delayedAlert() {
    if (!buttonPressed) {
        setTimeout(function () {
            alert('Hello');
            buttonPressed = false; // Reset buttonPressed
        }, 3000);
    } else {
        alert('Hello again');
    }
}

