@extends('base.mobil.mcommon')
@section('title','关于我们')

@section("link")
<link rel="stylesheet" type="text/css" href="css/mobil/mabout.css">
@endsection
@section("mactiveAbout")
	class="m-active"
@endsection
@section("body")
	<div class="titleBox">
		<span>关于我们</span>
	</div>
	<div class="about clearfix">
		<img src="/images/index7.jpg" class="fl">
		<div class="about-right">
			为其塑造全新品牌视觉形象，其是一家座落于国家软件产业基地内的智能科技公司，该公司是中国早进入电信增值业务和拥有语音增值业务产品的企业，其软件产品在电信运商、政府信息化、大中型企业等行业客户领域得到了广泛应用。
		</div>
		<div class="about-bottom">
			我们将不断提高服务质量，逐步形成一套优质，我们的服务触及全国每一个角落，在全国任何地方的用户都能得到周到细致的服务。
		</div>
	</div>
	<div class="titleBox">
		<span>经营理念</span>
	</div>
	<div class="idea">
		<img src="/images/index11.jpg">
		<div class="idea-content">
			<h3>12年沉淀，我们只做一件事</h3>
			<p>品牌整合，所做的一切皆为助力中国品牌梦想走向成功，从品牌定位战略到战术从形象包装到终端体验，从线下到电子商务渠道，亦或者是品牌维护管理。策略引导视觉，视觉服务传播，传播引爆商业价值！</p>
		</div>
	</div>
@endsection


@section("js")
@endsection	
