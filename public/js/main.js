/**
 * Created by jokamjohn on 4/24/2016.
 */


Vue.component('tasks', {

    template: '#tasks-template',

    data: function () {
        return {
            list: []
        };
    },

    //Get json data using jquery
    created() {
        this.fetchTasksList()
    },

    methods: {

        fetchTasksList: function () {
            $.getJSON('api/tasks', function (tasks) {
                this.list = tasks
            }.bind(this));
        },

        deleteTask: function (task) {
            this.list.$remove(task);
        }
    }

});

new Vue({

    el: '#app'

});
