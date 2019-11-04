$(document).scroll(function () {
  var $nav = $(".fixed-top");
  $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
});

function scrollToAnchor(aid) {
  var aTag = $("div[id='"+ aid +"']");
  $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

$("#sks_link").click(function() {
   scrollToAnchor('sks');
});

$("#about_link").click(function() {
   scrollToAnchor('about');
});

$("#elearning_link").click(function() {
   scrollToAnchor('elearning');
});

$("#video_link").click(function() {
   scrollToAnchor('video');
});

// $("#elearn_sec_link").click(function() {
//    scrollToAnchor('elearning');
// });
//
// $("#video_sec_link").click(function() {
//    scrollToAnchor('video');
// });

function scrollupToAnchor(aid){
  var aTag = $("div[id='"+ aid +"']");
  $('html,body').animate({scrollTop: 0},'slow');
}

$("#to_top_link").click(function() {
   scrollupToAnchor('hero-section');
});
