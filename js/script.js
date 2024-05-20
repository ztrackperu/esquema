//SIDEBAR
/*
const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
    alert("clicked");
    //document.querySelector("#sidebar").classList.toggle("expand");
});*/


/*


$(document).ready(function() {
  // Cuando se haga clic en el botón de hamburguesa
  $('.toggle-btn').click(function(e) {
      e.preventDefault();

      // Muestra u oculta el menú lateral
      $('#sidebar').toggle();

  });
});*/


//X == col-sm-12
//Y == col-sm-6
// CARACTERES POR LINEA = 22
// Si es una o dos tarjetas se le asigna col-sm-12
// Si son tres o cuatro tarjetas se le asigna col-sm-6
//Definir altura maxima de 200px por tarjeta
//cuando se pasa de las lineas designadas se activa el scroll

/*
  <div class="row">
      <div class="card cardGrafico">
          <div class="card-body shadow">
              <h5 class="card-title">Card title</h5>
              <p class="card-text overflow-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id explicabo voluptatem ipsam fugiat suscipit soluta, excepturi quibusdam error eveniet, perspiciatis dolorum distinctio, repellendus hic natus vero a eligendi culpa facilis?
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo nobis facere velit quisquam, quos animi dolores quasi sint optio ad necessitatibus. Non dicta placeat odit quo dignissimos fugit consequatur voluptas.
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita quod consectetur sint commodi repellendus cupiditate ipsam? Illo facilis, facere incidunt aliquam quam quo deserunt vitae ipsam atque possimus in iste!
              </p>
          </div>
      </div>
    </div>
*/
let cards = [
  { title: 'Tarjeta 1', content: 'Contenido tarjeta 1aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', details: 'Detalles tarjeta 1' },
  { title: 'Tarjeta 2', content: 'Contenido tarjeta 2aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', details: 'Detalles tarjeta 2' },
  { title: 'Tarjeta 3', content: 'Contenido tarjeta 3', details: 'Detalles tarjeta 3' },
  { title: 'Tarjeta 4', content: 'Contenido tarjeta 4', details: 'Detalles tarjeta 4' },
  //{ title: 'Tarjeta 5', content: 'Contenido tarjeta 5', details: 'Detalles tarjeta 5' },
  
];
let caracteresPorLinea = 22;
let maxLineas = 5; // número máximo de líneas antes de activar el desplazamiento
let alturaPorDefecto = '200px'; // altura por defecto de la tarjeta
let alturaMaxima = '300px'; // altura máxima de la tarjeta
//Contar cuantas tarjetas hay
let cardCount = Math.min(cards.length,4);
// Definir el ancho de la columna en función del número de tarjetas
let colWidth = cardCount <= 2 ? 12 : 6;
//Seleccionar el contenedor
let container = document.querySelector('.rowDatos');
let container2 = document.querySelector('.rowDatos2');

// Crear las tarjetas
for (let i = 0; i < cardCount; i++) {
  let card = cardCount == 1 ? cards[0] : cards[i];
  let cardDiv = document.createElement('div');
  cardDiv.className = `card col-sm-${colWidth} cardC`;
  cardDiv.style.maxHeight = alturaMaxima; // establecer la altura máxima de la tarjeta
  cardDiv.style.height = alturaPorDefecto; // establecer la altura por defecto de la tarjeta
  let cardBody = document.createElement('div');
  cardBody.className = 'card-body shadow';
  let cardTitle = document.createElement('h5');
  cardTitle.className = 'card-title';
  cardTitle.textContent = card.title;
  let cardContent = document.createElement('p');
  cardContent.className = 'card-text';
  cardContent.textContent = card.content;
  // Si el contenido de la tarjeta excede el número máximo de líneas, activar el desplazamiento
  if (card.content.length / caracteresPorLinea > maxLineas) {
    cardBody.style.overflowY = 'scroll';
    cardBody.style.scrollbarWidth = 'none'; // Para Firefox
    cardBody.style.msOverflowStyle = 'none'; // Para Internet Explorer 10+
    cardBody.style.cssText= `
      overflow-y: scroll;
      scrollbar-width: none; /* For Firefox */
      -ms-overflow-style: none; /* For Internet Explorer 10+ */
      &::-webkit-scrollbar {
        display: none; /* For Chrome, Safari and Opera */
      }
    `;
  }
  cardBody.appendChild(cardTitle);
  cardBody.appendChild(cardContent);
  cardDiv.appendChild(cardBody);
  container.appendChild(cardDiv);
}

