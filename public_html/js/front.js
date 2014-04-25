(function($)
{

	// Here is the entry point for your front javascript

})(jQuery);

$('.pCat').dialog({
	position: { my: "center", at: "top", of: window },
	draggable: false,
	width: 700,
	minHeight: 200,
	resizable: false,
	autoOpen: false,
	modal: true,
	closeOnEscape: true,
	title: "Выберите подкатегорию"
});

$('.contactForm').dialog({
	position: { my: "center", at: "top", of: window },
	draggable: false,
	width: 700,
	minHeight: 200,
	resizable: false,
	autoOpen: false,
	modal: true,
	closeOnEscape: true,
	title: "Оставьте свои контакты и мы с Вами свяжемся",
	buttons: [
		{
			text: "Отправить",
			click: function() {
				var toSend = true;
				if (!$('input[name="contact_form[name]"]').val()) {
					toSend = false;
				}
				if (!$('input[name="contact_form[email]"]').val()) {
					toSend = false;
				}
				if (!$('input[name="contact_form[phone]"]').val()) {
					toSend = false;
				}
				if (toSend) {
					$('.contact_form').submit();
				} else {
					alert('Пожалуйста, заполните обязательные поля!');
				}
			}
		}
	]
});

$('.pCatBtn').click(function() {
	$( "#pCat_" + $(this).attr('pcatbtnid') ).dialog( "open" );
});

$('#callback_form_button').click(function() {
		$(".contactForm").dialog( "open" );
});

$('.header_categories_menu').on('click', function(){
		$(this).children('.mainCategoryTitle').toggle(50);
		$(this).children('.cats').toggle( "slide", 200 );
	}
);

