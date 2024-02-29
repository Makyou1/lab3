<script>
const musicians = [
    { name: 'Mayer Hawthorne', image: 'images/Mayerhawthorne.jpg' },
    { name: 'Bruno Mars', image: 'images/bruno.jpg' },
    { name: 'Mac Miller', image: 'images/macmiller.jpg' },
    { name: 'Tuxedo', image: 'images/tuxedo.jpg' },
    { name: '2pac', image: 'images/tupac.jpg' },
    { name: 'Joyner Lucas', image: 'images/Joynerlucas.jpg' }
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
</script>