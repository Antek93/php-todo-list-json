console.log('java is working fine');

const { createApp } = Vue;

createApp({
    data () {
        return {
            boolean_subjects: []
        };

    },
    methods: {

    },
    created() {
        axios
        .get('http://localhost/PHP-ToDo-List-JSON/api.php')
        .then((response) => {
            console.log(response);
            this.boolean_subjects = response.data
        });

    }

}).mount('#app')