console.log('java is working fine');

const { createApp } = Vue;

createApp({
    data() {
        return {
            boolean_subjects: [],
            newSubject: '',
        };

    },
    methods: {
        cross(element) {
            element.done = !element.done

        }

    },
    created() {
        axios
            .get('./api.php')
            .then((response) => {
                console.log(response);
                this.boolean_subjects = response.data
            });
        // axios.post('')

    },
    computed: {

    }

}).mount('#app')