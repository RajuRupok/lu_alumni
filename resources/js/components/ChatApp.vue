<template>
    <div class="chat-app">
        <div class="row">
            <div class="col-md-5 chat-list">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" v-model="search" placeholder="Search Contact">
                </div>
                <ContactsList :contacts="contacts" :search="search" @selected="startConversationWith"/>
            </div>
            <div class="col-md-7 message-box">
                <Conversation :contact="selectedContact" :messages="messages" @new="saveNewMessage"/>
            </div>
        </div>
    </div>
</template>

<script>
    import Conversation from './Conversation';
    import ContactsList from './ContactsList';
    export default {
        props: {
            user: {
                type: Object,
                required: true
            }
        },
        data() {
            return {
                selectedContact: null,
                messages: [],
                contacts: [],
                search: ''
            };
        },
        mounted() {
            Echo.private(`messages.${this.user.id}`)
                .listen('NewMessage', (e) => {
                    this.hanleIncoming(e.message);
                });
            axios.get('/message/contacts')
                .then((response) => {
                    this.contacts = response.data;
                });
        },
        methods: {
            startConversationWith(contact) {
                this.updateUnreadCount(contact, true);
                axios.get(`/message/conversation/${contact.id}`)
                    .then((response) => {
                        this.messages = response.data;
                        this.selectedContact = contact;
                    })
            },
            saveNewMessage(message) {
                this.messages.push(message);
            },
            hanleIncoming(message) {
                if (this.selectedContact && message.from == this.selectedContact.id) {
                    this.saveNewMessage(message);
                    return;
                }
                this.updateUnreadCount(message.from_contact, false);
            },
            updateUnreadCount(contact, reset) {
                this.contacts = this.contacts.map((single) => {
                    if (single.id !== contact.id) {
                        return single;
                    }
                    if (reset)
                        single.unread = 0;
                    else
                        single.unread += 1;
                    return single;
                })
            }
        },
        components: {Conversation, ContactsList}
    }
</script>


<style lang="css" scoped>
.chat-list {
    background: #ffffff;
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 0 15px 0px rgba(0, 0, 0, 0.1);
  /* border-left: 1px solid #a6a6a6; */
}


</style>