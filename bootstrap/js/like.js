$(function() {
  $('.like, .dislike').click(function() {
    event.preventDefault();
    $('.active').removeClass('active');
    $(this).effect("bounce", {
      times: 4
    }, 1000);
    $(this).addClass('active');
  });
})
