<template>
    <tbody>
        <tr v-for="project in projects" :key="project.id">
            <td>{{ project.id }}</td>
            <td>{{ project.title }}</td>
            <td><div class="avatar-list avatar-list-stacked">
                    {{ project.description }}
                </div>
            </td>
            <td class="text-nowrap">{{ project.updated_at }}</td>
            <td class="w-1"><a href="#" class="icon"><i class="fa fa-eye"></i></a></td>
        </tr>
    </tbody>	
</template>
<script>
export default {
    name: "ProjectItem",
    props: ["projects"]
}
</script>