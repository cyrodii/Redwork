<template>
	<div class="col-sm-6 col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body" v-show="getPercentage">
                <div class="card-value float-right stamp stamp-lg" v-bind:class="color" v-on:click="add"><i class="fa fa-users"></i></div>
                <h3 class="mb-1 text-white">{{ goal }}</h3>
                <div class="text-muted">{{ desc }}</div>
                <div class="progress progress-md mt-4">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" v-bind:class="color" v-bind:style="{width: progress + '%'}">{{ current }}</div>
                </div>
            </div>
        </div>
    </div>        
</template>
<script>
export default {
    name: "ProgressBar",
    props: ['type'],
    data() {
        return {
            goal: 0,
            desc: null,
            progress: 0,
            current: 0,
            color: "bg-green",
        }
    },
    methods:{
        getProgress(type){
            axios.get('/api/stats/'+ type).then((res) => {            
                    let data = JSON.parse(res.data[0].info);
                    this.goal = data.goal;
                    this.desc = data.desc;
                    this.current = data.current;
                    this.color = data.color;
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
                        let data = JSON.stringify([
                            {
                                goal: self.goal,
                                desc: self.desc,
                                current: self.current,
                                color: self.color
                            }
                        ]);                                     
                        axios.post('/api/stats/' + self.type, {info: data, name: self.type})
                        .then(function(response){
                            this.current += value                   
                            Swal.insertQueueStep({
                            type: 'success',
                            title: 'Your contribution to ' + self.goal + ' has been made!'
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
        getPercentage(current, goal){
            return this.progress = (this.current / this.goal) * 100
        },
    },
    mounted(){
        this.getProgress(this.type); 
    }
}
</script>