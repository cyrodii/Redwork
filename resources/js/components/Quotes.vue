<template>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Recent Quotes</h3>
        </div>
        <div class="">
            <div class="table-responsive border-top">
                <table class="table card-table table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th colspan="2">User</th>
                            <th colspan="2">Quote</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="quote in quotes" :key="quote.id">
                            <td>{{ quote.id }}</td>
                            <td><span class="avatar brround " style='background-image: url(https://api.adorable.io/avatars/285/fff.png)'></span></td>
                            <td>{{ quote.name }}</td>
                            <td colspan="2">{{ quote.cost }}</td>
                            <td>{{ quote.email }}</td>
                            <td class="text-nowrap">{{  quote.updated_at | moment }}</td>
                            <td class="w-1"><a href="#" class="icon" v-on:click="viewQuote(quote.id)"><i class="fa fa-eye"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Quotes",
    data() {
        return {
            quotes: []
            
        }
    },   
    filters:{
        moment: function (date) {
            return moment(date).format("MMM, DD [-] YYYY");
        }
    },
    methods: {
        getQuote(){
            axios.get('/api/quote').then((res) => {this.quotes = res.data});
        },
        viewQuote: function (id) {
            window.location.href = '/quotes/' + id
        }       
    },
    mounted() {
        this.getQuote();
    },
}
</script>