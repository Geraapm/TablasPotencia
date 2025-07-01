<?php
// Este archivo contiene el código JavaScript que maneja las operaciones de la calculadora
// Es un archivo PHP que contiene código JavaScript para permitir la inclusión de archivos PHP
?>
<script>
    // Función principal para calcular la tabla de multiplicar
    // Esta función se ejecuta cuando el usuario hace clic en el botón "Calcular Tabla"
    function calculateTable() {
        // Obtiene el valor ingresado por el usuario desde el input con id 'number'
        // El .value obtiene el contenido del input
        const number = document.getElementById('number').value;
        
        // Obtiene el elemento HTML donde se mostrarán los resultados
        // Este elemento tiene id 'resultTable'
        const resultDiv = document.getElementById('resultTable');
        
        // Verifica si el número es válido
        // number && !isNaN(number) asegura que:
        // 1. El número no esté vacío
        // 2. Sea un número válido (no NaN)
        if (number && !isNaN(number)) {
            // Inicia la construcción del HTML para la tabla de multiplicar
            // Usamos 'list-group' de Bootstrap para un diseño consistente
            let result = '<ul class="list-group">';
            
            // Bucle que genera la tabla del 1 al 10
            // i representa el multiplicador
            for (let i = 1; i <= 10; i++) {
                // Para cada iteración, crea una fila de la tabla
                // ${number} es el número ingresado
                // ${i} es el multiplicador actual
                // ${number * i} es el resultado de la multiplicación
                result += `<li class="list-group-item">${number} x ${i} = ${number * i}</li>`;
            }
            
            // Cierra la lista
            result += '</ul>';
            
            // Inserta el HTML generado en el div de resultados
            resultDiv.innerHTML = result;
        } else {
            // Si el número no es válido, muestra un mensaje de error
            // Usamos 'alert-warning' de Bootstrap para un mensaje amigable
            resultDiv.innerHTML = '<div class="alert alert-warning">Por favor, ingrese un número válido.</div>';
        }
    }

    // Función principal para calcular potencias
    // Esta función se ejecuta cuando el usuario hace clic en el botón "Calcular Potencias"
    function calculatePower() {
        // Obtiene la base ingresada por el usuario
        const base = document.getElementById('base').value;
        
        // Obtiene el exponente ingresado por el usuario
        const exponent = document.getElementById('exponent').value;
        
        // Obtiene el elemento donde se mostrarán los resultados de las potencias
        const resultDiv = document.getElementById('resultPower');
        
        // Verifica que tanto la base como el exponente sean válidos
        if (base && exponent && !isNaN(base) && !isNaN(exponent)) {
            // Inicia la construcción del HTML para mostrar las potencias
            let result = '<ul class="list-group">';
            
            // Bucle que calcula las potencias desde 1 hasta el exponente ingresado
            for (let i = 1; i <= exponent; i++) {
                // Para cada iteración:
                // ${base} es el número base
                // ${i} es el exponente actual
                // <sup> crea el superíndice para el exponente
                // Math.pow(base, i) calcula la potencia usando la función matemática de JavaScript
                result += `<li class="list-group-item">${base}<sup>${i}</sup> = ${Math.pow(base, i)}</li>`;
            }
            
            // Cierra la lista
            result += '</ul>';
            
            // Inserta el HTML generado en el div de resultados
            resultDiv.innerHTML = result;
        } else {
            // Si los valores no son válidos, muestra un mensaje de error
            resultDiv.innerHTML = '<div class="alert alert-warning">Por favor, ingrese números válidos para la base y el exponente.</div>';
        }
    }

    // Event Listeners
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('calculateTable').addEventListener('click', calculateTable);
        document.getElementById('calculatePower').addEventListener('click', calculatePower);
    });
</script>
