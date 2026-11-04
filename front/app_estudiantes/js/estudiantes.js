const table = document.getElementById('estudiantes-table');

const mostarDatos = (data) => {
    const tbody = table.getElementsByTagName("tbody")[0];
    tbody.textContent = "";
    data.forEach((item, index) => {
        const tdNo = document.createElement('td');
        tdNo.textContent = index + 1;

        const tdCod = document.createElement('td');
        tdCod.textContent = item.codigo;

        const tdNombre = document.createElement('td');
        tdNombre.textContent = item.nombre;

        const tdEmail = document.createElement('td');
        tdEmail.textContent = item.email;

        const borrarBtn = document.createElement('button');
        borrarBtn.textContent = "Borrar";
        borrarBtn.addEventListener('click', () => {
            borrarEstudiante(item.id);
        });

        const td = document.createElement('td');
        td.appendChild(borrarBtn);

        const tr = document.createElement("tr");
        tr.appendChild(tdNo);
        tr.appendChild(tdCod);
        tr.appendChild(tdNombre);
        tr.appendChild(tdEmail);
        tr.appendChild(td);

        tbody.appendChild(tr);
    });
}

const consultarEstudiantes = () => {
    fetch('http://127.0.0.1:8081/estudiantes')
        .then(response => response.json())
        .then(data => mostarDatos(data))
        .catch(error => console.error("Error", error))
        .finally(() => console.info("Consulta finalizada!!!!"));
}
consultarEstudiantes();

const queryEstudiantes = async () => {
    try {
        const response = await fetch('http://127.0.0.1:8081/estudiantes');
        const data = await response.json();
        mostarDatos(data);
    } catch (ex) {
        console.error("Error", ex);
    }
    console.info("Consulta finalizada!!!!")
}
queryEstudiantes();

const borrarEstudiante = async (id) => {
    try {
        const response = await fetch('http://127.0.0.1:8081/estudiantes/' + id, {
            method: 'delete'
        });
        if (response.status == 200) {
            await queryEstudiantes();
        } else {
            throw new Error("No se pudo eliminar el registro");
        }
    } catch (ex) {
        console.error("Error", ex);
    }
    console.info("Consulta finalizada!!!!")
}