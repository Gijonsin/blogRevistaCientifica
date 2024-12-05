import './bootstrap';
import 'bootstrap';
import Quill from 'quill';
import 'quill/dist/quill.snow.css';

document.addEventListener('DOMContentLoaded', () => {
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


