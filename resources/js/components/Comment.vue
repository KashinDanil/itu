<template>
    <article class="message is-info" :class="{ 'is-loading': deleting }">
        <div class="message-header">
            <p>{{ comment.author }}</p>
            <span>
                <time>{{ comment.date }}</time>
                <button class="delete" @click.prevent="deleteComment(comment.id)"></button>
            </span>
        </div>
        <div class="message-body" v-html="comment.text"></div>
    </article>
</template>

<script>
    import axios from 'axios';
    
    export default {
        name: "Comment",
        props: ["comment"],
        data() {
            return {
                deleting: false
            }
        },
        methods: {
            deleteComment(id) {
                this.deleting = true;
                axios.delete(`/comments/${id}`)
                    .then(response => {
                        this.deleting = false;
                        this.$emit('comment-deleted', id);
                        $("article").removeClass("is-loading");
                    })
                    .catch(err => {
                        console.log(err);
                        this.deleting = false;
                        $("article").removeClass("is-loading");
                    });
            }
        }
    }
</script>

<style scoped>
    .delete {
        margin-left: 20px;
    }

    .is-loading {
        opacity: 0.5;
        cursor: progress;
    }
</style>
