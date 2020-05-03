document.querySelectorAll('.notification .delete').forEach(item => {
    item.addEventListener('click', event => {
        event.preventDefault();
        const button = event.target;
        const notification = button.closest('.notification');
        notification.classList.add('is-hidden');
    });
});
