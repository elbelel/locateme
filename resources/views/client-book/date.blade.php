<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{asset('images/favi.png')}}">
    <link href="../css/app.css" {{ asset('/css/app.css') }}  rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.2/index.global.min.js"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" /> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script> -->

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" /> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    <title>Select booking date</title>
</head>
<body>

    <div class="container-fluid">
    <form method="POST" action="{{ route('userbookings') }}">
    @csrf

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
                                
                                <input type="text" value="{{$id}}" name="id" id="id" hidden>

                                <input type="text" name="date" id="date" hidden>

                                    
                                <tr id="stt">
                                <td class="" id="st1">
                                    
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- <input type="radio" value="08:00am - 9:00am" name="slot" id="slot"> 010:00am - 9:00am</input>
                            <input type="radio" value="08:00am - 9:00am" name="slot" id="slot"> 011:00am - 9:00am</input> -->

                            <div >
                                <!-- <a href="/book-confirm" class="d-grid gap-2">   -->
                                    <button type="submit" class="btn bg-orange d-grid gap-2 ">Confirm</button>
                                <!-- </a> -->
                            </div>
                         

                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2"></div>
        </div>
        </form> 

    </div>

    <script type="text/javascript">

        let id = {{$id}}
        let slots = @json($times)

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
                            select: function (start) {
                                    $.ajax({
                                        url: `{{ url('/check-slot/'.'${id}') }}`,
                                        data: {
                                            date: $.fullCalendar.formatDate(start, "Y-MM-DD"),
                                        },
                                        type: "POST",
                                        success: function (data) {
                                            document.getElementById('date').value= $.fullCalendar.formatDate(start, "Y-MM-DD");
                                            const el = document.getElementById("stt");
                                            while (el.firstChild) el.removeChild(el.firstChild);

                                            slots.forEach((st,i)=>{
                                                if(data.length !== 0){
                                                for(let j = 0; j < data.length;j++){
                                                    if(st.id == data[j].time_slots_id){
                                                        var labelValue = document.createElement('label');
                                                        labelValue.innerHTML = st.start_date_time + '-'+ st.end_date_time;;
                                                        var inputValue = document.createElement('input');
                                                        var brd = document.createElement('br');

                                                        inputValue.type = "radio";
                                                        inputValue.name = "slot";
                                                        inputValue.st = i;
                                                        inputValue.id="slot"
                                                        inputValue.value = st.id
                                                        inputValue.disabled = true
                                                        document.getElementById('stt').appendChild(inputValue)
                                                        document.getElementById('stt').appendChild(labelValue)
                                                        document.getElementById('stt').appendChild(brd)
                                                    }else{
                                            
                                                        var labelValue = document.createElement('label');
                                                        labelValue.innerHTML = st.start_date_time + '-'+ st.end_date_time;
                                                        var inputValue = document.createElement('input');
                                                        var brd = document.createElement('br');

                                                        inputValue.type = "radio";
                                                        inputValue.name = "slot";
                                                        inputValue.st = i;
                                                        inputValue.id="slot"
                                                        inputValue.value = st.id
                                                        // const spq = document.getElementById('st1').appendChild(inputValue);
                                                        // const spt = document.getElementById('st1').appendChild(labelValue);
                                                        // const spr = document.getElementById('st1').appendChild(brd);
                                                        document.getElementById('stt').appendChild(inputValue)
                                                        document.getElementById('stt').appendChild(labelValue)
                                                        document.getElementById('stt').appendChild(brd)
                                                    }
                                                }

                                            }else{
                                                var labelValue = document.createElement('label');
                                                        labelValue.innerHTML = st.start_date_time + '-'+ st.end_date_time;
                                                        var inputValue = document.createElement('input');
                                                        var brd = document.createElement('br');

                                                        inputValue.type = "radio";
                                                        inputValue.name = "slot";
                                                        inputValue.st = i;
                                                        inputValue.id="slot"
                                                        inputValue.value = st.id
                                                        document.getElementById('stt').appendChild(inputValue)
                                                        document.getElementById('stt').appendChild(labelValue)
                                                        document.getElementById('stt').appendChild(brd)
                                                        console.log("he1",st.start_date_time + '-'+ st.end_date_time)


                                            }
                                            })
                                        }
                                    })
          
                            },
                        });
         
        });
         
        function displayMessage(message) {
            toastr.success(message, 'Event');
        } 
          
        </script>
</body>
</html>