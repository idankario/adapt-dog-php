
// On load web page
$(()=> {
	formValidations()
});
  
// Submission notification to user
const constructValidation=(e,test)=>{
	if (test){
		if (!e.target.classList.contains('is-valid'))
			e.target.classList.add('is-valid');
			e.target.className = e.target.className.replace(
			/\bis-invalid\b/,
			'is-valid');
	}else{
		if (!e.target.classList.contains('is-invalid'))
			e.target.classList.add('is-invalid');
			e.target.className = e.target.className.replace(
			/\bis-valid\b/,
			'is-invalid');
	}
}
// Submission notification to user and check valid input
const formValidations = () => { 
	window.addEventListener('load',() => {   
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		let forms = document.getElementsByClassName('main-form');
		// Loop over them and prevent submission
		Array.prototype.filter.call(forms, (form) => {
		// Input Name one word or two word with one space
		form[0].onkeyup = (e) => {
			const regex = /^[a-zA-Z]+\s[a-zA-Z]+$/
			const regex2 = /^[a-zA-Z]+$/;
			let test=regex.test(e.target.value)||regex2.test(e.target.value)
			constructValidation(e,test);
		};
		/*Password should Minimum eight characters, at least one letter and one number:
		**/
		form[1].onkeyup = (e) => {
			const regex = /^[a-zA-Z]+\s[a-zA-Z]+$/
			const regex2 = /^[a-zA-Z]+$/;
			let test=regex.test(e.target.value)||regex2.test(e.target.value)
			constructValidation(e,test);
		};
		form.addEventListener('submit',(event) => {
			if (form.checkValidity() === false) {
				console.log('not valid form');
				event.preventDefault();
				event.stopPropagation();
			}
			form.classList.add('was-validated');
			},
			false);
		});
	  },
	);
  };
  