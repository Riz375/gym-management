<template>
    <div class="project-card card">

        <div class="card-body">
            <h5 class="card-title">{{ project.title }}</h5>
            <p class="card-text">{{ project.description }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>

            <a :href="link" class="btn btn-primary">Edit</a>
        </div>
    </div> 
</template>

<script>
export default {
    computed: {
        link() {
            return route('project.edit', {'project': this.project.id});
        }
    },

    props: ['project'],
}
</script>