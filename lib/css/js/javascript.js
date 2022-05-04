(function(win,doc){
    'use strict';
    //Exibir o calendário
    let calendarEl=doc.querySelector('.calendar');
    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar:{
            start: 'prev,next,today',
            center: 'title',
            end: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        buttonText:{
            today: 'Hoje',
            month: 'Mês',
            week: 'Semana',
            day: 'Dia'
        },
        locale:'pt-br',

        dateClick: function(info) {

                if(info.view.type == 'dayGridMonth'){
                    calendar.changeView('timeGrid', info.dateStr);
                }else{
                    win.location.href='/views/user/add.php?date='+info.dateStr
                }
          },
          events: '/controllers/ControllerEvents.php',
          eventClick: function(info) {
                win.location.href='/views/user/editar.php?id='+info.event.id;
          }
      });
      calendar.render();

})(window,document);