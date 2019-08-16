<template>
    <div class="project-list">
        <project-card 
            v-for="project in projects" :key="project.id">
        </project-card>
    </div> 
</template>

<script>
export default {
    props: ['projects'],
}
</script>