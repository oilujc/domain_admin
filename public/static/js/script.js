$(document).ready(function($) {
	var domains = $("#domains");
	
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });

    domains.DataTable();
});