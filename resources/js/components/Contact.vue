<template>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Recent Contact Forms</h3>
        </div>
        <div class="">
            <div class="table-responsive border-top">
                <table class="table card-table table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="contact in contacts" :key="contact.id">
                            <td>{{ contact.id }}</td>
                            <td>{{ contact.name }}</td>
                            <td>{{ contact.subject }}</td>
                            <td>{{ contact.email }}</td>
                            <td class="text-nowrap">{{  contact.updated_at | moment }}</td>
                            <td class="w-1"><a href="#" class="icon" v-on:click="viewcontact(contact.id)"><i class="fa fa-eye"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "contacts",
    data() {
        return {
            contacts: []
        }
    },   
    filters:{
        moment: function (date) {
            return moment(date).format("MMM, DD [-] YYYY");
        }
    },
    methods: {
        getcontact(){
            axios.get('/api/contact').then((res) => {this.contacts = res.data});
        },
        viewcontact: function (id) {
            window.location.href = '/forms/contact/' + id
        }       
    },
    mounted() {
        this.getcontact();
    },
}
</script>