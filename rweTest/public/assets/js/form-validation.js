let emailField = document.querySelector("#email");
let nameField = document.querySelector("#name");
let facebookField = document.querySelector("#facebook");
let instagramField = document.querySelector("#instagram");
let twitterField = document.querySelector("#twitter");
let linkedinField = document.querySelector("#linkedin");
let buttonField = document.querySelector("#submit");

const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
const facebookUrlRegex = /^(https?:\/\/)?(www\.)?facebook\.com\/[a-zA-Z0-9_\.]+\/?$/;
const twitterUrlRegex = /^(https?:\/\/)?(www\.)?twitter\.com\/[a-zA-Z0-9_]+\/?$/;
const instagramUrlRegex = /^(https?:\/\/)?(www\.)?instagram\.com\/[a-zA-Z0-9_]+\/?$/;
const linkedinUrlRegex = /^(https?:\/\/)?(www\.)?linkedin\.com\/in\/[a-zA-Z0-9_-]+\/?$/;

function enableSubmit()
{
    let isInputWithError = nameField.classList.contains('is-invalid') || emailField.classList.contains('is-invalid');
    let isInputEmpty = nameField.value == '' || emailField.value == '';

    if(!isInputWithError && !isInputEmpty) {
           buttonField.disabled = false
    } else {
        buttonField.disabled = true;
    }
}

emailField.addEventListener('change', (element) => {
    let isValid = emailRegex.test(element.target.value);
    let spanField = document.querySelector("#email-error");
    if (isValid === true) {
        spanField.style.display = 'none';
        emailField.classList.remove('is-invalid');
    } else {
        spanField.style.display = 'block';
        emailField.classList.add('is-invalid');
    }
    enableSubmit();
});

nameField.addEventListener('change', (element) => {
    let spanField = document.querySelector("#name-error")
    if (element.target.value.length > 3 || element.target.value == '') {
        spanField.style.display = 'none';
        nameField.classList.remove('is-invalid');
    } else {
        spanField.style.display = 'block';
        nameField.classList.add('is-invalid');
    }
    enableSubmit();
});

facebookField.addEventListener('change', (element) => {
    let isValid = facebookUrlRegex.test(element.target.value);
    let spanField = document.querySelector("#facebook-error");
    if (isValid === true || element.target.value == '') {
        spanField.style.display = 'none';
        facebookField.classList.remove('is-invalid');
    } else {
        spanField.style.display = 'block';
        facebookField.classList.add('is-invalid');
    }
});

instagramField.addEventListener('change', (element) => {
    let isValid = instagramUrlRegex.test(element.target.value);
    let spanField = document.querySelector("#instagram-error");
    if (isValid === true || element.target.value == '') {
        spanField.style.display = 'none';
        instagramField.classList.remove('is-invalid');
    } else {
        spanField.style.display = 'block';
        instagramField.classList.add('is-invalid');
    }
});

twitterField.addEventListener('change', (element) => {
    let isValid = twitterUrlRegex.test(element.target.value);
    let spanField = document.querySelector("#twitter-error");
    if (isValid === true || element.target.value == '') {
        spanField.style.display = 'none';
        twitterField.classList.remove('is-invalid');
    } else {
        spanField.style.display = 'block';
        twitterField.classList.add('is-invalid');
    }
});

linkedinField.addEventListener('change', (element) => {
    let isValid = linkedinUrlRegex.test(element.target.value);
    let spanField = document.querySelector("#linkedin-error");
    if (isValid === true || element.target.value == '') {
        spanField.style.display = 'none';
        linkedinField.classList.remove('is-invalid');
    } else {
        spanField.style.display = 'block';
        linkedinField.classList.add('is-invalid');
    }
});

