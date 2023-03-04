@extends('layout.app')
@section('meta')
    <title>ABR Contractors | Portfolio | Roofing</title>
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="{{asset('/css/lightbox.min.css')}}">
@endsection
@section('content') 
<div class="breadcrumb-area">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="page-title">
										<h2>Roofing</h2>
										<ul class="breadcrumb">
										   <li><a href="/">Home</a></li>
										   <li><a href="/Portfolio">Portfolio</a></li>
										   <li class="active">Roofing</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- .row-->
						</div>
						<!-- .container-->
					</div>
					<!-- .breadcrumb-area-->
					<div class="container">
						<div class="row">
								<div id="No1" class="tabcontent">
									<div class="rowcol"> 
										<div class="residential-plumb">
											@for ($x = 1; $x <= 9; $x++)
											<div class="col-md-4 col-xs-12 col-sm-6">
												<a class="example-image-link" href="/img/portfolio/Roofing/Roofing ({{$x}}).JPG" data-lightbox="example-set" data-title="ABR Construction">
												<div class="service-item">
													<div class="service-thumb">
														<img width="360" src="/img/portfolio/Roofing/Roofing ({{$x}}).JPG" alt="Loading">
													</div>
												</div></a>
											</div>
											@endfor
										</div>
									</div>
								</div>
            					<div id="No2" class="tabcontent">
									<div class="rowcol"> 
										<div class="residential-plumb">
											@for ($x = 10; $x <= 18; $x++)
											<div class="col-md-4 col-xs-12 col-sm-6">
												<a class="example-image-link" href="/img/portfolio/Roofing/Roofing ({{$x}}).JPG" data-lightbox="example-set" data-title="ABR Construction">
												<div class="service-item">
													<div class="service-thumb">
														<img width="360"  src="/img/portfolio/Roofing/Roofing ({{$x}}).JPG" alt="Loading">
													</div>
												</div></a>
											</div>
											@endfor
										</div>
									</div>
								</div>
								<div id="No3" class="tabcontent">
									<div class="rowcol"> 
										<div class="residential-plumb">
											@for ($x = 19; $x <= 26; $x++)
											<div class="col-md-4 col-xs-12 col-sm-6">
												<a class="example-image-link" href="/img/portfolio/Roofing/Roofing ({{$x}}).JPG" data-lightbox="example-set" data-title="ABR Construction">
												<div class="service-item">
													<div class="service-thumb">
														<img width="360"  src="/img/portfolio/Roofing/Roofing ({{$x}}).JPG" alt="Loading">
													</div>
												</div></a>
											</div>
											@endfor
										</div>
									</div>
								</div>
								</div>
								<div class="tab">
								<button class="tablinks" onclick="openCity(event, 'No1')" id="defaultOpen">1</button>
								<button class="tablinks" onclick="openCity(event, 'No2')">2</button>
								<button class="tablinks" onclick="openCity(event, 'No3')">3</button>
								</div>
							</div>
	
							
						</div>
						<!-- .row-->
					</div>
					<!-- .container-->
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
					<script src="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>
@endsection