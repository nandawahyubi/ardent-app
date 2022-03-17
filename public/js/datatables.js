$(document).ready( function () {
    $('#myTable').DataTable({
        pageLength : 5,
        lengthMenu: [[5, 10, 20, 50, 100], [5, 10, 20, 50, 100]]
    });
} );