	<div class="mnav">
		<ul id="topAnthor">
			<a href="mindex"><li @yield("mactive")>首页</li></a>
			<a href="mintroduction"><li @yield("mactiveIntroduction")>业务介绍</li></a>
			<a href="mservice"><li @yield("mactiveService")>服务案例</li></a>
			<a href="mabout"><li @yield("mactiveAbout")>关于我们</li></a>
			<a href="mcontact"><li @yield("mactiveContact")>联系我们</li></a>
		</ul>
	</div>
	<div id="carousel-example-generic" class="carousel slide clearfix mcarousel" data-ride="carousel">
		<ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	  	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="../images/index1.jpg" alt="images1">
			<div class="carousel-caption mcarousel-caption caption-firse mcaption-firse">
				<h3>用设计提升您的品牌价值</h3>
				<p>精 准 的 策 略 + 独 特 创 意 + 完 美 执 行</p>
			</div>
		</div>
		<div class="item">
			<img src="../images/index2.jpg" alt="images2">
			<div class="carousel-caption mcarousel-caption caption-second mcaption-second">
				<h3>品牌形象设计</h3>
				<p>We leading the industrial design</p>
			</div>
		</div>
	</div>
	</div>
