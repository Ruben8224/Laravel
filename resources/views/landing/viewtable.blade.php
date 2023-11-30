@extends('layouts/plantilla')
@asset('content')
<body>
<link rel="stylesheet" href="{!! asset('css/table.css') !!}">
    <header>
        <nav class="navbar">
            <h2 class="logo"><a href="/img/pawel-kadysz-CuFYW1c97w8-unsplash.jpg">LOGO</a></h2>

            <input type="checkbox" id="menu-toggler">

            <label for="menu-toggler" id="hamburger-btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z" />
                </svg>
            </label>

            <ul class="all-links">
                <li><a href="{{ url('landing/home') }}">Home</a></li>
                <li><a href="{{ url('landing/pc') }}">PC</a></li>
                <li><a href="{{ url('landing/ps') }}">PS</a></li>
                <li><a href="{{ url('landing/psp') }}">PSP</a></li>
                <li><a href="{{ url('landing/viewtable') }}">tabla</a></li>
            </ul>

        </nav>
    </header>


    <h1>Tabla de Datos</h1>

<form id="formulario" onsubmit="agregarFila(); return false;">
    <label>ID:</label>
    <input type="text" id="idInput" required>

    <label>Nombre:</label>
    <input type="text" id="nombreInput" required>

    <label>Apellido P:</label>
    <input type="text" id="apellidoPInput" required>

    <label>Apellido M:</label>
    <input type="text" id="apellidoMInput" required>

    <button type="submit">Agregar a la Tabla</button>
</form>

<!-- Ventana modal para editar -->
<div id="modal" class="modal">
    <h2>Editar Datos</h2>
    <label>ID:</label>
    <input type="text" id="editId" readonly>

    <label>Nombre:</label>
    <input type="text" id="editNombre" required>

    <label>Apellido P:</label>
    <input type="text" id="editApellidoP" required>

    <label>Apellido M:</label>
    <input type="text" id="editApellidoM" required>

    <button onclick="guardarEdicion()">Guardar Cambios</button>
    <button onclick="cerrarModal()">Cancelar</button>
</div>

<div class="overlay" onclick="cerrarModal()"></div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>APELLIDO P</th>
            <th>APELLIDO M</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody id="tablaBody">
        <!-- Aquí se llenarán los datos -->
    </tbody>
</table>

<script>
    function agregarFila() {
        var id = document.getElementById('idInput').value;
        var nombre = document.getElementById('nombreInput').value;
        var apellidoP = document.getElementById('apellidoPInput').value;
        var apellidoM = document.getElementById('apellidoMInput').value;

        var tablaBody = document.getElementById('tablaBody');
        var fila = document.createElement('tr');

        var idCell = document.createElement('td');
        idCell.textContent = id;
        fila.appendChild(idCell);

        var nombreCell = document.createElement('td');
        nombreCell.textContent = nombre;
        fila.appendChild(nombreCell);

        var apellidoPCell = document.createElement('td');
        apellidoPCell.textContent = apellidoP;
        fila.appendChild(apellidoPCell);

        var apellidoMCell = document.createElement('td');
        apellidoMCell.textContent = apellidoM;
        fila.appendChild(apellidoMCell);

        var opcionesCell = document.createElement('td');
        var eliminarBtn = document.createElement('button');
        eliminarBtn.textContent = 'Eliminar';
        eliminarBtn.addEventListener('click', function () {
            // Lógica para eliminar el elemento
            fila.remove();
        });

        var editarBtn = document.createElement('button');
        editarBtn.textContent = 'Editar';
        editarBtn.addEventListener('click', function () {
            abrirModal(id, nombre, apellidoP, apellidoM);
        });

        opcionesCell.appendChild(eliminarBtn);
        opcionesCell.appendChild(editarBtn);

        fila.appendChild(opcionesCell);

        tablaBody.appendChild(fila);

        // Limpiar los campos del formulario después de agregar a la tabla
        document.getElementById('formulario').reset();
    }

    // Función para abrir la ventana modal con los datos de la fila seleccionada
    function abrirModal(id, nombre, apellidoP, apellidoM) {
        document.getElementById('editId').value = id;
        document.getElementById('editNombre').value = nombre;
        document.getElementById('editApellidoP').value = apellidoP;
        document.getElementById('editApellidoM').value = apellidoM;

        document.getElementById('modal').style.display = 'block';
        document.querySelector('.overlay').style.display = 'block';
    }

    // Función para cerrar la ventana modal
    function cerrarModal() {
        document.getElementById('modal').style.display = 'none';
        document.querySelector('.overlay').style.display = 'none';
    }

    // Función para guardar los cambios después de editar
    function guardarEdicion() {
        var id = document.getElementById('editId').value;
        var nombre = document.getElementById('editNombre').value;
        var apellidoP = document.getElementById('editApellidoP').value;
        var apellidoM = document.getElementById('editApellidoM').value;

        // Encuentra la fila en la tabla y actualiza sus datos
        var tablaBody = document.getElementById('tablaBody');
        var filas = tablaBody.getElementsByTagName('tr');

        for (var i = 0; i < filas.length; i++) {
            var celdas = filas[i].getElementsByTagName('td');
            if (celdas.length > 0 && celdas[0].textContent === id) {
                celdas[1].textContent = nombre;
                celdas[2].textContent = apellidoP;
                celdas[3].textContent = apellidoM;
                break;
            }
        }

        cerrarModal();
    }
</script>


    <footer>
        <div>
            <span>Copyright © 2023 All Rights Reserved</span>
            <span class="link">
                <a href="https://www.facebook.com/">Facebook</a>
                <a href="https://www.instagram.com/">Instagram</a>
            </span>
        </div>
    </footer>

</body>

</html>
