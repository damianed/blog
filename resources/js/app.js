require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

var simplemde = new SimpleMDE({ element: document.getElementById('body') });

