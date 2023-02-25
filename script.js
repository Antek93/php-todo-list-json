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
            axios.post('./create.php', {
                newSubject: this.userSubject,


            }, {
                headers: { //il valore $_POST si trasmette solo tramite form - per ovviare, dichiariamo con axios questo header come content type form
                    'Content-Type': 'multipart/form-data'
                }
            },
            ).then((response) => {
                console.log(response)
                this.boolean_subjects.push({
                    subject: this.userSubject
                })

                this.userSubject = '';
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