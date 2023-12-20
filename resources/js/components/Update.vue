<script>
import axios from 'axios';

export default {
    props: ['countryId'],
    data () {
        return {
            countryName: null
        }
    },
    methods: {
        save () {
            axios.patch('/api/update/' + this.countryId, { countryName: this.countryName })
                .then(response => {
                    console.log('response')
                    console.log(response)
                    window.location.href = '/'
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
}
</script>

<template>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <input v-model="countryName" type="text" name="change" placeholder="Update" id="change" class="form-control">
    <button class="form-control" @click="save">Save and exit</button>
    <h1>{{countryId}}</h1>
</template>


<style scoped>

</style>
