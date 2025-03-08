import './bootstrap';
import '@fortawesome/fontawesome-free/css/all.min.css';
import '@fortawesome/fontawesome-free/js/all.js';
import 'summernote/dist/summernote-lite.css';
import 'summernote/dist/summernote-lite.js';
import $ from 'jquery';
import 'select2/dist/css/select2.min.css';
import 'select2/dist/js/select2.min.js';

window.$ = $;

document.addEventListener("DOMContentLoaded", function() {
    $('#summernote').summernote({
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
        ],
    });
});

$(window).on('load', function() {
    $('.select2').select2({
        placeholder: "Выберите значения",
        allowClear: true
    });
});
