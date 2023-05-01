<script>
    import BoxDate from "./BoxDate.svelte";
    import BoxCounter from "./BoxCounter.svelte";
    import BoxVisualCounter from "./BoxVisualCounter.svelte";
    import ButtonAdd from "./ButtonAdd.svelte";
    import ButtonRest from "./ButtonRest.svelte";

    export let schedules = [];
    export let max_motocycles = 8;

    async function addMotocicle(schedule_id) {
        await fetchAndUpdate(`/api/schedule-add/${schedule_id}`)
    }

    async function restMotocicle(schedule_id) {
        await fetchAndUpdate(`/api/schedule-rest/${schedule_id}`)
    }

    async function fetchAndUpdate(urlApi) {
        const serverData = await fetch(urlApi)
        const response = await serverData.json();
        updateSchedule(response.schedule)
    }

    function updateSchedule(schedule) {
        const scheduleOnArray = schedules.find((element) => element.id == schedule.id);
        if (scheduleOnArray) {
            scheduleOnArray.counter_motorcycle = schedule.counter_motorcycle
            schedules = [...schedules]
        }
    }

</script>

<style>
    [data-motorcycles]:not([data-motorcycles="0"]) {
        background-color: var(--color-green);
    }
    [data-motorcycles="0"] {
        background-color: var(--color-red);
    }
    li {
        transition: .5s;
    }
    .w-custom {
        width: max-content;
    }
</style>

<div class="card w-100 border-dark">
    <ul class="list-group list-group-flush">
        {#each schedules as schedule}
            <li data-id={schedule.id} data-motorcycles={schedule.counter_motorcycle} class="list-group-item py-1 d-flex bg-green">
                <div class="w-custom d-flex flex-column flex-lg-row">
                    <BoxDate dateValue={schedule.date} />
                    <div class="w-custom">
                        <ButtonRest schedule={schedule} restMotocicle={restMotocicle} />
                        <BoxCounter counter={schedule.counter_motorcycle} />
                        <ButtonAdd schedule={schedule} addMotocicle={addMotocicle} max_motocycles={max_motocycles}/>
                    </div>
                </div>
                <BoxVisualCounter counter={schedule.counter_motorcycle} />
            </li>
        {/each}
    </ul>
</div>