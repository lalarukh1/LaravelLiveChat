<template>
    <ul class="chat" onload="showAlert">


        <li class="left clearfix" v-for="message in messages">


            <div class="chat-body clearfix">

                <div class="header">

                        <strong class="primary-font">
                        <div class="name">

                        <template v-if="message.user.id === user.id">
                            <div class="glyphicon glyphicon-user"> </div>
                            <span class="me">
                            {{message.user.name.charAt(0).toUpperCase()+ message.user.name.slice(1) }}
                            </span>
                        </template>

                        <template v-else>
                            <div class="glyphicon glyphicon-user"> </div>
                            {{message.user.name.charAt(0).toUpperCase()+ message.user.name.slice(1)}}
                        </template>
                        </div>
                    </strong>
                </div>

                <div class="msg">

                    <template v-if="message.user.id === user.id">
                        <span class="me">
                            <p>{{ message.message }}</p>
                        </span>
                    </template>

                    <template v-else>
                        <p>{{ message.message }}</p>
                    </template>

                </div>

            </div>

        </li>


        <button  class="btn btn-info btn-xs end-chat" id="end-chat" v-on:click="seen = !seen">End Chat</button>
        <P></P>

        <div v-show="!seen" class="thanks alert alert-danger animated bounceInDown" id="thanks"> Thanks for chatting! </div>

        <p v-show="!seen" class="chat-ended" id="chatended"> chat ended at: {{getTime}}</p>

        <div v-if="messages == ''" class="alert alert-warning start animated bounceInDown" > Start Chatting!
        </div>



    </ul>

</template>

<script>
    Vue.use(require('vue-moment'));
    const timeDate = new Date();

    export default {
        data() {

            return {
                likes: 0,
                dismissSecs: 5,
                dismissCountDown: 0,
                seen: true

            }
        },

        props:
            ['messages', 'user'],

        methods: {
            liked: function(){
                alert ('Liked!')
            },

            endChat: function () {
                thanks.style.visibility = 'visible';
                chatended.style.visibility = 'visible';
            },
            show() {

            }

        },
        computed: {
            getTime() {
                const time = timeDate.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });
                return time;
            }
        }
    };

    window.setTimeout(function () {
        $(".alert-warning").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 5000);

    window.setTimeout(function () {
        $(".alert-danger").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 10000);




</script>