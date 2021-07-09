const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container1");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
  $('.sign-in').toggleClass('invisible d-none')
  $('.sign-up').toggleClass('invisible d-none')
  $('.left-panel').toggleClass('invisible')
  $('.right-panel').toggleClass('invisible')
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
  $('.sign-in').toggleClass('invisible d-none')
  $('.sign-up').toggleClass('invisible d-none')
  $('.left-panel').toggleClass('invisible')
  $('.right-panel').toggleClass('invisible')
});


