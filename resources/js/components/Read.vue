<template>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/app.css">
    <table class="table table-hover table-info">

        <tbody>

        <tr v-for="country in countries">
            <th scope="row">{{country.id}}</th>
            <td>{{country.name}}</td>
            <td><button type="button" class="btn btn-warning"><a :href="'/update/' + country.id">Update</a></button></td>
            <td><button type="button" class="btn btn-danger"><a :href="'/delete/' + country.id">Delete</a></button></td>

        </tr>

        </tbody>
    </table>


</template>

<script>

import axios from 'axios';


export default {

    data() {
        return {
            countries: [],
        };
    },
    mounted() {
        axios.get('/api/countries')
            .then(response => {
                this.countries = response.data;
            })
            .catch(error => {
                console.log(error);
            });
    }
};


</script>

