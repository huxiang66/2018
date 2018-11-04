$(function(){
	var res={

		code:66,
		listLeft:[
			{
				src:'/images/index12.jpg',
				head:'三面翻广告牌设计尺寸大小的原则',
				text:'三面翻广告牌的设计要尽可能实现简洁化，做到别具匠心，从尺寸大小出发，坚持少而精的原则来进行，三面翻广告牌的尺寸大小...'
			},
			{
				src:'/images/index13.jpg',
				head:'品牌设计让你的品牌更具价值',
				text:'品牌只有赋予其商业产品才具有品牌价值，而品牌的构成离不开产品、市场、广告、形象、理念等多方面，品牌并不是取个好听的...'
			}
			
			],
		listRight:[
				{
					src:'/images/index14.jpg',
					head:'民国广告大咖',
					text:'那些美轮美奂的民国广告画出自谁之手？它们的作者经历了怎么样的人生？它们究竟蕴藏着哪些不为人知的秘密？回答以上问题...'
				},
				{
					src:'/images/index15.jpg',
					head:'企业标志LOGO设计注意事项',
					text:'靠前：一个企业的标志设计中不应参杂进宗教和文化禁忌的符号元素进来　　比如，纳粹、异教等被全世界人民所痛恨的禁忌元素...'
				}

				]
			};




	for(var i=0;i<res.listLeft.length;i++){
		var htmlLeft='<div class="skill-left-box">'+
				'<img src="'+res.listLeft[i].src+'">'+
				'<div class="skill-left-box-text">'+
					'<div class="skill-left-box-text-head">'+
						res.listLeft[i].head+
					'</div>'+
					'<div class="skill-left-box-text-content">'+
						res.listLeft[i].text+
					'</div>'+
				'</div>'+
			'</div>'
	$(".skill-left").append(htmlLeft)
		}
	

	for(var j=0;j<res.listRight.length;j++){
		var htmlRight='<div class="skill-left-box">'+
				'<img src="'+res.listRight[j].src+'">'+
				'<div class="skill-left-box-text">'+
					'<div class="skill-left-box-text-head">'+
						res.listRight[j].head+
					'</div>'+
					'<div class="skill-left-box-text-content">'+
						res.listRight[j].text+
					'</div>'+
				'</div>'+
			'</div>'

	$(".skill-right").append(htmlRight);
	}

})
	
