$(function(){
  $('.about-list-item').on('click', function(){
    let index = $('.about-list-item').index(this);

    $('.about-list-item').removeClass('is-btn-active');
    $(this).addClass('is-btn-active');
    $('.about-contents').removeClass('is-contents-active');
    $('.about-contents').eq(index).addClass('is-contents-active');
  });
}); 