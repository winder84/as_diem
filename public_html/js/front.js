(function($)
{

	// Here is the entry point for your front javascript

})(jQuery);
$('.pCat').dialog({
	autoOpen: false,
	modal: true,
	closeOnEscape: true,
	title: "Выберите категорию"
});
$('.pCatBtn').click(function() {
	$( "#pCat_" + $(this).attr('pcatbtnid') ).dialog( "open" );
});

$('.header_categories_menu').hover(function(){
	$(this).children('p.mainCategoryTitle').hide(5, function() {
		$(this).parent('ul').children('.cats').show( "bounce", 100 );
	});
}, function(){
		$(this).children('.cats').hide(5, function() {
			$(this).parent('ul').children('p.mainCategoryTitle').show(5);
		} );
	}
);
