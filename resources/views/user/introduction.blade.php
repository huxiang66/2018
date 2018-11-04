@extends('base.common')
	@section('title','业务介绍')


	@section("act-introduction")
		class="active"
	@endsection
	
	@section("link")
	<link rel="stylesheet" type="text/css" href="css/introduction.css">
	@endsection


@section("body")
	<div class="introduction-bigPic">
		<img src="/images/intr1.jpg">
	</div>
<!-- 服务经验 -->
	<div class="experience">
		<div class="experience-left">
			<h1>我们有数十年的广告服务经验</h1>
			<p>
				我们有数十年的广告服务经验
				为其塑造全新品牌视觉形象，其是一家座落于软件产业基地内的智能科技公司，该公司是中国较早进入电信增值业务和拥有语音增值业务产品的企业，其软件产品在电信运商、政府信息化、大中型企业等行业客户领域得到了广泛应用。
			</p>
		</div>
		<div class="experience-right">
			<div class="experience-right-top clearfix">
				<div class="pic-wrap fl">
					<img src="/images/intr2.jpg">
				</div>
				
				<div class="pic-wrap fr">
					<img src="/images/intr3.jpg">
				</div>
			</div>
			<div class="experience-right-top clearfix">
				<div class="pic-wrap fl">
					<img src="/images/intr4.jpg">
				</div>
				<div class="pic-wrap fr">
					<img src="/images/intr5.jpg">
				</div>
			</div>
		</div>
	</div>
<!-- 画册设计 -->
	<div class="design">
		<div class="design-content clearfix">
			<img src="/images/intr6.jpg" class="fl">
			<div class="design-content-text fr">
				<h1 class="title-chinese">画册设计</h1>
				<p>画册，是企业对外宣传自身文化、产品特点的广告媒介之一，是企业对外的名片，属于印刷品。</p>
				<p>内容包括画册设计、海报/广告设计、DM策划设计企业展览设计、创意系列海报策划与设计。</p>
			<a class="more" href="contact">了解更多</a>
			</div>
		</div>
		<div class="design-content clearfix">
			<img src="/images/intr7.jpg" class="fl">
			<div class="design-content-text fr">
				<h1 class="title-chinese">品牌策划</h1>
				<p>专业产品拍摄广州专业的摄影团队，高端的摄影器材，产品拍摄专业视角，以效果</p>
				<p>取胜。返单率超高，高品质的产品拍摄</p>
			<a class="more" href="contact">了解更多</a>
			</div>
		</div>
	</div>
	<div class="h50" style="height: 50px;"></div>

	@endsection



	@section("js")

	@endsection