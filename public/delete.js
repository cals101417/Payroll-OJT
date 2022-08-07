const buttons = document.querySelectorAll("#buttonmodal");

    buttons.forEach(button => {
    button.addEventListener('click', () => {
        modal.classList.add('scale-100');
    });
    closebutton.addEventListener('click',()=>modal.classList.remove('scale-100'))
})
