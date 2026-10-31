// var, let y const

let x = 5;
x = 6;
console.log(x);

let objeto1 = new Date();
let persona = {
  nombre: "Pepe",
  edad: 12,
  apellidos: "",
};
console.log(persona.nombre);

let numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

console.log(typeof persona.edad);
console.log(typeof numeros);
console.log(persona);
console.log(numeros);
console.log(persona.numeros);

for (let i = 0; i < numeros.length; i++) {
  console.log(numeros[i]);
}

numeros.forEach((num) => {
  console.log(num);
});

numeros.forEach(function (num) {
  console.log(num);
});

function validarNumero(numero) {
  if (numero % 2 == 0) {
    return "El numero es par";
  } else {
    return "El numero es impar";
  }
}

console.log(validarNumero(2));
console.log(validarNumero(3));

const validarNumeroV2 = function (numero) {
  if (numero % 2 == 0) {
    console.log("El numero es par");
  } else {
    console.log("El numero es impar");
  }
};

validarNumeroV2(4);
validarNumeroV2(5);

const validarNumeroV3 = (numero) => {
  if (numero % 2 == 0) {
    console.log("El numero es par");
  } else {
    console.log("El numero es impar");
  }
};

validarNumeroV3(6);
validarNumeroV3(7);

const ul = document.getElementById("lista");
ul.textContent = "<li>Prueba</li>";
ul.innerHTML = "<li>Prueba</li>";
for (let i = 0; i < numeros.length; i++) {
  // ul.innerHTML += "<li>" + numeros[i] + "</li>";

  const li = document.createElement("li");
  li.textContent = numeros[i];

  if (numeros[i] % 2 == 0) {
    li.style.color = "blue";
  }

  ul.appendChild(li);
}

const saludar = () => {
  alert("Hola!!!!");
};

document.getElementById("saludo2").addEventListener("click", () => {
  saludar();
});
