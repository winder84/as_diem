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