let caracteresPorLinea2 = 81;
let maxLineas2 = 10; // número máximo de líneas antes de activar el desplazamiento
let alturaPorDefecto2 = '400px';
let alturaMaxima2 = '600px';
// Crear cardGrafico
let cardGrafico = document.createElement('div');
cardGrafico.className = 'card cardGrafico';
cardGrafico.style.maxHeight = alturaMaxima2;// Doble de la alturaMaxima
cardGrafico.style.height = alturaPorDefecto2; // establecer la altura por defecto de la tarjeta

let cardGraficoBody = document.createElement('div');
cardGraficoBody.className = 'card-body shadow';

let cardGraficoTitle = document.createElement('h5');
cardGraficoTitle.className = 'card-title';
cardGraficoTitle.textContent = 'Gráfico';

let cardGraficoContent = document.createElement('p');
cardGraficoContent.className = 'card-text overflow-auto';
cardGraficoContent.textContent = `Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id explicabo voluptatem ipsam fugiat suscipit soluta, excepturi quibusdam error eveniet, 
perspiciatis dolorum distinctio, repellendus hic natus vero a eligendi culpa facilis? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo nobis facere velit quisquam, 
quos animi dolores quasi sint optio ad necessitatibus. Non dicta placeat odit quo dignissimos fugit consequatur voluptas. Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
Expedita quod consectetur sint commodi repellendus cupiditate ipsam? Illo facilis, facere incidunt aliquam quam quo deserunt vitae ipsam atque possimus in iste!
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id explicabo voluptatem ipsam fugiat suscipit soluta, excepturi quibusdam error eveniet, 
perspiciatis dolorum distinctio, repellendus hic natus vero a eligendi culpa facilis? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo nobis facere velit quisquam, 
quos animi dolores quasi sint optio ad necessitatibus. Non dicta placeat odit quo dignissimos fugit consequatur voluptas. Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
Expedita quod consectetur sint commodi repellendus cupiditate ipsam? Illo facilis, facere incidunt aliquam quam quo `;
if (cardGraficoContent.textContent.length / caracteresPorLinea2 > maxLineas2) {
  cardGraficoBody.style.overflowY = 'scroll';
  cardGraficoBody.style.scrollbarWidth = 'none'; // Para Firefox
  cardGraficoBody.style.msOverflowStyle = 'none'; // Para Internet Explorer 10+
  cardGraficoBody.style.cssText= `
    overflow-y: scroll;
    scrollbar-width: none; /* For Firefox */
    -ms-overflow-style: none; /* For Internet Explorer 10+ */
    &::-webkit-scrollbar {
      display: none; /* For Chrome, Safari and Opera */
    }
  `;
}
cardGraficoBody.appendChild(cardGraficoTitle);
cardGraficoBody.appendChild(cardGraficoContent);
cardGrafico.appendChild(cardGraficoBody);
container2.appendChild(cardGrafico);

//MODAL

/*
  // Agrega un evento de clic a la tarjeta
  cardDiv.addEventListener('click', function() {
    // Muestra los detalles de la tarjeta
      let modal = document.getElementById("myModal");
  
      // Obtén el elemento que muestra el texto del modal
      let modalText = document.getElementById("modalText");


      // Obtén el elemento que cierra el modal
      let span = document.getElementsByClassName("close")[0];

      // Cuando el usuario hace clic en el span (x), cierra el modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      // Cuando el usuario hace clic en cualquier lugar fuera del modal, cierra el modal
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }

      // Agrega un evento de clic a la tarjeta
      cardDiv.addEventListener('click', function() {
        // Cambia el texto del modal a los detalles de la tarjeta
        modalText.textContent = card.details;

        // Muestra el modal
        modal.style.display = "block";
      });
      */


// Definir los puntos de inicio y final como vectores
let puntoInicio = { x: 0, y: 0 };
let puntoFinal = { x: 800, y: 500 };

// Obtener el elemento que quieres mover
let elemento = document.querySelector('.cardTest');

// Calcular el vector de movimiento
let vectorMovimiento = {
  x: puntoFinal.x - puntoInicio.x,
  y: puntoFinal.y - puntoInicio.y
};

let container3 = document.getElementById('#container3');
// Mover el elemento
elemento.style.transform = `translate(${vectorMovimiento.x}px, ${vectorMovimiento.y}px)`;
elemento.classList = 'col-sm-6';

let html = `<div class="card cardTest" style="max-height: ${alturaMaxima}; height: ${alturaPorDefecto};">
<div class="card-body shadow">
  <h5 class="card-title">Título</h5>
  <p class="card-text">Contenido</p>
</div>
</div>`;
container3.innerHTML += html;



