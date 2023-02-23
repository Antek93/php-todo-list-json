console.log('java is working fine');

const { createApp } = Vue;

createApp({
    data() {
        return {
            boolean_subjects: [],
            userSubject: '',
        };

    },
    methods: {
        cross(element) {
            element.done = !element.done

        },
        addSubject() {
            axios.post('api.php', {
                newSubject: this.userSubject,
                

            }, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
            ).then((response) => {
                console.log(response)
                
            }
            )
        }

    },
    created() {
        axios
            .get('./api.php')
            .then((response) => {
                console.log(response);
                this.boolean_subjects = response.data
            });

    },
    computed: {

    }

}).mount('#app')