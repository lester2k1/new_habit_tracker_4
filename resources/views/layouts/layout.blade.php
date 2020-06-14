<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('APP_NAME', 'Trabbit') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/be4950f832.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/all.min.css">
    <link href="{{ asset('css/floatingbtn.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('/img/favicon.ico') }}"/>
        
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.js"></script>
    
    @if(isset($habit))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var ratings = {!! json_encode($habit->ratings->toArray()) !!}
            var events = []
            ratings.forEach(element => {
                var newEvent = {
                    title : element.rating,
                    start : element.created_at,
                    icon: element.rating
                }
                events.push(newEvent)
            });
            events.forEach(element => {
                if(element.icon == 'smile'){
                    element.backgroundColor = '#5cb85c'
                }
                else if(element.icon == 'meh'){
                    element.backgroundColor = '#f0ad4e'
                }
                else {
                    element.backgroundColor = '#d9534f'
                }
            })
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'dayGrid' ],
                events: events,
                eventRender: function (info) {
                    let icon = info.event.extendedProps.icon;
                    let title = $(info.el).first('.fc-title-wrap');
                    if (icon !== undefined) {
                        title.prepend("<i class='far fa-"+ icon + " fa-lg'></i>");
                    }
                    if(icon == 'smile'){
                        this.eventBackgroundColor = '#5cb85c'
                    }
                    $(info.el).addClass('text-center pt-2 pb-1')
                },
                displayEventTime: false,
                eventTextColor: '#ffffff',
                eventBorderColor: "#ffffff"
            });

            calendar.render();
        });
        </script>
    @endif
</head>
<body>
    <div id="app">
        
        <main class="py-4">
            @yield('content')
        </main>

        

    </div>
</body>
</html>
