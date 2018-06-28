var VueFormGenerator = window.VueFormGenerator;

var vm = new Vue({
	el: "#app",
	components: {
		"vue-form-generator": VueFormGenerator.component
	},

	methods: {
		prettyJSON: function (json) {
			if (json) {
				json = JSON.stringify(json, undefined, 4);
				json = json.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;");
				return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function (match) {
					var cls = "number";
					if (/^"/.test(match)) {
						if (/:$/.test(match)) {
							cls = "key";
						} else {
							cls = "string";
						}
					} else if (/true|false/.test(match)) {
						cls = "boolean";
					} else if (/null/.test(match)) {
						cls = "null";
					}
					return "<span class=\"" + cls + "\">" + match + "</span>";
				});
			}
		},
		test: function(){
			alert('dfsf')
		}
	},

	data: {
		model: {
			id: 1,
			name: "tzur b",
			password: "J0hnD03!x4",
			skills: "Javascript",
			email: "john.doe@gmail.com",
			status: true
		},
		schema: {
			fields: [
				{
					type: "input",
					inputType: "text",
					label: "שם הספק",
					model: "supplier_name",
					inputName: "fields[supplier_name]",
					readonly: false,
					featured: true,
					required: true,
					disabled: false,
					validator: VueFormGenerator.validators.string
				},
				{
					type: "submit",
					label: "",
					buttonText: "שלח",
					onSubmit: function(){
						event.preventDefault();

						var $searchForm = $('#form-projects');
					    console.log($searchForm.serialize())	
					    $.get(
					        $searchForm.attr('action'),
					        $searchForm.serialize(),

					        function(data) {
					        	console.log('data',data)
					        }
					    );



						// var r = this.$http.post('http://digital-israel.org/wp-json/acf/v3/posts/18', data, {
						//    headers: {
						//        'Content-Type': 'multipart/form-data'
						//    }
						// });
						// alert(r)

					}	,
					validateBeforeSubmit: false
				}

			]
		},

		formOptions: {
			validateAfterLoad: false,
			validateAfterChanged: false
		}
	}
});