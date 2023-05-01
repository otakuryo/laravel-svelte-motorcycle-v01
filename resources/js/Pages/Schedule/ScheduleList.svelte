<script>
    import {onMount} from 'svelte';
    import ScheduleList from './components/ScheduleList.svelte';
    export let max_motocycles = 8;

    let schedules = [];
    let loading = true;

    $: schedules = schedules

    let initMount = async () => {
        loading = true
        schedules = await getSchedules()
        loading = false
    }

    onMount(initMount)

    async function getSchedules() {
        let serverData = await fetch('/api/schedule');
        let response = await serverData.json();
        console.log(response.schedule);
        return response.schedule;
    }
</script>


<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <h1 class="text-white">Control Motorcycles</h1>
            <div>
                
                {#if loading}
                    <div class="text-white">Loading...</div>
                {:else} 
                    <ScheduleList schedules={schedules} max_motocycles={max_motocycles} />
                {/if}
            
            </div>
        </div>
    </div>
</div>