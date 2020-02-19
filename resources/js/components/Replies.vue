<template>
    <div>
        <div v-for="(reply, index) in items" :key="reply.id">
            <reply :data="reply" @deleted="remove(index)"/>
        </div>
        <paginator :dataSet="dataSet" @changed="fetch"/>
        <new-reply @created="add"/>
    </div>
</template>

<script>
    import Reply from './Reply.vue';
    import NewReply from './NewReply.vue';
    import collection from './mixins/collection';
    import axios from 'axios'
    export default {
        props: ['data'],
        mixins: [collection],
        components: { Reply, NewReply },
        data() {
            return { dataSet: false };
        },
        created() {
            this.fetch();
        },
        methods: {
            fetch(page) {
                axios.get(this.url(page)).then(this.refresh);
            },
            url(page) {
                if (! page) {
                    let query = location.search.match(/page=(\d+)/);
                    page = query ? query[1] : 1;
                }
                return `${location.pathname}/replies?page=${page}`;
            },
            add(reply) {
                this.items.push(reply);
                this.$emit('added');
            },
            refresh({data}) {
                this.dataSet = data;
                this.items = data.data;
                window.scrollTo(0, 0);
            }
        }
    }
</script>
