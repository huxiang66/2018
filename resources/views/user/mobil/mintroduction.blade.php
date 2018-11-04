@extends('base.mobil.mcommon')
@section('title','产品介绍')

@section("link")
<link rel="stylesheet" type="text/css" href="css/mobil/mintroduction.css">
@endsection
@section("mactiveIntroduction")
	class="m-active"
@endsection
@section("body")
	<div class="experience">
		<h2>我们有数十年的广告服务经验</h2>
		<p>为其塑造全新品牌视觉形象，其是一家座落于国家软件产业基地内的智能科技公司，该公司是中国早进入电信增值业务和拥有语音增值业务产品的企业，其软件产品在电信运商、政府信息化、大中型企业等行业客户领域得到了广泛应用。</p>
	</div>
	<div class="titleBox">
		<span>服务案例</span>
	</div>
	<!-- 四张图 -->
	<div class="case">
		<div class="case-top clearfix">
			<img src="/images/intr2.jpg">
			<img src="/images/intr3.jpg" class="fr">
		</div>
		<div class="case-bottom clearfix">
			<img src="/images/intr4.jpg">
			<img src="/images/intr5.jpg" class="fr">
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
			<span class="all">1</span>
		</div>
		<div class="pageNum-right fr">
			下一页
		</div>
	</div>
@endsection


@section("js")
@endsection	
