jQuery(function(e){e(document).ready(function(){e('a[rel="social-share"]').on("click",function(t){t.preventDefault();var n=e(this).attr("href");window.open(n,n,"width=550, height=350")});e(".post-categories li a").each(function(t){$categoryName=e(this).html();switch($categoryName){case"My Stuff":e(this).css("background-color","#fdc87a");break;case"Theory":e(this).css("background-color","#7c7ab9");break;case"Futurism":e(this).css("background-color","#a1dae2");break;case"Fun Interwebs Stuff":e(this).css("background-color","#71a9db");break;case"Reviews":e(this).css("background-color","#6ADEB2");break;case"Philosophy":e(this).css("background-color","#FFA47A");break;case"News":e(this).css("background-color","#557EA4");break;case"Fringe-Science":e(this).css("background-color","#1B6F4F");break;default:e(this).css("background-color","#CCCCCC")}});e(window).scroll(function(t){if(e(window).scrollTop()>=200){e("#nav-box").css("position","fixed").css("top","0");e(".main-menu").css("position","fixed").css("top","3px")}else{e("#nav-box").css("position","absolute").css("top","199px");e(".main-menu").css("position","absolute").css("top","202px")}});e("#nav-box").on("mouseenter",function(){e("#nav-box").removeClass("nav-box-no-hover");e("#nav-box").addClass("nav-box-hover")}).on("mouseleave",function(){e("#nav-box").removeClass("nav-box-hover");e("#nav-box").addClass("nav-box-no-hover")});e(".main-menu").on("mouseenter",function(){e("#nav-box").removeClass("nav-box-no-hover");e("#nav-box").addClass("nav-box-hover")}).on("mouseleave",function(){e("#nav-box").removeClass("nav-box-hover");e("#nav-box").addClass("nav-box-no-hover")})})});