const button = document.getElementById('buttonmodal')
const closebutton = document.getElementById('closebutton')
const modal = document.getElementById('modal')

button.addEventListener('click',()=>modal.classList.add('scale-100'))
closebutton.addEventListener('click',()=>modal.classList.remove('scale-100'))