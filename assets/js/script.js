$(document).ready(function() {
	$("#addUser").click(function() {
		data_array = $("#create_user").serialize();

		$.ajax({
			url:
				"http://localhost:8888/CodeIgniter-ajax-crud//index.php/users/create",
			method: "post",
			data: data_array,
			async: false,
			dataType: "json",
			success: function(response) {
				if (response.success) {
					$("#myModal").modal("hide");
					$(".alert-success")
						.html("Added Successfully")
						.fadeIn()
						.delay(3000)
						.fadeOut();
					showAllEmployee();
				}
				// var result = jQuery.parseJSON(data);
				// console.log(result.status);
			}
		});
		return false;
	});
});
