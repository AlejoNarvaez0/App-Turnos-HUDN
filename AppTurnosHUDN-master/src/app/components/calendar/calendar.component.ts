import { Component, OnInit } from '@angular/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/daygrid';



@Component({
  selector: 'app-calendar',
  templateUrl: './calendar.component.html',
  styleUrls: ['./calendar.component.css']
})
export class CalendarComponent implements OnInit {

  public events: any;
  public options:any;
  

  constructor() { }

  ngOnInit() {

    this.options ={
      plugins:    [dayGridPlugin, timeGridPlugin, interactionPlugin ],
      defaultDate: new Date(),

      header: {
        left: 'prev,next',
        center:'title',
        right:'dayGridMonth,timeGridWeek, timeGridDay'
      },
      editable:false
    }

    this.events=[
      {
        title:"Evento 1",
        start:new Date(),
        description:"Evento 1",
      },
      {
        title:"Evento 2",
        start:new Date(new Date().getTime()+86400000),
        description:"Evento 2",
      },
      {
        title:"Evento 3",
        start:new Date(new Date().getTime()+86400000* 2),
        end: new Date(new Date().getTime()+86400000* 23)
      },


    ]
  }

}
