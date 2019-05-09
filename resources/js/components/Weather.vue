<template>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Weather Report</h3>
        </div>
        <div class="">
            <div class="row pt-3">
                <div class="col-6 text-center">
                    <img src="/admin/images/contrast.svg" alt="img" class="text-center w-9 h-9 rotation">
                </div>
                <div class="col-6">
                    <div ><span class="display-2">23<sup>o</sup></span> <span>Monday</span></div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <tbody>
                        <tr>
                            <td class="no-border">9.30 am</td>
                            <td class="no-border text-right"><span class="h3 text-dark">23 <sup>o</sup></span></td>
                        </tr>
                        <tr>
                            <td class="no-border">10.30 am</td>
                            <td class="no-border text-right"><span class="h3 text-dark">22 <sup>o</sup></span></td>
                        </tr>
                        <tr>
                            <td class="no-border">11.30 am</td>
                            <td class="no-border text-right"><span class="h3 text-dark">21 <sup>o</sup></span></td>
                        </tr>
                        <tr>
                            <td class="no-border">12.30 pm</td>
                            <td class="no-border text-right"><span class="h3 text-dark">22 <sup>o</sup></span></td>
                        </tr>
                        <tr>
                            <td class="no-border">1.30 pm</td>
                            <td class="no-border text-right"><span class="h3 text-dark">20 <sup>o</sup></span></td>
                        </tr>
                        <tr>
                            <td class="no-border">9.30 am</td>
                            <td class="no-border text-right"><span class="h3 text-dark">23 <sup>o</sup></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
let city = 6058560;
let apiKey = "962622be4913c224e295ea8871545c0d";
var config = {
    headers: {'Access-Control-Allow-Origin': '*'}
};
export default {
    name: "Weather",
    data() {
        return {
            weather: []
        }
    },
    methods: {
        getWeather: function (){
            axios.get('https://api.openweathermap.org/data/2.5/forecast?id='+ city + '&appid='+ apiKey, config).then((res) => {this.weather = res.data});
        }
    },
    mounted() {
        // this.getWeather(); 
    }
}
</script>