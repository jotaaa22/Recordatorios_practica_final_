const calendar2025 = document.getElementById("calendar-2025");

// Datos del año 2025
const months = [
  "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
  "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
];
const daysInMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

// Función para renderizar un mes
function renderMonth(monthIndex, year) {
  const firstDay = new Date(year, monthIndex, 1).getDay(); // Día de la semana del primer día
  const adjustedFirstDay = firstDay === 0 ? 6 : firstDay - 1; // Ajustar a lunes como primer día
  const totalDays = daysInMonth[monthIndex];

  // Crear contenedor del mes
  const monthDiv = document.createElement("div");
  monthDiv.classList.add("col", "month-container");

  // Agregar encabezado del mes
  const monthHeader = document.createElement("div");
  monthHeader.classList.add("month-header");
  monthHeader.textContent = months[monthIndex];
  monthDiv.appendChild(monthHeader);

  // Agregar encabezado de días de la semana
  const weekdays = document.createElement("div");
  weekdays.classList.add("weekdays");
  const weekDaysLabels = ["Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"];
  weekDaysLabels.forEach(day => {
    const dayDiv = document.createElement("div");
    dayDiv.textContent = day;
    weekdays.appendChild(dayDiv);
  });
  monthDiv.appendChild(weekdays);

  // Contenedor de días
  const daysGrid = document.createElement("div");
  daysGrid.classList.add("days");

  // Agregar días vacíos al inicio
  for (let i = 0; i < adjustedFirstDay; i++) {
    const emptyDiv = document.createElement("div");
    emptyDiv.classList.add("day", "empty");
    daysGrid.appendChild(emptyDiv);
  }

  // Agregar días del mes
  for (let day = 1; day <= totalDays; day++) {
    const dayDiv = document.createElement("div");
    dayDiv.classList.add("day");

    // Resaltar sábados y domingos
    const currentDay = (adjustedFirstDay + day - 1) % 7;
    if (currentDay === 5) dayDiv.classList.add("saturday");
    if (currentDay === 6) dayDiv.classList.add("sunday");

    dayDiv.textContent = day;
    daysGrid.appendChild(dayDiv);
  }

  monthDiv.appendChild(daysGrid);
  return monthDiv;
}

// Renderizar todos los meses del año 2025
function renderYear(year) {
  for (let i = 0; i < months.length; i++) {
    const month = renderMonth(i, year);
    calendar2025.appendChild(month);
  }
}

// Inicializar calendario del año 2025
renderYear(2025);