/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


$().ready(function(){
    // qui si mette tutto il codice JQuery e JS che avviene dopo il carimento del DOM

    // Validazione admin.posts.create
        $('#postsCreateForm').submit(function(event){
            $('#error-title').hide();
            $('#error-content').hide();

            if($('#title').val().length === 0){
                $('#error-title').show('slow').text('Il titolo è un campo obbligatorio').fadeOut(5000);
            }
            if($('#title').val().length < 3 && $('#title').val().length != 0){
                $('#error-title').show('slow').text('Devi inserire almeno 3 caratteri').fadeOut(5000);
            }
            if($('#title').val().length > 255 && $('#title').val().length != 0){
                $('#error-title').show('slow').text('Puoi inserire massimo 255 caratteri').fadeOut(5000);
            }


            if($('#content').val().length === 0){
                $('#error-content').show('slow').text('Il contenuto è un campo obbligatorio').fadeOut(5000);
            }
            if($('#content').val().length < 10 && $('#content').val().length != 0){
                $('#error-content').show('slow').text('Devi inserire almeno 10 caratteri').fadeOut(5000);
            }

            event.preventDefault();
        });
    //

    // Validazione admin.posts.edit
        $('#postsEditForm').submit(function(event){
            $('#error-title').hide();
            $('#error-content').hide();

            if($('#title').val().length === 0){
                $('#error-title').show('slow').text('Il titolo è un campo obbligatorio').fadeOut(5000);
            }
            if($('#title').val().length < 3 && $('#title').val().length != 0){
                $('#error-title').show('slow').text('Devi inserire almeno 3 caratteri').fadeOut(5000);
            }
            if($('#title').val().length > 255 && $('#title').val().length != 0){
                $('#error-title').show('slow').text('Puoi inserire massimo 255 caratteri').fadeOut(5000);
            }


            if($('#content').val().length === 0){
                $('#error-content').show('slow').text('Il contenuto è un campo obbligatorio').fadeOut(5000);
            }
            if($('#content').val().length < 10 && $('#content').val().length != 0){
                $('#error-content').show('slow').text('Devi inserire almeno 10 caratteri').fadeOut(5000);
            }

            event.preventDefault();
        });
    //
})
