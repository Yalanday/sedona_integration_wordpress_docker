let modalWindow = document.querySelector('.modal-container');
let modalForm = document.querySelector('.modal-window');
let buttonModalOpen = document.querySelector('.modal-window-open-button');
let buttonModalClose = document.querySelector('.modal-close-button');
let tooltip = document.querySelector('.tooltip-toggle');
let tooltipText = document.querySelector('.tooltip-text');

buttonModalOpen.onclick = function() {
    modalWindow.classList.add('modal-window-open');
}

buttonModalClose.onclick = function() {
    modalWindow.classList.remove('modal-window-open');
}

modalWindow.onclick = function() {
    modalWindow.classList.remove('modal-window-open');
}

modalForm.onclick = function(event) {
    event.stopPropagation();
}

// tooltip.addEventListener('focus', tooltipTextVisible);

// function tooltipTextVisible() {
//     tooltipText.style.display = "block";
// }

// tooltip.addEventListener('blur', tooltipTextNoVisible);

// function tooltipTextNoVisible() {
//     tooltipText.style.display = "none";
// }
