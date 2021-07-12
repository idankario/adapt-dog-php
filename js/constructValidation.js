const dateL =  document.querySelector('[name=Date]');
const timeL =  document.querySelector('[name=Time]');
// On load web page
$(()=> {
	formValidations()
});

// Submission notification to user using bootsrap
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
	//Password should Minimum eight characters, at least one letter and one number
	var RegPass =/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
	let test=RegPass.test(e.value)
	constructValidation(e,test);
}

const constructStr= (e) => { 
	//str need to be with one or two word with one space between
	const regex = /^[a-zA-Z]+\s[a-zA-Z]+$/
	const regex2 = /^[a-zA-Z]+$/;
	let test=regex.test(e.value)||regex2.test(e.value)
	constructValidation(e,test);
}

const constructDate= (e) => { 
	//Date need to be with this format dd-mm-yy
	var RegDate =/^\d{2}-\d{2}-\d{4}$/;
	let test=RegDate.test(e.value)
	constructValidation(e,test);
}
const constructTime= (e) => { 
	//Time need to be at 08:00 to 21:00
	var RegTime = /^(0[8-9]|1[0-9]|2[0]):[0-5][0-9]|21:00$/;
	let test=RegTime.test(e.value)
	constructValidation(e,test);
}
// Submission notification to user and check valid input
const formValidations = () => { 
	window.addEventListener('load',() => {   
		//length of all input we need to check in regex
		length=2
		if($(".sign-in")[0]) {
			return;
		}
		else if ($(".form-meeting")[0]) {
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
}