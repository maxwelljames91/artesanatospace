// Navbar
const elemsDropdown = document.querySelectorAll(".dropdown-trigger");
const instancesDropdown = M.Dropdown.init(elemsDropdown, {
    coverTrigger: false
});
const elemsSidenav = document.querySelectorAll(".sidenav");
const instancesSidenav = M.Sidenav.init(elemsSidenav, {
    edge: "left"
});


// Formato Números Cadastro
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}



// Modal
// const elemsModal = document.querySelectorAll(".modal");
// const instancesModal = M.Modal.init(elemsModal);

// // Tooltip
// const elemsTooltip = document.querySelectorAll(".tooltipped");
// const instanceTooltip = M.Tooltip.init(elemsTooltip, {
//     html: "Olha essa dica!",
//     position: "right"
// });

// // Toast
// const elemnsToast = document.querySelector("#toast");
// const instanceToast = () => {
//     M.toast( {
//         html: "Também sou uma notificação",
//         classes: "rounded"
//     })
// }

// elemnsToast.addEventListener("click", () => {
//     instanceToast();
// });