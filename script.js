document.querySelector('#jokeButton').addEventListener('click', function() {
    fetch('https://official-joke-api.appspot.com/random_joke')
    .then(response => response.json())
    .then(data => alert(data.setup + "\n" + data.punchline))
    .catch(error => console.error('Error:', error));
});