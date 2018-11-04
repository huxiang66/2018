@extends('base.common')
	@section('title','联系我们')
	@section("act-contact")
		class="active"
	@endsection
	
	@section("link")
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="css/mobil/mcontact.css">
	@endsection


	@section("body")
<div class="pc">
	<div class="contact-bigPci">
		<img src="/images/call.jpg">
	</div>
	<div class="contact-textArea">
		<h2>联系我们</h2>
		<p class="contact-textArea-chinese">
			通过研究商业模式来定义品牌模式提供优秀的品牌整合解决方案，令品牌长远发展，更具竞争力
		</p>
		<p class="contact-textArea-english">
			TO DEFINE THE BRAND MODEL BY STUDYING THE BUSINESS MODEL TO PROVIDE EXCELLENT BRAND INTEGRATION SOLUTIONS, SO THE 
		</p>
		<p class="contact-textArea-english">BRANLONG-TERM DEVELOPMENT, MORE COMPETITIVE</p>
	</div>
	<div class="phone">
		<div class="phone-box">
			<img src="/images/call1.png">
			<p>电话:64422283</p>
		</div>
		<div class="phone-box">
			<img src="/images/call2.png">
			<p>地址: 蜀山区西城花园别墅区</p>
		</div>
		<div class="phone-box">
			<img src="/images/call3.png">
			<p>邮件:50432642@qq.com</p>
		</div>
	</div>
</div>

	@endsection



@section("js")
	
@endsection