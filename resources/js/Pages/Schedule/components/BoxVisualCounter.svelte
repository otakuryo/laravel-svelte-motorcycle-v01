<script>
    export let counter = 0;
</script>

<style>
    .fa-solid {
        font-size: 1.5rem;
    }
</style>

<div class="my-auto px-3">
    {#each Array(counter) as _,i }
        <i class="fa-solid fa-motorcycle px-1"></i>
    {/each}
</div>