<script>
    export let dateValue;

    function dateToString(currentDate) {
        const date = new Date(currentDate);
        const hora = date.getHours().toString().padStart(2, '0');
        const minuto = date.getMinutes().toString().padStart(2, '0');
        const segundo = date.getSeconds().toString().padStart(2, '0');

        return `${hora}:${minuto}:${segundo}`;
    }
</script>

<div class="text-center m-auto" style="width: 6rem;">{dateToString(dateValue)}</div>