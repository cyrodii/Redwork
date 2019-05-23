<template>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card" v-show="getPercentage">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-right">
                        <i class="mdi mdi-plus text-warning icon-size" v-on:click="add"></i>
                    </div>
                    <div class="float-left">
                        <p class="mb-0 text-left">{{ desc }}</p>
                        <div class="">
                            <h3 class="font-weight-semibold text-left mb-0 text-white">${{ total.toLocaleString() }}</h3>
                        </div>
                    </div>
                </div>
                <p class="text-muted mb-0">
                    <i v-bind:class="state" aria-hidden="true"></i> {{ percentage }}% to previous month
                </p>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "TotalsWidget",
    props: ['type'],
    data() {
        return {
            desc: null,
            percentage: 0,
            thisMonth: 0,
            lastMonth: 0,
            total: 0,
            state: null,
        }
    },
    methods: {
        getData(type){
            axios.get('/api/totals/'+ type).then((res) => {    
                
                let data = res.data;
                /* Adding totals together */
                let total = [];

                Object.entries(data).forEach(([key, val]) => {
                    total.push(val.value)
                    this.desc = val.desc
                    return val.created_at = moment(val.created_at).format("YY-MM")
                });
                this.total = total.reduce((total, num) => {return total + num}, 0);

                /* Compare Months */ 
                let currentMonth = moment(moment().format()).format("YY-MM")
                let previousMonth = moment(this.currentMonth).subtract(1, 'months').format("YY-MM")
                let calculateThisMonth = [];
                let calculateLastMonth = [];

                /* Calculating this Months */
                let thisMonth = data.filter((total) => {       
                    return total.created_at == currentMonth
                })
                Object.entries(thisMonth).forEach(([key, val]) => {
                    calculateThisMonth.push(val.value)
                });                        
                this.thisMonth = calculateThisMonth.reduce((total, num) => {return total + num}, 0);   

                /* Calculating last Months */
                let lastMonth = data.filter((total) => {       
                    return total.created_at == previousMonth
                })
                Object.entries(lastMonth).forEach(([key, val]) => {
                    calculateLastMonth.push(val.value)
                });                        
                this.lastMonth = calculateLastMonth.reduce((total, num) => {return total + num}, 0);   
            });           
        },
        add(value){
            var self = this;    
            Swal.queue([{
            title: 'Contribute towards '+ this.desc,
            html:
                '<label for="value" style="color: #000;font-weight: 700">Contribution<input id="value" class="swal2-input"></label>',
            showCancelButton: true,
            confirmButtonText: 'Contribute',
            showLoaderOnConfirm: true,
            preConfirm: (result) => {
                return new Promise(function(resolve, reject) {
                    if (result) {
                        let value = $('#value').val();                                    
                        axios.post('/api/totals', {value: value, type: self.type, desc: self.desc})
                        .then(function(response){         
                            self.thisMonth = Number(self.thisMonth) + Number(value)       
                            self.total = Number(self.total) + Number(value)       
                            Swal.insertQueueStep({
                            type: 'success',
                            title: 'Your contribution to ' + self.desc + ' has been made!'
                            })
                            resolve();
                        })
                        .catch(function(error){
                            Swal.insertQueueStep({
                            type: 'error',
                            title: 'Something went wrong.'
                            })
                            console.log(error);
                            reject();
                        })
                    }
                });
            }
            }])
        }
    },
    computed:{
        getPercentage(thisMonth, lastMonth){
            this.percentage = Math.floor((this.thisMonth - this.lastMonth) / this.lastMonth * 100);
            if(Math.sign(this.percentage) == 1){
              return this.state = 'mdi mdi-arrow-up-drop-circle text-success mr-1'
            } else {
              return this.state = 'mdi mdi-arrow-down-drop-circle mr-1 text-danger'
            }
        },
    },
    mounted(){
        this.getData(this.type);
        console.log('Tips Widget Loaded');     
    }
}
</script>