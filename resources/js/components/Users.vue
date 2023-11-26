<template>
    <div>
        <ul>
            <li v-for="example in examples" :key="example.id">
                {{ example.name }} - {{ example.description }}
            </li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            examples: []
        };
    },
    mounted() {
        axios.get('/api/examples')
            .then(response => {
                this.examples = response.data;
            })
            .catch(error => {
                console.log(error);
            });
    }
};
</script>

