
<script>
    export let schedule;
    export let restMotocicle;
</script>

<button 
    class="btn btn-outline-danger" 
    disabled={schedule.counter_motorcycle == 0} 
    on:click={() => {restMotocicle(schedule.id)}}
>
    -
</button>