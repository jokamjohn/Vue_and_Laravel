/**
 * Created by jokamjohn on 4/24/2016.
 */


Vue.component('tasks', {

    template: '#tasks-template',

    props: ['list'],

    //Decoding Json passed to the list
    created() {
        this.list = JSON.parse(this.list);
    }

});

new Vue({

    el: '#app'

});
