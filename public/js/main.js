function PathAnimator(path){if(path)this.updatePath(path);}PathAnimator.prototype={start:function(duration,step,reverse,startPercent,callback,easing){this.stop();this.percent=startPercent||0;if(duration==0)return false;if(duration==null){this.step=step;this.callback=callback;this.running=true;return;}var that=this,startTime=new Date(),delay=1000/60;(function calc(){var p=[],angle,now=new Date(),elapsed=(now-startTime)/1000,t=(elapsed/duration),percent=t*100;if(typeof easing=='function')percent=easing(t)*100;if(reverse)percent=startPercent-percent;else
percent+=startPercent;that.running=true;if(percent>100||percent<0){that.stop();return callback.call(that.context);}that.percent=percent;p[0]=that.pointAt(percent-1);p[1]=that.pointAt(percent+1);angle=Math.atan2(p[1].y-p[0].y,p[1].x-p[0].x)*180/Math.PI;that.timer=setTimeout(calc,delay);step.call(that.context,that.pointAt(percent),angle);})();},setProgress:function(percent){var p=[],angle;if(percent>100||percent<0){this.stop();return this.callback.call(this.context);}this.percent=percent;p[0]=this.pointAt(percent-1);p[1]=this.pointAt(percent+1);angle=Math.atan2(p[1].y-p[0].y,p[1].x-p[0].x)*180/Math.PI;this.step.call(this.context,this.pointAt(percent),angle);},stop:function(){clearTimeout(this.timer);this.timer=null;this.running=false;},pointAt:function(percent){return this.path.getPointAtLength(this.len*percent/100);},updatePath:function(path){this.path=document.createElementNS('http://www.w3.org/2000/svg','path');this.path.setAttribute('d',path);this.len=this.path.getTotalLength();}};

var timeOutId;
var editImgAndAnimateCircle = function() {
    var editImgAndAnimateCircle = {};
    var counter = 0;
    editImgAndAnimateCircle.imgs = {};
    editImgAndAnimateCircle.texts = {};
    editImgAndAnimateCircle.texts.$list = jQuery('.wo-can-panel .losung div:not(.we-can)');
    editImgAndAnimateCircle.imgs.phone = 'phone.png';
    editImgAndAnimateCircle.imgs.pc = 'pc.png';
    editImgAndAnimateCircle.stringToArray = function(str, option) {
        return str.split(option);
    };
    editImgAndAnimateCircle.arrayToString = function(arr, option) {
        return arr.join(option);
    };
    editImgAndAnimateCircle.changeImages = function() {
        var $img = jQuery('.circle_img-devices');
        editImgAndAnimateCircle.texts.$list.removeClass('active');
        editImgAndAnimateCircle.texts.$list.eq(counter).addClass('active');
        $img.fadeOut();
        $($img.eq(counter)).fadeIn();
        counter++;
        if (counter == 2) {
            counter = 0;
        }
    };
    editImgAndAnimateCircle.init = function() {
        editImgAndAnimateCircle.changeImages();
        timeOutId = setInterval(editImgAndAnimateCircle.changeImages, 4000);
    };
    return editImgAndAnimateCircle;
};
$(window).on('load', function() {
  editImgAndAnimateCircle().init();
});
$(document).ready(function($) {
   
    $('.contact-us-panel input').each(function(e) {
        if ($(this).val() == "") {
           $(this).next().removeClass('non-empty');
       } else {
           $(this).next().addClass('non-empty');
       }
    });
    
    $('.contact-us-panel input').off('blur').on('blur', function(e) {
       if ($(this).val() == "") {
           $(this).next().removeClass('non-empty');
       } else {
           $(this).next().addClass('non-empty');
       }
    });
    
    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        
        loop: true,
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

       
      })

});