
// On load web page
$(()=> {
		createPetsAndFilter()
		createFilter()	
});
// Create Product And Filter
const createPetsAndFilter=()=> {
	let genders = "",
		ages = "",
		sizes = "",
		types = "";
	$("#products a").each(function(){
		let gender = $(this).data("gender"),	
			age = $(this).data("age"),
			size = $(this).data("size"),
			type = $(this).data("type");
		//create dropdown of genders
		if (genders.indexOf("<option value='" + gender + "'>" + gender + "</option>") == -1) {
			genders += "<option value='" + gender + "'>" + gender + "</option>";
		}
		//create dropdown of genders
		if (ages.indexOf("<option value='" + age + "'>" + age + "</option>") == -1) {
			ages += "<option value='" + age + "'>" + age + "</option>";
		}
		//create dropdown of genders
		if (sizes.indexOf("<option value='" + size + "'>" + size + "</option>") == -1) {
			sizes += "<option value='" + size + "'>" + size + "</option>";
		}
		//create dropdown of types
		if (types.indexOf("<option value='" + type + "'>" + type + "</option>") == -1) {
			types += "<option value='" + type + "'>" + type + "</option>";
		}
	});
	//Add list of option to filter
	$(".filter-gender").append(genders);
	$(".filter-age").append(ages);
	$(".filter-size").append(sizes);
	$(".filter-type").append(types);
}

	//On button search click its filter data
const createFilter=()=> {
	//on search form submitt
	$("#search-form").submit((e)=>{
		e.preventDefault();
		let query = $("#search-form input").val().toLowerCase();
		$("#products a").hide();
		$("#products a").each(function() {
			let gender = $(this).data("gender").toLowerCase(),
				age = $(this).data("age").toLowerCase(),
				type = $(this).data("type").toLowerCase();
				size = $(this).data("size").toLowerCase();
			if (gender.indexOf(query) > -1 || type.indexOf(query) > -1  ||age.indexOf(query) > -1  || size.indexOf(query) > -1) {
				$(this).show();
			}
		});
	});
	//on filter change
	let filtersObject = {};
	$(".filter").on("change",function(){
		
		let filterName = $(this).data("filter"),
			filterVal = $(this).val();
		if (filterVal == "") {
			delete filtersObject[filterName];
		} else {
			filtersObject[filterName] = filterVal;
		}	
		let filters = ""
		for (let key in filtersObject) {
			if (filtersObject.hasOwnProperty(key)) {
				filters += "[data-"+key+"='"+filtersObject[key]+"']"
			}
		}
		if (filters == "") {
			$("#products a").show()
		} else {
			$("#products a").hide()
			$("#products a").hide().filter(filters).show()
		}
	});
}