@extends('base.mobil.mcommon')
@section('title','首页')

@section("link")
<link rel="stylesheet" type="text/css" href="css/mobil/mindex.css">
@endsection
@section("mactive")
	class="m-active"
@endsection
@section("body")
	<div class="business">
		<div class="business-box">
			<a href="mservice">
			<img src="../images/mobil/index_03.jpg">
			<p>品牌营销</p>
			</a>
		</div>
		<div class="business-box">
			<a href="mservice">
			<img src="../images/mobil/index_05.jpg">
			<p>VI设计</p>
			</a>
		</div>
		<div class="business-box">
			<a href="mservice">
			<img src="../images/mobil/index_07.jpg">
			<p>广告策划</p>
			</a>
		</div>
		<div class="business-box">
			<a href="mservice">
			<img src="../images/mobil/index_09.jpg">
			<p>电商设计</p>
			</a>
		</div>
	</div>
	<!-- 新闻中心 -->
	<div class="news1">
		<div class="news1-content">
			<h2>———　新闻中心　———</h2>
			<p>为其塑造全新品牌视觉形象，其是一家座落于软件产业基地内的智能科技公司，该公司是中国早进入电信增值业务和拥有语音增值业务产品的企业其软件产品在电信运商、政府信息化、大中型企业等行业客户领域得到了广泛应用。</p>
		</div>
	</div>

	<div class="titleBox">
		<span>推荐案例</span>
	</div>
	<div class="input-group">
		<input type="text" class="form-control" placeholder="请输入关键字...">
	</div>
	<!-- 名片 -->
	<div class="card">
		<div class="card-wrap">
			<img src="/images/index9.jpg">
			<div class="card-wrap-text">
				<h3>公司总经理名片</h3>
				<p>
					我们专注于品牌设计与研究在各行业有着丰富成熟的设计。
				</p>
			</div>
		</div>
		<div class="card-wrap">
			<div class="card-wrap-text">
				<h3>阿姨奶茶店包装设计</h3>
				<p>
					宣传片良好的企业形象，能够扩大企业知名度。
				</p>
			</div>
			<img src="/images/index10.jpg">
		</div>
	</div>
	<!-- 广告设计 -->
	<div class="news2">
		<div class="news2-content">
			<h2>ADVERTISING广告设计，让创意为你代言</h2>
			<p>通过我们专业的服务和情价比超高的设计，我们已经积累了上千家满意的中小企业客户。高达99%以上的客户满意率也让我们更自信，更坚定进一歩对高品质的追求。</p>
		</div>
	</div>
	<!-- 四个图文展 -->
	<div class="careful">
		<div class="careful-box">
			<p>企业标志LOGO设计有哪些事项是需要忌讳和注意的</p>
			<img src="/images/index15.jpg">
		</div>
		<div class="careful-box">
			<p>企业标志LOGO设计有哪些事项是需要忌讳和注意的</p>
			<img src="/images/index12.jpg">
		</div>
		<div class="careful-box">
			<p>三面翻广告牌设计尺寸大小的原则</p>
			<img src="/images/index14.jpg">
		</div>
		<div class="careful-box">
			<p>民国广告大咖</p>
			<img src="/images/index13.jpg">
		</div>
	</div>
@endsection


@section("js")
<script src="js/index.js"></script>
@endsection	



