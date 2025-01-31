var myModal = new bootstrap.Modal(document.getElementById('myModal'));
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: "es",
        headerToolbar:{
            left: "prev, next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek,timeGridDay"
        },
        dateClick: function (info){
            //console.log(info);
            document.getElementById("inicio").value = info.dateStr;
            document.getElementById("titulo").textContent = "Creación de nuevo evento";
            myModal.show();
        }
        });
    calendar.render();
    });