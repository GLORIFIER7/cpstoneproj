$(document).ready(function () {
    $(".data-table").each(function(_, table) {
        $(table).DataTable();
    })
});

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>;
<script>
swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
});
</script>