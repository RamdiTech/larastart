$(function() {
	$('#select_country').on('change', onSelectCountryChange);
});

function onSelectCountryChange() {
	var country_id = $(this).val();

	if (!country_id) {
		$("#select_city").html('<option value="">Select a City</option>');
		return;
	}
	$.get('/api/cities/'+country_id+'/getAllApi', function (data) {
		var select = '<option value="">Select a City</option>';
		for (var i = 0; i < data.length; ++i) {
			select += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
		}
		$("#select_city").html(select);
	});
}