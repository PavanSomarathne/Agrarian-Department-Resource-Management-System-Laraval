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
		<div class="col">
			<div class="card radius-10 overflow-hidden">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0">No of Harvest Products</p>
							<h5 class="mb-0">{{$productsCount}}</h5>
						</div>
						<div class="ms-auto"> <i class='bx bx-cart font-30'></i>
						</div>
					</div>
				</div>
				<div class=""></div>
			</div>
		</div>
		<div class="col">
			<div class="card radius-10 overflow-hidden">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0">Number Of Divisions</p>
							<h5 class="mb-0">12</h5>
						</div>
						<div class="ms-auto"> <i class='bx bx-wallet font-30'></i>
						</div>
					</div>
				</div>
				<div class=""></div>
			</div>
		</div>
		<div class="col">
			<div class="card radius-10 overflow-hidden">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0">Number Of Officers</p>
							<h5 class="mb-0">{{$officersCount}}</h5>
						</div>
						<div class="ms-auto"> <i class='bx bx-group font-30'></i>
						</div>
					</div>
				</div>
				<div class=""></div>
			</div>
		</div>
		<div class="col">
			<div class="card radius-10 overflow-hidden">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0">No Of Farmers</p>
							<h5 class="mb-0">{{$farmersCount}}</h5>
						</div>
						<div class="ms-auto"> <i class='bx bx-arch font-30'></i>
						</div>
					</div>
				</div>
				<div class=""></div>
			</div>
		</div>
		<div class="col-6">
			<h6 class="mb-4 text-uppercase">Users According to Division</h6>
			<div class="card">
				<div class="card-body">
					<div id="chart_farmers"></div>
				</div>
			</div>
		</div>

		<div class="col-6">
			<h6 class="mb-4 text-uppercase">Farmers According to Land Type</h6>
			<div class="card">
				<div class="card-body">
					<div id="chart_officers"></div>
				</div>
			</div>
		</div>
	</div>
	<!--end row-->
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<div id='calendar'></div>
			</div>
		</div>
	</div>
</div>

</div>

<script>
	var options = {
		series: [<?php foreach ($farmersType as $divi) echo $divi . ','; ?>],
		chart: {
			foreColor: '#9ba7b2',
			height: 330,
			type: 'pie',
		},
		colors: ["#8833ff", "#17a00e", ],
		labels: [<?php foreach ($farmersType as $key => $divi) echo "\"" . $key . "\","; ?>],
		responsive: [{
			breakpoint: 480,
			options: {
				chart: {
					height: 360
				},
				legend: {
					position: 'bottom'
				}
			}
		}]
	};
	var chart = new ApexCharts(document.querySelector("#chart_officers"), options);
	chart.render();
	// alert("<?php foreach ($userDivision as $key => $divi) echo '\"' . $key . '\",'; ?>");
	var options = {
		series: [<?php foreach ($userDivision as $divi) echo $divi . ','; ?>],
		chart: {
			foreColor: '#9ba7b2',
			height: 330,
			type: 'pie',
		},
		colors: ["#8833ff", "#6c757d", "#17a00e", "#f41127", "#ffc107"],
		labels: [<?php foreach ($userDivision as $key => $divi) echo "\"" . $key . "\","; ?>],
		responsive: [{
			breakpoint: 480,
			options: {
				chart: {
					height: 360
				},
				legend: {
					position: 'bottom'
				}
			}
		}]
	};
	var chart = new ApexCharts(document.querySelector("#chart_farmers"), options);
	chart.render();

</script>

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
				<?php foreach ($events as $ev) echo "{title: \"" . $ev['title'] . "\", start:\"" . $ev['date'] . "\",description:\"". $ev['description']."\"},"; ?>
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