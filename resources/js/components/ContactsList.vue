<template>
    <div class="contacts-list">
        
        <div class="row">
            <div class="col-md-12">
                
                <ul>
                    <li v-for="contact in filterContacts" :key="contact.id" @click="selectContact(contact)" :class="{ 'selected': contact == selected }">
                        <div class="avatar">
                            <!-- <img :src="contact.avatar" :alt="contact.first_name"> -->
                        </div>
                        <div class="contact">
                            <p class="name">{{ contact.first_name }}</p>
                            <p class="email">{{ contact.department }}, {{ contact.university_batch }}</p>
                        </div>
                        <span class="unread" v-if="contact.unread">{{ contact.unread }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            contacts: {
                type: Array,
                default: []
            },
            search: {
                type:String,
                default: ''
            }
        },
        data() {
            return {
                selected: this.contacts.length ? this.contacts[0] : null
            };
        },
        methods: {
            selectContact(contact) {
                this.selected = contact;
                this.$emit('selected', contact);
            }
        },
        computed: {
            sortedContacts() {
                return _.sortBy(this.contacts, [(contact) => {
                    if (contact == this.selected) {
                        return Infinity;
                    }
                    return contact.unread;
                }]).reverse();
            },
            filterContacts() {
                return this.contacts.filter(contact => {
                    return contact.first_name.toLowerCase().match(this.search.toLowerCase());
                });
            }
        }
    }
</script>

<style lang="css" scoped>
.contacts-list {
    flex: 2;
    height: 68vh;
    overflow-y: scroll;
    overflow-x: hidden;
}
.contacts-list ul {
  list-style-type: none;
  padding-left: 0;
}
.contacts-list ul li {
  /* display: flex; */
  padding: 10px 50px;
  margin: 5px;
  /* border-bottom: 1px solid #aaa; */
  height: 80px;
  position: relative;
  cursor: pointer;
  background: #eee;
    border-radius: 10px;
}
.contacts-list ul li.selected {
  background: #abc624;
}
.contacts-list ul li span.unread {
  background: #82e0a8;
  color: #fff;
  position: absolute;
  right: 11px;
  top: 20px;
  display: flex;
  font-weight: 700;
  min-width: 20px;
  justify-content: center;
  align-items: center;
  line-height: 20px;
  font-size: 12px;
  padding: 0 4px;
  border-radius: 3px;
}
.contacts-list ul li .avatar {
  flex: 1;
  display: flex;
  align-items: center;
}
.contacts-list ul li .avatar img {
  width: 35px;
  border-radius: 50%;
  margin: 0 auto;
}
.contacts-list ul li .contact {
  flex: 3;
  font-size: 10px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.contacts-list ul li .contact p {
  margin: 0;
}
.contacts-list ul li .contact p.name {
  font-weight: bold;
}

</style>