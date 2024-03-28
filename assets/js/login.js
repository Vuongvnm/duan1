const signUpBtnLink = document.querySelector('.signUpBtn-link');
const signInBtnLink = document.querySelector('.signInBtn-link');
const changePassBtnLink = document.querySelector('.changePassBtn-link');
const signin = document.querySelector('.sign-in');
const forget = document.querySelector('.forget-pass');
const signup = document.querySelector('.sign-up');

function addClass(name, element) {
  var classesString;
  classesString = element.className || "";
  if (classesString.indexOf(name) === -1) {
    element.className += " " + name;
  }
}

function removeClass(name, element) {
  var classesString;
  classesString = element.className || "";
  if (classesString.indexOf(name) === -1) {
    element.remove(name);
  }
}
signUpBtnLink.addEventListener('click', () => {
  addClass('bayvao', signup);
  signup.classList.remove('d-none');
  signup.classList.remove('bayra');
  addClass('bayra', signin);
  signin.classList.remove('bayvao');
  addClass('d-none', signin);
  addClass('bayra', forget);
  forget.classList.remove('bayvao');
  addClass('d-none', forget);

});

signInBtnLink.addEventListener('click', () => {
  signup.classList.remove('bayvao');
  addClass('bayra', signup);
  addClass('d-none', signup);
  forget.classList.remove('bayvao');
  addClass('bayra', forget);
  addClass('d-none', forget);
  signin.classList.remove('d-none');
  signin.classList.remove('bayra');
  addClass('bayvao', signin);
  
});

changePassBtnLink.addEventListener('click', () => {
  signup.classList.remove('bayvao');
  addClass('bayra', signup);
  addClass('d-none', signup);
  signin.classList.remove('bayvao');
  addClass('bayra', signin);
  addClass('d-none', signin);
  forget.classList.remove('d-none');
  forget.classList.remove('bayra');
  addClass('bayvao', forget);
  
});