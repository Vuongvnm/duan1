const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

// check if the outdent is open or not
if(bar) {
  bar.addEventListener('click', () => {
    nav.classList.add('active');
  })
}


// if anyone click on close icon (X), then the menu bar is close
if(close) {
  close.addEventListener('click', () => {
    nav.classList.remove('active');
  })
}