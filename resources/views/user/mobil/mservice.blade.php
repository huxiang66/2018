@extends('base.mobil.mcommon')
@section('title','服务案例')

@section("link")
<link rel="stylesheet" type="text/css" href="css/mobil/mservice.css">
@endsection
@section("mactiveService")
	class="m-active"
@endsection
@section("body")
	<div class="titleBox">
		<span>服务案例</span>
	</div>

	<div class="case clearfix">
		<div class="case-box fl">
			<img src="/images/serv2.jpg">
			<p>品牌策划</p>
		</div>
		<div class="case-box fr">
			<img src="/images/serv3.jpg">
			<p>包装设计</p>
		</div>
	</div>
	<div class="case clearfix">
		<div class="case-box fl">
			<img src="/images/serv4.jpg">
			<p>物料设计</p>
		</div>
		<div class="case-box fr">
			<img src="/images/serv5.jpg">
			<p>画册设计</p>
		</div>
	</div>
	<!-- 页码 -->
	<div class="pageNum clearfix">
		<div class="pageNum-left fl">
			上一页
		</div>
		<div class="pageNum-mid">
			<span class="current">1</span>
			<span>/</span>
			<span class="all">3</span>
		</div>
		<div class="pageNum-right fr">
			下一页
		</div>
	</div>
@endsection


@section("js")
@endsection	
