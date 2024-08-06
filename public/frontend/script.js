/* Script pour la template */
const hamburger = document.querySelector("#toggle-btn");

hamburger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

/* Script pour l'accordion */
document.addEventListener('DOMContentLoaded', function() {
  const accordions = document.querySelectorAll('.accordion');

  accordions.forEach(function(accordion) {
      const header = accordion.querySelector('.accordion-header');
      const content = accordion.querySelector('.accordion-content');

      header.addEventListener('click', function() {
          if (content.style.maxHeight) {
              content.style.maxHeight = null;
          } else {
              content.style.maxHeight = content.scrollHeight + 'px';
          }
      });

      content.style.maxHeight = null;
  });
});

/* Autres scripts */