@extends('layouts.master')

@section('title', 'Clean Blog')

@section('content')


		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<div id="filters-container" class="cbp-l-filters-button">
							<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All
								<div class="cbp-filter-counter"></div>
						</div>
                        </div>


						{{--采風堂--}}
						<div id="grid-container" class="cbp-l-grid-projects">
							<ul>
								<li class="cbp-item graphic">
									<div class="cbp-caption">
										<div class="cbp-caption-defaultWrap">
											<img src="img/works/123.png" alt="" />
										</div>
										<div class="cbp-caption-activeWrap">
											<div class="cbp-l-caption-alignCenter">
												<div class="cbp-l-caption-body">
													<a href='{{ route('one.index') }}' class="cbp-l-caption-buttonLeft" > 查看場地狀態 </a>
												</div>
											</div>
										</div>
									</div>
									<div class="cbp-l-grid-projects-title">采風堂</div>
								</li>
								{{--匯川堂--}}
								<li class="cbp-item web-design logo">
									<div class="cbp-caption">
										<div class="cbp-caption-defaultWrap">
											<img src="img/works/456.png" alt="" />
										</div>
										<div class="cbp-caption-activeWrap">
											<div class="cbp-l-caption-alignCenter">
												<div class="cbp-l-caption-body">
													<a href='{{ route('two.index') }}' class="cbp-l-caption-buttonLeft" > 查看場地狀態 </a>
												</div>
											</div>
										</div>
									</div>
									<div class="cbp-l-grid-projects-title">匯川堂</div>
								</li>
							</ul>
						</div>



					</div>
				</div>
			</div>
		</section>


	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/uisearch.js"></script>
	<script src="js/jquery.cubeportfolio.min.js"></script>
	<script src="js/google-code-prettify/prettify.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>


</body>

</html>
@endsection