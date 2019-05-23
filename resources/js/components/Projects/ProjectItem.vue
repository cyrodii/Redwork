<template>
    <tbody>
        <tr v-for="project in projects.slice(0, 5)" :key="project.id">
            <td>{{ project.id }}</td>
            <td>{{ project.title }}</td>
            <td><user-icon :user="user"></user-icon></td>
            <td class="text-nowrap">{{ project.updated_at | moment }}</td>
            <td class="w-1"><a href='#' class="icon" v-on:click="viewProject(project.id)"><i class="fa fa-eye"></i></a></td>
        </tr>
    </tbody>	
</template>
<script>
import UserIcon from '../modules/userIcon.vue';   
export default {
    name: "ProjectItem",
    props: ["projects", "user"],
    components:{
        UserIcon
    },
    filters: {
        moment: function (date) {
            return moment(date).format("MMM, DD [-] YYYY");
        }
    },
    methods: {
        viewProject: function (id) {
            window.location.href = '/projects/' + id
        }
    },
}
</script>