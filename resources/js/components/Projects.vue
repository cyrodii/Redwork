<template>
    <div class="card">
        <div class="card-header ">
            <h3 class="card-title ">Projects</h3>
        </div>
        <div class="">
            <div class="d-flex table-responsive p-3">
                <div class="btn-group mr-2">
                    <button class="btn btn-sm btn-primary"><i class="mdi mdi-plus-circle-outline"></i> Add</button>
                </div>
                <div class="btn-group mr-2">
                    <button type="button" class="btn btn-light mr-2"><i class="mdi mdi-alert-circle-outline"></i></button>
                    <button type="button" class="btn btn-light"><i class="mdi mdi-delete-empty"></i></button>
                </div>
                <div class="btn-group mr-2">
                    <button type="button" class="btn btn-light"><i class="mdi mdi-printer"></i></button>
                </div>
                <div class="btn-group ml-auto mr-2 mt-1 border-0 d-none d-md-block">
                    <input type="text" class="form-control" placeholder="Search Here">
                </div>
                
            </div>
            <div class="table-responsive border-top">
                <table class="table card-table table-striped table-vcenter text-nowrap">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Project Name</th>
                            <th>Team</th>
                            <th>Date</th>
                            <th>Preview</th>
                        </tr>
                    </thead>
                        <project-item v-bind:projects="projects" />
                </table>
            </div>
        </div>
    </div>
</template>
 
<script>
    import ProjectItem from './Projects/ProjectItem.vue';
    export default {
        name: "Projects",
        components: {
            ProjectItem
        },
        data() {
            return {
                    projects: []
                }
        },
        methods: {
            getProjects () {
                axios.get('/api/projects').then((res) => {this.projects = res.data});
            }
        },
        mounted () {
            this.getProjects();
        }
    }
</script>