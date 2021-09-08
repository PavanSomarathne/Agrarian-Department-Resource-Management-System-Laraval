@extends('layouts.admin')
@section('content')

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dashboard</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">System Analytics</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">

        <!--end row-->
        <div class="col-8 col-lg-8 col-sm-12 card">
            <div class="card-body">
                <div class="table-responsive">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>

        <div class="col-4 card">
            <div class="card-body">
                <h3>Subsidies</h3>
                <br />
                <ul class="list-group list-group-flush">
                    @if(is_array($subsidies) || is_object($subsidies))
                    @foreach ($subsidies as $item)
                    {{-- --}}
                    <li class="card list-group-item bg-light">
                        <div><b>{{$item->description}}</b> </br> <span>{{$item->date}}</span> </div>
                    </li>
                    @endforeach
                    @endif
                </ul>

            </div>
        </div>
    </div>
</div>

</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {

        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            initialView: 'dayGridMonth',
            initialDate: '2021-09-01',
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            nowIndicator: true,
            dayMaxEvents: true, // allow "more" link when too many events
            editable: true,
            selectable: true,
            businessHours: true,
            dayMaxEvents: true, // allow "more" link when too many events
            events: [
                <?php foreach ($events as $ev) echo "{title: \"" . $ev['title'] . "\", start:\"" . $ev['date'] . "\",description:\"" . $ev['description'] . "\"},"; ?>
            ],
            eventClick: function(info) {
                info.jsEvent.preventDefault(); // don't let the browser navigate
                console.log("clicked");

                window.open("/events");

            }
        });
        calendar.render();
    });
</script>
@stop