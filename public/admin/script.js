const sidebar = document.getElementById('sidebar');
const trigger = document.getElementById('trigger');

trigger.addEventListener('click', () => {
  sidebar.classList.toggle('sidebar--open');
  trigger.querySelectorAll('i').forEach(icon => {
    icon.classList.toggle('fa-menu');
    icon.classList.toggle('fa-times');
  });
  
});