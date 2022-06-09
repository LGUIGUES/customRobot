/* Variables */
let showRules;
let hideRules;
let modalRules;
let start;
let displayForm;
let changeInput;
let changeSelect;

let boxError;
let boxResult;

/* Functions */
function launchAnimation() {
   
    start = document.querySelector('#animationBox');
    start.classList.add('box-anim');

    if(screen.width >= 1024) {
        
        setTimeout(function(){
            displayForm = document.querySelector('.start-form-panel-control');            
            displayForm.style.transform = 'rotate(0deg)'; 
        },2000);        
    }
}

function hideError() {
    
    boxError = document.querySelector('.txt-error');
    boxError.classList.add('box-hide');
}

function toggleBoxRules() {

    modalRules = document.querySelector('#modalRules');
    modalRules.classList.toggle('box-hide');
}

/* Main - DomContentLoader */
document.addEventListener('DOMContentLoaded', function() {

    /* Search button for listen */
    showRules = document.getElementById('showRules');
    hideRules = document.getElementById('hideRules');
    start = document.getElementById('start');    
    changeInput = document.getElementById('textInput');
    changeSelect = document.getElementById('selectInput');
    
    /* Listen button for launch function */
    if(showRules) {
        showRules.addEventListener('click',toggleBoxRules);
    }

    if(hideRules) {
        hideRules.addEventListener('click',toggleBoxRules);
    }

    if(start) {
        start.addEventListener('click',launchAnimation);
    }

    if(changeInput) {
        changeInput.addEventListener('click',hideError); 
    }

    if(changeSelect) {
        changeSelect.addEventListener('change',hideError);
    }
      
});