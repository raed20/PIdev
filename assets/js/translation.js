// public/translate.js

var currentUtterance = null;

function googleTranslateElementInit() {
    new google.translate.TranslateElement({ autoDisplay: false }, 'google_translate_element');
}
