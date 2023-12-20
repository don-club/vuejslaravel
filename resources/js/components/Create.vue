<script>
import axios from 'axios';

export default {
    data () {
        return {
            countryName: null
        }
    },
    methods: {
        save () {
            const params = { countryName: this.countryName };
            axios.post('/api/create/', { countryName: this.countryName })
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="form-control">
        <label for="country">Country name</label>
        <input v-model="countryName" type="text" name="country" placeholder="type country name..." id="country" class="form-control">
        <button class="form-control" @click="save">Create</button>
    </div>
</template>

<style scoped>

</style>
