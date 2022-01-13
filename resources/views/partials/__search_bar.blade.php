<!--<form action="{{route('comics.show', 2)}}">-->

<form method="GET" id="show-form">
    <div class="input-group mb-5 w-100">
            <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-default">Search by ID</span>
            <input type="number" class="form-control" placeholder="0" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <button id="submit-button" class="btn btn-primary">Search</button>
    </div>
</form>

<script>
    const submitButton = document.getElementById('submit-button');

    submitButton.addEventListener("click",()=>{
        const showForm = document.getElementById('show-form');
        const routeId = document.querySelector('[type="number"]').value;
        showForm.action += "/" + routeId
        showForm.submit();

    })

</script>
