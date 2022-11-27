
// directions_in id end
$('.contacts__map .contacts__map__item').hide();
$('.contacts__map .contacts__map__item:first').show();
$('.contacts__menu__item a:first').addClass('contacts__map__activemax');

// Change tab class and display content
$('.contacts__menu__item a').on('click', function(event){
  event.preventDefault();
  $('.contacts__menu__item li').removeClass('contacts__map__activemax');
  $(this).parent().addClass('contacts__map__activemax');
  $('.contacts__map .contacts__map__item').hide();
  $($(this).attr('data-list')).show();
});


// ------------------------------------------------------------------


// directions_in id end
$('.contacts__map__contacts .contacts__map__contacts__item').hide();
$('.contacts__map__contacts .contacts__map__contacts__item:first').show();
$('.contacts__menu__list li:first').addClass('contacts__map__active');

// Change tab class and display content
$('.contacts__menu__list li').on('click', function(event){
  event.preventDefault();
  $('.contacts__menu__item li').removeClass('contacts__map__contacts__active');
  $(this).parent().addClass('contacts__map__contacts__active');
  $('.contacts__map__contacts .contacts__map__contacts__item').hide();
  $($(this).attr('data-item')).show();
});

// ------------------------------------------------------------------


$(document).ready(function(){
  $('.contacts__menu__list li').click(function(){
    $('.header__item').fadeTo(500, 1)
    $('.contacts__map__contacts .contacts__map__contacts__item').css('z-index','10').css('opacity','1').css('bottom','0')
  })
});

$(document).ready(function(){
  $('.contacts__map__contacts__none').click(function(){
    $('.header__item').fadeTo(500, 1)
    $('.contacts__map__contacts .contacts__map__contacts__item').css('z-index','-10').css('opacity','0').css('bottom','-100%')
  })
});

$(document).ready(function(){
  $('.menu_none').click(function(){
    $('.header__item').fadeTo(500, 1)
    $('.contacts__map__contacts .contacts__map__contacts__item').css('z-index','-10').css('opacity','0').css('bottom','-100%')
  })
});