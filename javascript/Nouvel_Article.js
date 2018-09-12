$(document).ready(function () {
    $('input#input_text, textarea#textarea2').characterCounter();
});

tinymce.init({
    selector: 'textarea',
    branding: false,
    file_browser_callback_types: 'image media'
});
