	@extends('base.common')
	@section('title','首页')


	@section("act-index")
		class="active"
	@endsection
	
	@section("link")
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/businessCase.css">
	@endsection

	
@section("body")
	<div id="carousel-example-generic" class="carousel slide clearfix" data-ride="carousel">
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="/images/index1.jpg" alt="images1">
			<div class="carousel-caption caption-firse">
				<h3>用设计提升您的品牌价值</h3>
				<p>精 准 的 策 略 + 独 特 创 意 + 完 美 执 行</p>
			</div>
		</div>
		<div class="item">
			<img src="/images/index2.jpg" alt="images2">
			<div class="carousel-caption caption-second">
				<h3>品牌形象设计</h3>
				<p>We leading the industrial design</p>
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		</a>
	</div>
	</div>
	<!-- 核心业务 -->
	<div class="business">
		<div class="business-head">
			<div class="business-head-title">
				<span class="title-chinese">核心业务</span>
				<span class="title-english">CORE BUSSINESS</span>
			</div>
			<div class="business-head-text">
				为数百家优秀企业提供了专业广告、咨询、媒体服务,我们始终坚持为客户创建准确可行、更具商业价值的品牌形象​
			</div>
		</div>
	</div>
		@include('base.businessCase')
		<!-- 关于我们 -->
		<div class="about">
			<div class="about-title">
				<span class="title-chinese">关于我们</span>
				<span class="title-english">ABOUT US</span>
			</div>
			<div class="about-body">
				<img src="/images/index7.jpg">
				<div class="about-body-right">
					<p>
						草创未就之时，仍坚守将商业与艺术完美结合，从未妥协；
						给顾客呈现出机具表现力的影视作品，
						曾经，为此不计成本而深得客户信赖。
						    时光荏苒，6年岁月。
						如白驹过隙，在转眼间。
						汉华传媒却初心未偿，仍需努力。
					</p>
					<p>
						汉华传媒创业者们，了然于胸的新时代里，
						逐
						新时代里，汉华传媒为客户提供一站式品牌设计落地服务，
						涵盖视频、平面、路演等，为客户的品牌落地执行，
						提供全方位的卓有成效的设计执行。
						当然，汉华传媒的初心，绝不止于此。
					</p>
				</div>
			</div>
		</div>

		<!-- 案例 -->
		<div class="case">
			<div class="case-left">
				<img src="/images/index8.jpg">
				<div class="case-left-content">
					<h2 class="title-chinese">公司理念</h2>
					<p>
						12年沉淀，所做的一切皆为助力中国品牌
						梦想走向成功.
						从线下到电子商务渠道，亦或者是品牌维
						护管理。策略引导视觉，视觉服务传播，
						传播引爆商业价值！
					</p>
				</div>
			</div>
			<div class="case-right">
				<h2 class="title-chinese case-title-chinese">服务案例</h2>
				<div class="case-right-content">
					<div class="case-right-content-box1">
						<div class="case-box1-introduce">
							<h2>公司总经理名片</h2>
							<p class="case-title">名片设计</p>
							<p class="case-text">
								我们专注于品牌设计与研究，设计总监来自
								于各4A广告公司有着10年的设计经验，在各行业有着丰富成熟的设计。
							</p>
						</div>
						<img src="/images/index9.jpg" class="left-pic">
					</div>
					<div class="case-right-content-box2">
						<img src="/images/index10.jpg" class="left-pic">
						<div class="case-box2-introduce">
							<h2>阿姨奶茶店包装设计</h2>
							<p class="case-title">品牌包装</p>
							<p class="case-text">
								宣传片良好的企业形象，能够扩大企业知名度，增加投资者与合作者的好感和信心，得到公众的信赖
							</p>
						</div>	
					</div>
				</div>
				
			</div>
		</div>
		<!-- 行业动态 -->
		<div class="news">
			<div class="news-title">
				<span class="title-chinese">行业动态</span>
				<span class="title-english">LASTEST NEWS</span>
			</div>
			<div class="news-body">
				<img src="/images/index11.jpg">
			</div>
			<div class="news-content">
				<h3>ADVERTISING广告设计，让创意为你代言</h3>
				<p>通过我们专业的服务和情价比超高的设计，我们已经积累了上千家满意的中小企业客户。高达99%以上的客户满意率也让我们</p>
				<p>更自信，更坚定进一歩对高品质的追求。</p>
			</div>
		</div>
		<!-- 技巧 -->
		<div class="skill">
			<div class="skill-left">
				
			</div> 
			<div class="skill-right">
				
			</div>
		</div>
</div>

	<!-- mobil -->

@endsection

@section("js")
<script src="js/index.js"></script>
@endsection
