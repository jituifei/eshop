// JavaScript Document







$(function(){
	$("#navList_itemSort").mouseover(function(){
		 
		 $thisul=$(this).next()	        /* 使a标签同级下一个元素ul显示出来       商品分类按钮*/
		 $thisul.css("display","block")
		 $other_ul=$(this).parents().next().find("#showSuper")
		 
		 $other_ul.css("display","none")
	})	
	$("#navList_itemSuper").mouseover(function(){
		 
		 $thisul=$(this).next()	        /* 使a标签同级上一个ul显示出来    超级运动会按钮*/
		 $thisul.css("display","block")
		 $other_ul=$(this).parents().prev().find("#showSort")
		  
		 $other_ul.css("display","none")
	})	
})

  									/*  背景 字体颜色切换 begin*/   
$(function(){
	$("#navList_itemSuper").mouseover(function(){
		 $(this).addClass("selectedSuper")
		 $sort=$(this).parents().prev().find("#navList_itemSort")
		 $sort.removeClass("selecterSort")
 
	})

	$("#navList_itemSort").mouseover(function(){
		 $(this).addClass("selecterSort")
		 $super=$(this).parents().next().find("#navList_itemSuper")
		 $super.removeClass("selectedSuper")
	})

	
})    

$(function(){													/* 导航栏头部 滑出天猫 !*/
	$(".navList_item").mouseover(function(){
	 
		$(this).next().animate({
			  top:"-8"
			  },150)	
		})
		
	$(".navList_item").mouseleave(function(){
	 
		$(this).next().animate({
			  top:"0"
			  },150)	
		})
	})


$(function(){										/* 自动切换 begin*/
	$(".logoButton_container > a").mouseover(function(){
		$index=$(this).index() 
		$showLogo_item=$(this).parents().prev().find(".showLogo_item")
		$showLogo_item.eq($index).fadeIn().siblings().fadeOut();
		                                             
		$img.eq($index).attr("src","index img/btngray.png").siblings().attr("src","index img/btnwhite.png")
		})
	
	})

$(function(){												/* 改变圆形按钮图片*/
	$(".logoButton_container > a").mouseover(function(){
		
		$index=$(this).index()								/*this为img的容器a标签*/
		$img=$(this).find("img")	 						/*获得当前a标签下单独的img*/
		$img.attr("src","index img/btngray.png")			/*设置这个a标签下的img更换选中时的图片*/
		$imgOthers=$(this).siblings().find("img")			/*找都a标签同级元素其他a标签下img*/
		$imgOthers.attr("src","index img/btnwhite.png")		/*使其他的img改为未选中时的图片*/
		})	
	})


 
	var $index=1;											/* 定时器自动切换 begin */

   	var settimeLogo=setInterval(function(){ 
	
	$showLogo_item=$(".logoButton_container > a").parents().prev().find(".showLogo_item")
	
	$img=$(".logoButton_container > a").eq($index).find("img")
	$imgOthers=$(".logoButton_container > a").eq($index).siblings().find("img")
	
	if($index<$showLogo_item.length)
	{
		$showLogo_item.eq($index).fadeIn().siblings().fadeOut();      /* 图片自动切换 */
		$img.attr("src","index img/btngray.png")						/* button 自动切换 */
		$imgOthers.attr("src","index img/btnwhite.png")
		
		$index++; 
	}
	else
	{
		$index=0;															/* 大于长度时切换到第一个 实现循环*/
		$showLogo_item.eq($index).fadeIn().siblings().fadeOut();
		$img=$(".logoButton_container > a").eq($index).find("img")			/* 重新获取此时的 索引index */
		$imgOthers=$(".logoButton_container > a").eq($index).siblings().find("img")
		$img.attr("src","index img/btngray.png")
		$imgOthers.attr("src","index img/btnwhite.png")
	}
	},4000)								 									/* 定时器自动切换 over */
 
	
		
  $(function(){																/*activityLogo_container 鼠标移入及移出中的图片 透明度变化*/
	  $(".activityLogo_container > a").mouseover(function(){
		 
		  $(this).animate({
			  opacity:"0.8"
			  },190)
	   })
	   $(".activityLogo_container > a").mouseleave(function(){
		 
		  $(this).animate({
			  opacity:"1"
			  },180)
	   })
	  
	 })
	
 
	  $(function(){															/* .brand_list ul li span 鼠标移入及移出中的图片 透明度变化*/
	  $(".brand_listShow > li").mouseover(function(){
		  $span=$(this).find("span")
		   
		  $span.fadeIn(200)
		  
	   }).mouseleave(function(){
		 $span.stop(false,false);		   							/* 淡入还没完成时移出鼠标停止淡出效果 */
		   })
	   
	   $(".brand_listShow > li").mouseleave(function(){				
		 $span=$(this).find("span")
		 $span.fadeOut(100) 
	    
	   })
	  
	 })
 
 
    $(function(){															/* activityLogo_container 鼠标移入及移出中的图片 透明度变化*/
	  $(".recommend_item > a").mouseover(function(){
		   $(this).animate({
			  opacity:"0.7",
	 
			  },180)
		 
			  
	   })
	   $(".recommend_item > a").mouseleave(function(){
		  $(this).animate({
			  opacity:"1",
			  },180)
		  
	   })
	  
	 })
	 
	 
	$( function(){											//上 右悬浮框
		 
		
			$(window).scroll(function(){
				var scrollY=$(document).scrollTop();            // 获取垂直滚动的距离，即滚动了多少
				
					if(scrollY>1000)										//如果滚动距离大于700px则滑出，否则隐藏
					{
						$(".suspend_search").slideDown();
						$(".suspend_nav").fadeIn()
					}
					else
					{
						$(".suspend_search").slideUp();
						$(".suspend_nav").fadeOut();
					}
				})
		
	  })
	  
	
																			/*  左侧按钮 点击后页面移动事件*/
