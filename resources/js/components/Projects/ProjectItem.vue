<template>
    <tbody>
        <tr v-for="project in projects.slice(0, 5)" :key="project.id">
            <td>{{ project.id }}</td>
            <td>{{ project.title }}</td>
            <td>
                <div class="avatar-list">
                    <span class="avatar bradius" style="background-image: url(https://api.adorable.io/avatars/285/cyrodii.png)"></span>
                </div>
            </td>
            <td class="text-nowrap">{{ project.updated_at | moment }}</td>
            <td class="w-1"><a href='#' class="icon" v-on:click="viewProject(project.id)"><i class="fa fa-eye"></i></a></td>
        </tr>
    </tbody>	
</template>
<script>
export default {
    name: "ProjectItem",
    props: ["projects"],
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