<template>

</template>

<script>
    import axios from 'axios'
    export default {
        props: ['attributes'],
        name:'Reply',
        data() {
            return {
                editing: false,
                body: this.attributes.body
            };
        },
        methods: {
            update() {
                axios.patch('/replies/' + this.attributes.id, {
                    body: this.body
                });
                this.editing = false;
                flash('Updated!');
            }
        }
    }
</script>

<style scoped>

</style>
