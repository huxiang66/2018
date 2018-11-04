@extends('base.mobil.mcommon')
@section('title','留言')

@section("link")
<link rel="stylesheet" type="text/css" href="css/mobil/mboard.css">
@endsection

@section("body")
	<div class="titleBox">
		<span>留言板</span>
	</div>
	<div class="message">
		<div class="message-box">
			<img src="/images/mobil/msg_03.jpg">
			<input type="text" placeholder="姓名(必填)" id="userName">
		</div>
		<div class="message-box">
			<img src="/images/mobil/msg_06.jpg">
			<input type="text" placeholder="邮箱" id="email">
		</div>
		<div class="message-box" >
			<img src="/images/mobil/msg4_03.jpg">
			<input type="text" placeholder="电话" id="phone">
		</div>
		<div class="message-box">
			<img src="/images/mobil/msg_10.jpg">
			<input type="text" placeholder="内容" id="message">
		</div>
		<button>提交</button>
	</div>

	
@endsection


@section("js")
<script src="js/mobil/mboard.js"></script>
@endsection	
