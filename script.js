const jokes = [
    "Why don't scientists trust atoms? Because they make up everything!",
    "What do you call fake spaghetti? An impasta!",
    "Why did the scarecrow win an award? Because he was outstanding in his field!",
    "How does a penguin build its house? Igloos it together!",
    "I told my wife she should embrace her mistakes. She gave me a hug.",
    "Why did the math book look sad? Because it had too many problems.",
    "Parallel lines have so much in common. It’s a shame they’ll never meet.",
    "What do you call a fish wearing a crown? A kingfish!",
    "I told my computer I needed a break, and now it won't stop sending me vacation ads.",
    "Why did the coffee file a police report? It got mugged!"
  ];

function joke() {
    const randomJoke = jokes[Math.floor(Math.random() * jokes.length)];
    alert(randomJoke);
}