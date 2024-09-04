document.addEventListener('DOMContentLoaded', (event) => {
  const darkModeBtn = document.getElementById('dark-mode-btn');
  const body = document.body;

  // Check for saved dark mode preference
  if (localStorage.getItem('darkMode') === 'enabled') {
    body.classList.add('dark-mode');
    darkModeBtn.textContent = '🔅';
  }

  darkModeBtn.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    
    if (body.classList.contains('dark-mode')) {
      localStorage.setItem('darkMode', 'enabled');
      darkModeBtn.textContent = '🔅';
    } else {
      localStorage.setItem('darkMode', null);
      darkModeBtn.textContent = '💡';
    }
  });
});