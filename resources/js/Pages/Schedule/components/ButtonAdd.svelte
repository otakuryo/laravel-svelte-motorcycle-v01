<script>
    export let schedule;
    export let addMotocicle;
    export let max_motocycles = 8;
</script>

<button 
    class="btn btn-outline-primary" 
    disabled={schedule.counter_motorcycle == max_motocycles} 
    on:click={() => addMotocicle(schedule.id)}
>
    +
</button>