import './bootstrap';
import 'bootstrap';
import Quill from 'quill';
import 'quill/dist/quill.snow.css';
import $ from 'jquery'
import toastr from 'toastr';
import 'toastr/build/toastr.min.css';
// import './sidebar'; 

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
        "timeOut": "3000",
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
    // Mostrar notificación de error si hay un mensaje de error en la sesión
    if (window.sessionError) {
        toastr.error(window.sessionError);
    }

    const quillEditor = document.getElementById('editor');
    if (quillEditor) {
        const quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                // toolbar: [
                //     [{ 'header': [1, 2, false] }],
                //     ['bold', 'italic', 'underline'],
                //     [{ 'color': [] }, { 'background': [] }], // Agregar opciones de color
                //     [{ 'list': 'ordered'}, { 'list': 'bullet' }]
                // ]
                toolbar: [
                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'color': [] }, { 'background': [] }],
                    [{ 'script': 'sub' }, { 'script': 'super' }],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    [{ 'indent': '-1' }, { 'indent': '+1' }],
                    [{ 'direction': 'rtl' }],
                    [{ 'align': [] }],
                    ['link', 'image', 'video'],
                    ['clean'] // remove formatting button
                ]
            }
        });


        // Validar formato de imagen
        quill.getModule('toolbar').addHandler('image', () => {
            selectLocalImage();
        });

        function selectLocalImage() {
            const input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/webp, image/jpeg');
            input.click();

            input.onchange = () => {
                const file = input.files[0];
                if (/^image\/(webp|jpeg)$/.test(file.type)) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        const range = quill.getSelection();
                        quill.insertEmbed(range.index, 'image', e.target.result);
                    };
                    reader.readAsDataURL(file);
                } else {
                    toastr.error('Solo se permiten imágenes en formato .webp o .jpeg');
                }
            };
        }

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



