@extends('base.common')	@section('title','关于我们')

	@section("act-about")
		class="active"
	@endsection

	@section("link")
	<link rel="stylesheet" type="text/css" href="css/about.css">
	<link rel="stylesheet" type="text/css" href="css/businessCase.css">
	@endsection


	@section("body")
		<div class="about-bigPic">
			<img src="/images/about1.jpg">
		</div>
		<div class="business">
			<h2>我们的核心业务</h2>
			<p>为数百家优秀企业提供了专业广告、咨询、媒体服务,我们始终坚持为客户创建准确可行、更具商业价值的品牌形象​</p>
		</div> 

		@include('base.businessCase')

		<div class="idea">
			<div class="idea-title title-chinese">
				经营理念
			</div>
			<img src="/images/about2.jpg">
			<p>
				12年沉淀，我们只做一件事
			</p>
			<p>
				品牌整合，所做的一切皆为助力中国品牌梦想走向成功，从品牌定位战略到战术从形象包装到终端体验，从线下到电子商务渠道，亦或者是品牌维护管理。策略引导视觉，视觉服务传播，传播引爆商业价值！
			</p>
		</div>
		





	@endsection



	@section("js")

	@endsection