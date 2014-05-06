(function($)
{

	// Here is the entry point for your front javascript

})(jQuery);
var noBots = false;
Recaptcha.create("6LfBEfMSAAAAAKnF39Io9RKQ_LIo90ulFTtCcM16",
	"my_recapcha",
	{
		lang : 'ru',
		theme: "red",
		callback: Recaptcha.focus_response_field
	}
);

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
				if (!$('#recaptcha_response_field').val()) {
					toSend = false;
				}
				if (toSend) {
					$.post('/capcha/recapcha.verify.php',
						{ recaptcha_challenge_field: Recaptcha.get_challenge(), recaptcha_response_field: Recaptcha.get_response() },
						function (data) {
							if (data == 'recapcha_success') {
								noBots = true;
								alert("Спасибо! С Вами свяжется наш менеджер!");
								$('.contact_form').submit();
							} else {
								alert("Пожалуйста, введите правильный проверочный код!");
								Recaptcha.reload();
							}
						});
				} else {
					alert('Пожалуйста, заполните обязательные поля!');
				}
			}
		}
	]
});

$('.contact_form').on('submit', function() {
	if(noBots) {
		return true;
	} else {
		return false;
	}
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