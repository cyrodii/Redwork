<template>
    <div class="card">
        <div class="card-body" v-show="getPercentage">
            <div class="card-value float-right stamp stamp-lg" v-bind:class="color"><i class="fa fa-users"></i></div>
            <h3 class="mb-1 text-white">{{ goal }}</h3>
            <div class="text-muted">{{ desc }}</div>
            <div class="progress progress-md mt-4">
                <div class="progress-bar progress-bar-striped progress-bar-animated" v-bind:class="color" data-toggle="tooltip" data-placement="top" v-bind:title="current" v-bind:style="{width: progress + '%'}">{{ progress }}%</div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "ProgressBar",
    data() {
        return {
            goal: 0,
            desc: null,
            progress: 0,
            current: 0,
            color: "bg-green",
            type: 'user',
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