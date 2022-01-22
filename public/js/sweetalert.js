function updateStatustoProgress(id){
    Swal.fire({
        title: "Set To Progress",
        text : "Once changed to progress, you can't revert it back to the beginning!",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonColor: "#3085d6",
        cancelButtonText: "Cancel",
    }).then((result) => {
        if (result.isConfirmed) {
            $('#updateCheckout'+id).submit();
        }
    });
}

function updateStatustoFinished(id){
    Swal.fire({
        title: "Set To Finished",
        text : "Once changed to finished, you can't revert it back to the beginning!",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonColor: "#3085d6",
        cancelButtonText: "Cancel",
    }).then((result) => {
        if (result.isConfirmed) {
            $('#updateCheckout'+id).submit();
        }
    });
}

function deleteCheckout(id){
    Swal.fire({
        title: "Want To Delete",
        text : "Deleted Data Cannot Be Recovered",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonColor: "#3085d6",
        cancelButtonText: "Cancel",
    }).then((result) => {
        if (result.isConfirmed) {
            $('#deleteCheckout'+id).submit();
        }
    });
}
