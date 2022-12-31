<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/favi.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.2/index.global.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <title>Select booking date</title>
    <link href="../css/app.css" {{ asset('/css/app.css') }}  rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <div class="container-fluid">
        <div class="row p-5">
            <div class="text-center">
                <h3 class="text-orange ">Schedule Your Booking </h3>
                <h2>Check out the slots available </h2>
            </div>

            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="card bg-orange border-0">
                    <div class="card-body">
                        <p>Pick a date</p>

                        <div id='calendar'></div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-body">
                        <div>
                            <p>Your booking will last for:</p>
                            <span class="bg-secondary px-3 py-2 text-white">1 hour</span>
                            <p class="mt-2">What time works best?</p>
                        </div>
                        <div>
                            <table class="table table-striped">
                                <tbody>
                                    
                                    <tr><td class="">08 : 00am - 09 : 00am</td></tr>
                                    <tr><td class="" >09 : 00am - 10 : 00am</td></tr>
                                    <tr><td class="" >10 : 00am - 11 : 00am</td></tr>
                                    <tr><td class="">11 : 00am - 12 : 00am</td></tr>
                                    <tr><td class="" >12 : 00am - 01 : 00am</td></tr>
                                    <tr><td class="" >01 : 00am - 02 : 00am</td></tr>
                                    <tr><td class="">02 : 00am - 03 : 00am</td></tr>
                                    <tr><td class="" >04 : 00am - 05 : 00am</td></tr>

                                </tbody>
                            </table>
                            <div >
                                <a href="/book-confirm" class="d-grid gap-2">  
                                    <button type="button" class="btn bg-orange ">Confirm</button>
                                </a>
                            </div>

                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
    <script>
        $(document).ready(function () {
           
        var SITEURL = "{{ url('/') }}";
          
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          
        var calendar = $('#calendar').fullCalendar({
                            editable: true,
                            events: SITEURL + "/fullcalender",
                            displayEventTime: false,
                            editable: true,
                            eventRender: function (event, element, view) {
                                if (event.allDay === 'true') {
                                        event.allDay = true;
                                } else {
                                        event.allDay = false;
                                }
                            },
                            selectable: true,
                            selectHelper: true,
                            select: function (start, end, allDay) {
                                var title = prompt('Event Title:');
                                if (title) {
                                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                                    $.ajax({
                                        url: SITEURL + "/fullcalenderAjax",
                                        data: {
                                            title: title,
                                            start: start,
                                            end: end,
                                            type: 'add'
                                        },
                                        type: "POST",
                                        success: function (data) {
                                            displayMessage("Event selected Successfully");
          
                                            calendar.fullCalendar('renderEvent',
                                                {
                                                    id: data.id,
                                                    title: title,
                                                    start: start,
                                                    end: end,
                                                    allDay: allDay
                                                },true);
          
                                            calendar.fullCalendar('unselect');
                                        }
                                    });
                                }
                            },
                            eventDrop: function (event, delta) {
                                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
          
                                $.ajax({
                                    url: SITEURL + '/fullcalenderAjax',
                                    data: {
                                        title: event.title,
                                        start: start,
                                        end: end,
                                        id: event.id,
                                        type: 'update'
                                    },
                                    type: "POST",
                                    success: function (response) {
                                        displayMessage("Event Updated Successfully");
                                    }
                                });
                            },
                            eventClick: function (event) {
                                var deleteMsg = confirm("Do you really want to delete?");
                                if (deleteMsg) {
                                    $.ajax({
                                        type: "POST",
                                        url: SITEURL + '/fullcalenderAjax',
                                        data: {
                                                id: event.id,
                                                type: 'delete'
                                        },
                                        success: function (response) {
                                            calendar.fullCalendar('removeEvents', event.id);
                                            displayMessage("Event Deleted Successfully");
                                        }
                                    });
                                }
                            }
         
                        });
         
        });
         
        function displayMessage(message) {
            toastr.success(message, 'Event');
        } 
          
        </script>
</body>
</html>