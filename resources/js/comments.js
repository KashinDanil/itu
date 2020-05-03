import Vue from 'vue';
import CommentsList from "./components/CommentsList";

document.querySelectorAll('.js-comments-list').forEach(node => {
    new Vue({
        el: node,
        components: {
            CommentsList
        }
    });
});