$(function(){															
	$("#suspend_itemBtn1").click(function(){								/* 点击按钮移动到页面特位置 */ 

				$('html,body').animate({scrollTop:1500},"slow");
		
		
	})
	
	$("#suspend_itemBtn2").click(function(){								/* 点击按钮移动到页面特位置 */ 

				$('html,body').animate({scrollTop:2100},"slow");
		
		
	})
	$("#suspend_itemBtn3").click(function(){								/* 点击按钮移动到页面特位置 */ 

				$('html,body').animate({scrollTop:2700},"slow");
		
		
	})	
	$("#suspend_itemBtn4").click(function(){								/* 点击按钮移动到页面特位置 */ 

				$('html,body').animate({scrollTop:3300},"slow");
		
		suspend_navBack
	})	
	$("#suspend_itemBtn5").click(function(){								/* 点击按钮移动到页面特位置 */ 

				$('html,body').animate({scrollTop:3900},"slow");
		
		suspend_navBack
	})	
	$("#suspend_navBack").click(function(){								/* 点击按钮移动到 页面顶部 */ 

				$('html,body').animate({scrollTop:0},"slow");
		
		
	})
	$("#suspend_navBack2").click(function(){								/* 点击按钮移动到 页面顶部 */ 

				$('html,body').animate({scrollTop:0},"slow");
		
		
	})
})



	 
	$(function(){																/*  右侧导航栏中 购物车切换图片 */
		$("#suspend_login_buyCar").mouseover(function(){
			$img=$(this).find("img");
			$img.attr("src","index img/suspend_login_buyCar.png")
			})
			
		$("#suspend_login_buyCar").mouseleave(function(){
			$img=$(this).find("img");
			$img.attr("src","index img/suspend_login_buyCarRed.png")
			})

		
		})	
 
	 
	 $(function(){															/* channel中左侧大图  鼠标移入及移出中的图片 透明 */
	  $(".channel_logo1 > img").mouseover(function(){
		   
		   $(this).animate({
			  opacity:"0.85"
	 
			  },180)
		 
			  
	   })
	   $(".channel_logo1 > img").mouseleave(function(){
		  $(this).animate({
			  opacity:"1"
			  },180)
		  
	   })
	  
	 })
	 
	 
	 $(function(){																/*  channel mid  中部小图片移动 */
		$(".channel_item > img").mouseover(function(){
			  $(this).animate({
			  right:"10"
			  },180)
			
		})
		$(".channel_item > img").mouseleave(function(){
			  $(this).animate({
			  right:"0"
			  },180)
			
		})		 
		 
	 })
	 
	 
	 $(function(){															    /*  channel  right  右侧小图片移动 */
		$(".channel_recommend_item > a > img").mouseover(function(){
			  $(this).animate({
			  right:"5"
			  },180)
			
		})
		$(".channel_recommend_item > a > img").mouseleave(function(){
			  $(this).animate({
			  right:"0"
			  },180)
			
		})		 
		 
	 })
	 
	 
