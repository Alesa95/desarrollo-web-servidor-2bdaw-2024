    async function fetchEstudios() {
        const res = await fetch('http://localhost/Ejercicios/07_apis/api_estudios.php?ciudad=Tokio');
        const data = await res.json();
        return data;
    };
    const state = JSON.parse(fetchEstudios());
    console.table(table);

    /*const state = [
        { id: 1, name: "bread", quantitiy: 50 },
        { id: 2, name: "milk", quantitiy: 20 },
        { id: 3, name: "water", quantitiy: 10 }
    ];*/
  
    let html = '<table>';

    Object.keys(state[0]).map((key) => {
        html += '<tr>';
        html += '<td>'+key+'</td>';
        state.map((item) => {
            html += '<td>'+item[key]+'</td>';
        });
        html += '</tr>';
    });
    html += '</table>';

    document.body.innerHTML = html;
    /*
    array = fetchEstudios();

    let html = '<table>';

    Object.keys(array[0]).map((key) => {
        html += '<tr>';
        html += '<td>'+key+'</td>';
        array.map((item) => {
            html += '<td>'+item[key]+'</td>';
        });
        html += '</tr>';
    });
    html += '</table>';

    document.body.innerHTML = html;
    */

    /*
    async funtion mostrarEstudios(){
        const resultadoAPI = await fetchEstudios();

        console.log(resultadoAPI);

        crearTabla(resultadoAPI);
    };

    function crearTabla(datos){
        let nuevaTabla = document.createElement("table");
        let tablaBody = document.createElement("tbody");

        nuevaTabla.style.width = "100%";
        nuevaTabla.setAttribute("border", 1);

        let encabezado = documento.createElement("tr");
        let columnas = ["Nombre", "Año Fundación", "Ciudad"]

        columnas.forEach(columna => {
            let th = document.createElement("th");
            th.textContent = columna;
            encabezado.appendChild(th);
        }

        tablaBody.appendChild(encabezado);

        datos.forEach( item => {
            let fila = document.createElement("tr");

            for (let key in item) {
                let celda = document.createElement("td");
                celda.textContent = item[key];
                fila.appendChild(celda);
            }

            tablaBody.appendChild(fila);
        });

        nuevaTabla.appendChild(tablaBody);
        document.body.appendChild(nuevaTabla);
        )
        mostrarEstudios();
    }
    
*/