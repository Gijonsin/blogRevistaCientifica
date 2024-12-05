import './bootstrap';
import 'bootstrap';
import Quill from 'quill';
import 'quill/dist/quill.snow.css';
import $ from 'jquery'
import toastr from 'toastr'; 
import 'toastr/build/toastr.min.css';

// document.addEventListener('DOMContentLoaded', () => {
//     const quillEditor = document.getElementById('editor');
//     if (quillEditor) {
//         const quill = new Quill('#editor', {
//             theme: 'snow',
//             modules: {
//                 toolbar: [
//                     [{ 'header': [1, 2, false] }],
//                     ['bold', 'italic', 'underline'],
//                     ['link', 'image'],
//                     [{ 'list': 'ordered'}, { 'list': 'bullet' }]
//                 ]
//             }
//         });

//         // Sincronizar contenido con el input oculto al enviar el formulario
//         const contenidoInput = document.getElementById('contenido');
//         const form = document.getElementById('avisoForm');

//         if (form) {
//             form.onsubmit = () => {
//                 contenidoInput.value = quill.root.innerHTML;
//             };
//         }
//     }
// });

document.addEventListener('DOMContentLoaded', () => {
    // Configuración de Toastr
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    // Ejemplo de notificación para verificar que toastr está funcionando
    if (window.sessionMessage) {
        toastr.success(window.sessionMessage);
    }

    const quillEditor = document.getElementById('editor');
    if (quillEditor) {
        const quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{ 'header': [1, 2, false] }],
                    ['bold', 'italic', 'underline'],
                    ['link', 'image'],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }]
                ]
            }
        });

        // Sincronizar contenido con el input oculto al enviar el formulario
        const contenidoInput = document.getElementById('contenido');
        const form = document.getElementById('avisoForm');

        if (form) {
            form.onsubmit = () => {
                contenidoInput.value = quill.root.innerHTML;
            };
        }
    }
});



