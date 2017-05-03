<template>
    <li v-if="message"><a href="/notifications">Notifications</a></li>
</template>
<script>
    export default {
        data() {
            return {
                message: null,
            }
        },
        mounted() {
            const channel = window.pusher.subscribe('notifications');
            channel.bind('NotificationCreated', (e) => {
                console.log(e.notification);

                this.message = e.notification;
            });
        }
    }
</script>