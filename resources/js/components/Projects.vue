<template>
    <div class="card">
        <div class="card-header ">
            <h3 class="card-title ">Projects</h3>
        </div>
        <div class="">
            <div class="d-flex table-responsive p-3">
                <div class="btn-group mt-1 mr-2">
                    <button class="btn btn-lg btn-primary" v-on:click="addProject"><i class="mdi mdi-plus-circle-outline"></i> Add</button>
                </div>
                <div class="btn-group ml-auto mr-2 mt-1 border-0 d-none d-md-block">
                    <input type="text" class="form-control" v-model="search" placeholder="Search Here">
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
                        <project-item v-bind:projects="filteredProject" :user="user" />
                </table>
            </div>
        </div>
    </div>
</template>
 
<script>
    import ProjectItem from './Projects/ProjectItem.vue';
    import Swal from 'sweetalert2';
    export default {
        name: "Projects",
        props: ['user'],
        components: {
            ProjectItem,
        },
    data() {
            return {
                    projects: [],
                    search: ''
                }
        },
        methods: {
            getProjects () {
                axios.get('/api/projects').then((res) => {this.projects = res.data});
            },
            addProject() {
                var self = this;    
                Swal.queue([{
                title: 'Add a New Project?',
                html:
                    '<label for="name" style="color: #000;font-weight: 700">Project Name<input id="name" class="swal2-input"></label>' +
                    '<label for="description" style="color: #000;font-weight: 700">Project Description<textarea id="description" rows="5" cols="15" class="swal2-input"></textarea></label>',
                showCancelButton: true,
                confirmButtonText: 'Create Project',
                showLoaderOnConfirm: true,
                preConfirm: (result) => {
                    return new Promise(function(resolve, reject) {
                        if (result) {
                            let name = $('#name').val();
                            let desc = $('#description').val();
                            let createdBy = JSON.stringify([
                                {
                                    id: self.user.id,
                                    user: self.user.username
                                }
                            ]);
                            let team = JSON.stringify([self.user.id]);
                            axios.post('/api/projects', {title:name, description:desc, teamMembers: team, createdBy: createdBy})
                            .then(function(response){
                                if(Object.keys(self.projects).length >= 5){
                                    self.projects.pop();
                                }
                                self.projects.unshift(response.data);                          
                                Swal.insertQueueStep({
                                type: 'success',
                                title: 'Your project has been created!'
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
        mounted () {
            this.getProjects();
        },
        computed: {
            filteredProject() {
            return this.projects.filter(project => {
                return project.title.toLowerCase().includes(this.search.toLowerCase())
            })
            }
        }        
    }
</script>