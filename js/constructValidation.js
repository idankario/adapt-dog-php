const dateL =  document.querySelector('[name=Date]');
const timeL =  document.querySelector('[name=Time]');
// On load web page
$(()=> {
	formValidations()
});

// Submission notification to user
const constructValidation=(e,test)=>{
	if (test){
		if (!e.classList.contains('is-valid'))
			e.classList.add('is-valid');
			e.className = e.className.replace(
			/\bis-invalid\b/,
			'is-valid');
	}else{
		if (!e.classList.contains('is-invalid'))
			e.classList.add('is-invalid');
			e.className = e.className.replace(
			/\bis-valid\b/,
			'is-invalid');
	}
}
const constructpass= (e) => { 
	 //Password should Minimum eight characters, at least one letter and one number:
	var RegPass =/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
	let test=RegPass.test(e.value)
	constructValidation(e,test);
}

const constructStr= (e) => { 
	const regex = /^[a-zA-Z]+\s[a-zA-Z]+$/
	const regex2 = /^[a-zA-Z]+$/;
	let test=regex.test(e.value)||regex2.test(e.value)
	constructValidation(e,test);
}

const constructDate= (e) => { 
	var RegDate =/^\d{2}-\d{2}-\d{4}$/;
	let test=RegDate.test(e.value)
	constructValidation(e,test);
}
const constructTime= (e) => { 
	var RegTime = /^(0[8-9]|1[0-9]|2[0]):[0-5][0-9]|21:00$/;
	let test=RegTime.test(e.value)
	constructValidation(e,test);
}
// Submission notification to user and check valid input
const formValidations = () => { 
	window.addEventListener('load',() => {   
		// Fetch all the input we want to apply custom Bootstrap validation styles to
		let forms = document.getElementsByClassName('main-form');
		//length of all input we need to check in regex
		length=2
		if ($(".form-meeting")[0]) {
			const dateL =  document.querySelector('[name=Date]');
			const timeL =  document.querySelector('[name=Time]');
			if(dateL.value){
				constructDate(dateL)
				constructTime(timeL)
			}
			dateL.onchange = (e) => {
				constructDate(e.target)
			};
			timeL.onchange = (e) => {
				constructTime(e.target)
			};
		}else if($(".form-pet")[0]){
			const dog_name =  document.querySelector('[name=dog_name]');
			const dog_type =  document.querySelector('[name=dog_type]');
			if(dog_name.value){
				constructStr(dog_name)
				constructStr(dog_type)
			}
			dog_name.onchange = (e) => {
				constructStr(e.target)
			};
			dog_type.onchange = (e) => {
				constructStr(e.target)
			};
		} 
		else if($(".sign-up")[0]) {
			const username =  document.querySelector('[name=username]');
			const Password =  document.querySelector('[name=password]');
			username.onchange = (e) => {
				constructStr(e.target)
			};
			Password.onchange = (e) => {
				constructpass(e.target)
			};
		}
		$('form').submit(function(e) {
			if(($('.is-valid').length)<length) {
				e.preventDefault();
				e.stopPropagation();
			}
		});
		// else{
		// 		// Loop over them and prevent submission
		// 		Array.prototype.filter.call(forms, (form) => {
		// 			// Input Name one word or two word with one space
		// 			form[0].onkeyup = (e) => {
		// 				const regex = /^[0-9]{2}-[0-9}(2}-20[0-9]{2}$/
		// 				let test=regex.test(e.target.value)
		// 				constructValidation(e,test);
		// 			};
		// 			/*Password should Minimum eight characters, at least one letter and one number:
		// 			**/
		// 			form[1].onkeyup = (e) => {
		// 				const regex = /^[a-zA-Z]+\s[a-zA-Z]+$/
		// 				const regex2 = /^[a-zA-Z]+$/;
		// 				let test=regex.test(e.target.value)||regex2.test(e.target.value)
		// 				constructValidation(e,test);
		// 			};


	// 		});	
	// }

	  },
	);
  };
  
const mainformsfsf = () => { 

	
	dateL.onchange = (e) => {
		constructDate(e.target)
	};
	timeL.onchange = (e) => {
		constructTime(e.target)
	};

		// // Loop over them and prevent submission
		// Array.prototype.filter.call(forms, (form) => {
		// /*Password should Minimum eight characters, at least one letter and one number:
		// **/
		// console.log(form[0])
		// form[0].onkeyup = (e) => {
		// 	const regex = /^((1[0-2]|0?[1-9]):([0-5][0-9]) ([AaPp][Mm]))$/
		// 	console.log(regex)
		// 	let test=regex.test(e.target.value)
		// 	console.log(test)
		// 	constructValidation(e,test);
		// };
		// // Input date in format dd-mm-yyyy
		// form[1].onkeyup = (e) => {
		// 	const regex =  /^\d{2}-\d{2}-\d{4}$/
				
		// 	let test=regex.test(e.target.value)
			
		// 	constructValidation(e,test);
		// };
		// });
}