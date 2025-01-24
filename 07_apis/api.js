async function fetchEstudios() {
    const res = await fetch('http://localhost/Ejercicios/07_apis/estudios/api_estudios.php');
    const data = await res.json();
    return data;
};

console.table(fetchEstudios());
var estudios = fetchEstudios();

console.log(estudios.Array[0].nombre_estudio);