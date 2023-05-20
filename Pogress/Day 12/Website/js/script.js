
window.addEventListener('DOMContentLoaded', getImage);

function getImage() {
  fetch('https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY')
    .then(response => response.json())
    .then(data => {
      displayImage(data);
    })
    .catch(error => {
      console.log('Hata:', error);
    });
}

function displayImage(data) {
  const imageElement = document.getElementById('apod-image');
  imageElement.src = data.url;
}


