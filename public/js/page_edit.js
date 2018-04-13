class jumbotron_edit {
	constructor() {
		console.log("Page Edit Module Loaded");
		this.page = page;
		console.log("Editing Page : " + this.page);
		window.title = $("#jumbo_title");
		window.sub = $("#jumbo_sub");
		window.background = $("#background_image");
		window.color = $("#text_color");
		window.position = $("#background_position");
		this.submit = $("#jumbo_submit");
		window.token = $('[name="ElementNameHere"]');
		window.button_0_text = $("#jumbo_button_text_0");
		window.button_1_text = $("#jumbo_button_text_1");
		window.button_0_url = $("#jumbo_button_url_0");
		window.button_1_url = $("#jumbo_button_url_1");
		window.button_0_css = $("#jumbo_button_css_0");
		window.button_1_css = $("#jumbo_button_css_1");
		this.button_submit = $("#buttons_submit");
	}

	start(){

		this.button_submit.click(this, function (e) {
			console.log("button Submit Clicked.val()");
			$.ajax({
                type: 'POST',
                url: base_url + "/page_tool/submit_jumbo_buttons",
               headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
                dataType: 'json',
                data: {
                	'page': self.page,
                	'button_0': {
                		'text': window.button_0_text.val(),
                		'url' : window.button_0_url.val(),
                		'css' : window.button_0_css.val()
                	},
                	'button_1': {
                		'text': window.button_1_text.val(),
                		'url' : window.button_1_url.val(),
                		'css' : window.button_1_css.val()
                	}
                },
                success: function(data) {

                	$("#collapseExample").collapse('hide');
                }
            })
		});


		this.submit.click(this, function (e){
			self = e.data;
				console.log("Form Submit");
			$.ajax({
                type: 'POST',
                url: base_url + "/page_tool/submit_jumbo",
               headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
                dataType: 'json',
                data: {
                	'page': self.page,
                	'title': window.title.val(),
		           	'sub': window.sub.val(),
                	'background': window.background.val(),
                	'color': window.color.val(),
                	'position': window.position.val()
                },
                success: function(data) {
                	console.log(data);
                	console.log(window.title);
                	$("#jumbotron_title").html(data.title);
                	$("#jumbotron_sub").html(data.sub);

                	window.location.reload();
                }
            })
		});
	}
}