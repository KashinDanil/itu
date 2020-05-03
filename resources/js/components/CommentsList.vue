<template>
    <div class="comments-list">
        <Loading v-if="loading"></Loading>
        <Comment
            :comment="comment"
            :key="comment.id"
            v-for="(comment, index) in comments"
            @comment-deleted="onCommentDelete(index)">
        </Comment>
        <CommentForm :action="postUrl" @comment-saved="loadComments"></CommentForm>
    </div>
</template>

<script>
    import axios from 'axios';
    import Comment from "./Comment";
    import Loading from "./Loading";
    import CommentForm from "./CommentForm";

    export default {
        name: 'CommentsList',
        props: ['load-url', 'post-url'],
        components: {
            Comment,
            Loading,
            CommentForm
        },
        data() {
            return {
                comments: [],
                loading: true,
            }
        },
        methods: {
            loadComments() {
                this.loading = true;
                axios.get(this.loadUrl)
                    .then(response => {
                        this.comments = response.data;
                        this.loading = false;
                    })
                    .catch(err => {
                        console.log(err);
                        this.loading = false;
                    });
            },
            onCommentDelete(index) {
                this.comments.splice(index, 1);
            }
        },
        created() {
            setTimeout(this.loadComments, 500);
        }
    }
</script>

<style scoped>

</style>
