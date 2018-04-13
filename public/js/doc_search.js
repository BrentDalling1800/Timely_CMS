class doc_search {
	constructor() {
		this.search_input = $("#doc_search");
	}

	start(){
		console.log("Doc Search Module Started");

		this.search_input.keyup(this, function(e){
			$('.doc_items').hide();
			$('.doc_items:contains('+e.data.search_input.val()+')').show();
		});
	}
}