// this is where we put javascript code for anything else
// the source for this code is: https://www.aditus.io/patterns/accordion/ 
// https://www.youtube.com/watch?v=BhSBOqFNy5M

const accordionHeaders = document.querySelectorAll('[data-accordion-header]');

accordionHeaders.forEach(accordionHeader => {
  let target = accordionHeader.parentElement.nextElementSibling;
  accordionHeader.addEventListener('click', () => {
    let expanded = accordionHeader.getAttribute('aria-expanded') === 'true';

    accordionHeaders.forEach(header => {
      let otherTarget = header.parentElement.nextElementSibling;
      if (header !== accordionHeader) {
        header.setAttribute('aria-expanded', 'false');
        otherTarget.setAttribute('aria-hidden', 'true');
        const otherIcon = header.querySelector('i');
        if (otherIcon) {
          otherIcon.classList.add('fa-chevron-down');
          otherIcon.classList.remove('fa-chevron-up');
        }
      }
    });

    accordionHeader.setAttribute('aria-expanded', !expanded);
    target.setAttribute('aria-hidden', expanded ? "true" : "false");

    const icon = accordionHeader.querySelector('i');
    if (icon) {
      if (expanded) {
          icon.classList.add('fa-chevron-down');
          icon.classList.remove('fa-chevron-up');
      } else {
          icon.classList.add('fa-chevron-up'); 
          icon.classList.remove('fa-chevron-down');
      }
  }

  });
});

// READ MORE HISTORY FUNCTIONALITY


const moreText = document.querySelector("#more-history-content");
const readHistoryBtn = document.querySelector(".read-more-history")

if (moreText && readHistoryBtn) {
readHistoryBtn.addEventListener("click", function(){
  const isExpanded = readHistoryBtn.getAttribute("aria-expanded") === "true";

  readHistoryBtn.setAttribute("aria-expanded", !isExpanded);
  moreText.hidden = isExpanded;

  if (isExpanded) {
    readHistoryBtn.innerHTML = 'Read more <i class="fa-solid fa-chevron-down">';  
  } else {
    readHistoryBtn.innerHTML = 'Read less <i class="fa-solid fa-chevron-up">'; 
  }
});
}

// READ MORE PARISH MESSAGE FUNCTIONALITY
const messagePreview = document.querySelector("#parish-message-preview")
const moreMessage = document.querySelector("#full-parish-message");
const readMessageBtn = document.querySelector(".read-more-message")

if (messagePreview && moreMessage && readMessageBtn) {
readMessageBtn.addEventListener("click", function(){
  const isExpanded = readMessageBtn.getAttribute("aria-expanded") === "true";
  
  readMessageBtn.setAttribute("aria-expanded", !isExpanded);
  moreMessage.hidden = isExpanded;
  messagePreview.hidden = !isExpanded;

  if (isExpanded) {
    readMessageBtn.innerHTML = 'Read more <i class="fa-solid fa-chevron-down">';  
  } else {
    readMessageBtn.innerHTML = 'Read less <i class="fa-solid fa-chevron-up">'; 
  }

});
}

//HEADER FUCTIONS
const navContainer = document.querySelector('.header-nav-container');
const menuItems = document.querySelectorAll('#primary-menu > li.menu-item');

menuItems.forEach(item => {
  item.addEventListener('mouseenter', () => {
    navContainer.classList.add('menu-hovered');
  });

  item.addEventListener('mouseleave', () => {
    navContainer.classList.remove('menu-hovered');
  });
});

