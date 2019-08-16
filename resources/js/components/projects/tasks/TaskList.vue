<template>
    <div class="Task-list">
        <project-card 
            v-for="task in tasks" :key="task.id">
        </project-card>
    </div> 
</template>

<script>
export default {
    props: ['projects'],
}
</script>