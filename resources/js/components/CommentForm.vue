<template>
    <form method="post" :action="action" @submit.prevent="saveComment">
        <div class="notification is-success" v-if="success">
            <a class="delete" @click.prevent="hideSuccess"></a>
            {{ success }}
        </div>
        <div class="notification is-danger" v-if="error">
            <a class="delete" @click.prevent="hideError"></a>
            {{ error }}
        </div>
        <div class="field">
            <label class="label">Message</label>
            <div class="control">
                <textarea class="textarea" name="message" v-model="message" placeholder="Type your comments here" required></textarea>
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link">Submit</button>
            </div>
            <div class="control">
                <button class="button is-link is-light">Cancel</button>
            </div>
        </div>
    </form>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "CommentForm",
        props: ["action"],
        data() {
            return {
                message: "",
                success: "",
                error: ""
            }
        },
        methods: {
            saveComment() {
                this.success = "";
                this.error = "";
                axios.post(this.action, {message: this.message})
                    .then(response => {
                        this.$emit('comment-saved', this.message);
                        this.message = "";
                        this.success = response.data.message;
                    })
                    .catch(err => {
                        console.log(err);
                        this.error = "Something wrong";
                    });
            },
            hideSuccess() {
                this.success = "";
            },
            hideError() {
                this.error = "";
            }
        },
        computed: {
            postData() {
                return {
                    message: this.message
                }
            }
        }
    }
</script>

<style scoped>

</style>
