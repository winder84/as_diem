(function($)
{

	// Here is the entry point for your front javascript

})(jQuery);
var noBots = false;
contactForm = $('.feedback_form');
contactForm.validate({
	rules: {
		"contact_form[name]": {
			required: true,
			minlength: 3
		},
		"contact_form[email]": {
			required: true,
			email: true
		},
		"contact_form[phone]": {
			required: true,
			minlength: 3,
			number: true
		}
	},
	messages: {
		"contact_form[name]": {
			required: 'Пожалуйста заполните поле!',
			minlength: 'Минимальная длина поля - 3 символа'
		},
		"contact_form[email]": {
			required: 'Пожалуйста заполните поле!',
			email: "Формат: name@domain.com"
		},
		"contact_form[phone]": {
			required: 'Пожалуйста заполните поле!',
			minlength: 'Минимальная длина поля - 3 символа',
			number: 'Телефон должен состоять из цифр'
		}
	}
});

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
				if(contactForm.valid()) {
					$.post('/capcha/recapcha.verify.php',
						{ recaptcha_challenge_field: Recaptcha.get_challenge(), recaptcha_response_field: Recaptcha.get_response() },
						function (data) {
							if (data == 'recapcha_success') {
								noBots = true;
								alert("Спасибо! ");
								contactForm.submit();
							} else {
								alert("Пожалуйста, введите правильный проверочный код!");
								Recaptcha.reload();
							}
						}
					);
				}
			}
		}
	]
});

contactForm.on('submit', function() {
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