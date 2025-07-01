    <!-- Contenedor principal de la página con margen superior -->
    <div class="container mt-5">
        <!-- Título principal de la página con margen inferior -->
        <h2 class="mb-4">Calculadora de Tablas y Potencias</h2>
        
        <!-- Fila principal que divide la página en dos columnas -->
        <div class="row">
            <!-- Primera columna (izquierda) para la tabla de multiplicar -->
            <!-- Ocupa 6 columnas en pantallas medianas y mayores (md-6) -->
            <!-- mb-4 agrega margen inferior para separar las columnas -->
            <div class="col-md-6 mb-4">
                <!-- Card de Bootstrap para la tabla de multiplicar -->
                <div class="card">
                    <!-- Encabezado de la card con el título -->
                    <div class="card-header">
                        <h5>Tabla de Multiplicar</h5>
                    </div>
                    <!-- Contenido principal de la card -->
                    <div class="card-body">
                        <!-- Grupo de formulario para el número -->
                        <div class="mb-3">
                            <!-- Etiqueta para el input con referencia al id -->
                            <label for="number" class="form-label">Ingrese un número:</label>
                            <!-- Input de tipo número -->
                            <!-- form-control: clase de Bootstrap para estilos consistentes -->
                            <!-- id="number": identificador único para JavaScript -->
                            <!-- min="1": limita el valor mínimo a 1 -->
                            <input type="number" class="form-control" id="number" min="1">
                        </div>
                        <!-- Botón para calcular la tabla -->
                        <!-- btn-primary: estilo de botón principal de Bootstrap -->
                        <!-- id="calculateTable": identificador para el evento onclick -->
                        <button class="btn btn-primary" id="calculateTable">Calcular Tabla</button>
                        <!-- Área donde se mostrarán los resultados de la tabla -->
                        <!-- mt-3: margen superior para separar del botón -->
                        <div id="resultTable" class="mt-3"></div>
                    </div>
                </div>
            </div>

            <!-- Segunda columna (derecha) para las potencias -->
            <!-- Ocupa 6 columnas en pantallas medianas y mayores -->
            <div class="col-md-6">
                <!-- Card de Bootstrap para las potencias -->
                <div class="card">
                    <!-- Encabezado de la card con el título -->
                    <div class="card-header">
                        <h5>Tabla de Potencias</h5>
                    </div>
                    <!-- Contenido principal de la card -->
                    <div class="card-body">
                        <!-- Grupo de formulario para la base -->
                        <div class="mb-3">
                            <!-- Etiqueta para el input de la base -->
                            <label for="base" class="form-label">Ingrese la base:</label>
                            <!-- Input para la base con validación mínima -->
                            <input type="number" class="form-control" id="base" min="1">
                        </div>
                        <!-- Grupo de formulario para el exponente -->
                        <div class="mb-3">
                            <!-- Etiqueta para el input del exponente -->
                            <label for="exponent" class="form-label">Ingrese el exponente:</label>
                            <!-- Input para el exponente con validación mínima -->
                            <input type="number" class="form-control" id="exponent" min="1">
                        </div>
                        <!-- Botón para calcular las potencias -->
                        <button class="btn btn-primary" id="calculatePower">Calcular Potencias</button>
                        <!-- Área donde se mostrarán los resultados de las potencias -->
                        <div id="resultPower" class="mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
