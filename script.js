console.log('java is working fine');

const { createApp } = Vue;

createApp({
    data () {
        return {
            message: 'I am working'
        };

    },
    methods: {

    },
    created() {
        console.log(axios);
    }

}).mount('#app')