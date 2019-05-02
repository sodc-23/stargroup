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