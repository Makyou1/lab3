<script>
  const musicians = [
    { name: 'Mayer Hawthorne', image: 'Mayerhawthorne.jpg' },
    { name: 'Bruno Mars', image: 'bruno.jpg' },
    { name: 'Mac Miller', image: 'macmiller.jpg' },
    { name: 'Tuxedo', image: 'tuxedo.jpg' },
    { name: '2pac', image: 'tupac.jpg' },
	{ name: 'Joyner Lucas', image: 'Joynerlucas.jpg' }
  ];

  function createMusicians() {
    const container = document.createElement('div');
    container.className = 'musicians-container';

    musicians.forEach(musician => {
      const musicianElement = document.createElement('div');
      musicianElement.className = 'musician';

      const imageElement = document.createElement('img');
      imageElement.src = musician.image;
      imageElement.alt = musician.name;

      const nameElement = document.createElement('p');
      nameElement.textContent = musician.name;

      musicianElement.appendChild(imageElement);
      musicianElement.appendChild(nameElement);
      container.appendChild(musicianElement);
    });

    document.body.appendChild(container);
  }

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
    document.getElementById("currentdate").innerHTML = d;

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
        buttonPressed = true;
      }, 3000);
    } else {
      alert('Hello again');
    }
  }
</script>
