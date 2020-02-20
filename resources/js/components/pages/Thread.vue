<script>
    import Replies from "../Replies";
    import SubscribeButton from '../SubscribeButton';
    export default {
        props: ['initialRepliesCount'],
        components: {Replies, SubscribeButton},
        data() {
            return {
                repliesCount: this.initialRepliesCount
            };
        }
    }
</script>
