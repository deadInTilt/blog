import './bootstrap';
import '@fortawesome/fontawesome-free/css/all.min.css';
import '@fortawesome/fontawesome-free/js/all.js';
import 'summernote/dist/summernote-lite.css';
import 'summernote/dist/summernote-lite.js';
import $ from 'jquery';  // Summernote требует jQuery

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
