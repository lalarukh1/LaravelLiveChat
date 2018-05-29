<template>

    <form @submit.prevent="sendMessage">

        <div class="input-group">
         <VueEmoji  name="message"  @input="newMessage = $event.data" v-on:keyup.enter = "sendMessage" v-model="newMessage" width=180 height="30" />
        <span class="input-group-btn">
            <button class="btn btn-primary btn-sm" id="btn-chat">
                Send
            </button>
        </span>
    </div>

    </form>

</template>

<script>
    import VueEmoji from 'emoji-vue';
    export default {
        props: ['user'],

        data() {
            return {
                newMessage: ''
            }
        },

        methods: {
            sendMessage() {

                this.$emit('messagesent', {
                    user: this.user,
                    message: this.newMessage
                });

                this.newMessage = ''
            }
        },

        components: {
            VueEmoji
        }

    }
</script>