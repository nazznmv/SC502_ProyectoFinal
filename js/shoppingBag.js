// Obtener todos los elementos de los botones de cantidad
var plusButtons = document.getElementsByClassName("plus-btn");
var minusButtons = document.getElementsByClassName("minus-btn");

// Añadir 
for (var i = 0; i < plusButtons.length; i++) {
  plusButtons[i].addEventListener("click", function() {
    var inputElement = this.parentNode.querySelector("input[name='name']");
    var currentValue = parseInt(inputElement.value);
    inputElement.value = currentValue + 1;
  });
}

// Quitar
for (var i = 0; i < minusButtons.length; i++) {
  minusButtons[i].addEventListener("click", function() {
    var inputElement = this.parentNode.querySelector("input[name='name']");
    var currentValue = parseInt(inputElement.value);
    if (currentValue > 1) {
      inputElement.value = currentValue - 1;
    }
  });
}

