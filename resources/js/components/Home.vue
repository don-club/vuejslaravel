<template>
    <nav class="navbar navbar-dark bg-dark">
        <button type="button" class="btn btn-success sticky-top"><a href="/create_page">Create</a></button>
    </nav>
<read></read>

</template>

<script>

import axios from 'axios';
import Update from './Update.vue'
import Create from './Create.vue'
import Read from './Read.vue'

export default {

    data() {
        return {

        };
    },
    components: {
        Update,
        Create,
        Read,
    },
};


</script>

