(function($)
{

	// Here is the entry point for your front javascript

})(jQuery);
$('.pCat').dialog({
	width: 700,
	minHeight: 200,
	resizable: false,
	autoOpen: false,
	modal: true,
	closeOnEscape: true,
	title: "Выберите категорию"
});
$('.pCatBtn').click(function() {
	$( "#pCat_" + $(this).attr('pcatbtnid') ).dialog( "open" );
});

$('.header_categories_menu').on('click', function(){
	$(this).children('.mainCategoryTitle').toggle(5);
	$(this).children('.cats').toggle( "slide", 200 );
}
);
