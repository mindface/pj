

window.onload = function(){
// var hoverClass = document.getElementsByClassName('transf');
// console.log(hoverClass);

// var action1 = document.getElementById('action01'),
// action2 = document.getElementById('action02'),
// action3 = document.getElementById('action03'),
// mv1 = document.getElementById('mv01'),
// mv2 = document.getElementById('mv02'),
// mv3 = document.getElementById('mv03');

// var over01 = function(){
//     mv1.classList.add('mv');
// };
// var out01 = function(){
//     mv1.classList.remove('mv');
// };
// var over02 = function(){
//     mv2.classList.add('mv');
// };
// var out02 = function(){
//     mv2.classList.remove('mv');
// };
// var over03 = function(){
//     mv3.classList.add('mv');
// };
// var out03 = function(){
//     mv1.classList.remove('mv');
// };


// action1.addEventListener('mouseover', over01 ,false);
// action1.addEventListener('mouseout', out01 ,false);
// action2.addEventListener('mouseover', over02 ,false);
// action2.addEventListener('mouseout', out02 ,false);
// action3.addEventListener('mouseover', over03 ,false);
// action3.addEventListener('mouseout', out03 ,false);

var hoverItems = document.querySelectorAll('a.l-section--content--btn-link');
var actionItems = document.querySelectorAll('p.transf');

 for (let i = 0; i < hoverItems.length; i++) {
  var item = hoverItems.item(i);
  item.dataset.index = String(i);
   item.addEventListener ('mouseover', (event) => {
    actionItems.item(i).classList.add('mv');
   }, false);
   item.addEventListener ('mouseout', (event) => {
    actionItems.item(i).classList.remove('mv');
  }, false);
 }

    var $body = $('body');
    var $jsMenuChild = $('.side-menu-li');
    $jsMenuChild.on('click', function () {
    $(this).toggleClass('active');
    });

    $('#js_sideMenuBtn').on('click', function(){
     $body.toggleClass('side-open');
     $('#js_overlay').on('click', function(){
      $body.removeClass('side-open');
     });
    });

    $.pjax({
        area : '#content',
        link : 'a:not([target])',
        ajax: { timeout: 2500},
        wait: 1000
    });
    $(document).bind('pjax:fetch', function(){
        $('body').css('overflow', 'hidden');
        $('#content').addClass('pageOut');
    });
    $(document).bind('pjax:render', function(){
        $('#content').addClass('fadeIn');
        $('body').removeAttr('style');
        $('#content').animate({
            opacity: "1",
            left: "0",
            width: "100%"},
            500);
    });

$(window).scroll(function(){
    var scp = $(window).scrollTop();
    var sbb = $(".footer").offset().top;
    var windowheight = $( "body").height();
    var footerwindowtop = $(".footer").offset().top;
    var footerheight = $(".footer").height();
    if (scp > 200) {
      $("#top-btn").fadeIn();
    }else{
      $("#top-btn").fadeOut();
    }
    });
     $("#top-btn").click(function(){
      $("html,body").animate({
        scrollTop:0
        },1000);
        return false;
     });

}




