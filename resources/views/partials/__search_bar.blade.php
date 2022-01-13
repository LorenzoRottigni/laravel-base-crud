<!--<form action="{{route('comics.show', 2)}}">-->

<form method="GET" id="show-form">
    <div class="input-group mb-5 w-100">
            <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-default">Search by ID</span>
            <input type="number" class="form-control" placeholder="0" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <button id="search-button" class="btn btn-primary">Search</button>
            <button id="edit-button" class="btn btn-outline-primary">Edit</button>
    </div>
</form>

<script>
    const searchButton = document.getElementById('search-button');

    searchButton.addEventListener("click",()=>{
        const showForm = document.getElementById('show-form');
        const routeId = document.querySelector('[type="number"]').value;
        showForm.action += "/" + routeId
        showForm.submit();
    })

    const editButton = document.getElementById('edit-button');

    editButton.addEventListener("click",()=>{
        const showForm = document.getElementById('show-form');
        const routeId = document.querySelector('[type="number"]').value;
        showForm.action += "/" + routeId + '/edit'
        showForm.submit();
    })
</script>
