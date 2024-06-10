/* COMMOM Functions */
jQuery(document).ready(function(){

	jQuery('.awr-bulk-delete').on("click", function(e) {

		e.preventDefault();
		let object_type = jQuery(this).data('type');
		awr_bulk_delete_object ( object_type );
	});
});

// element_name should be : collection or snapshot
function awr_load_list( element_name ) {
	
	jQuery('#awr-custom-' + element_name + '_loading').show();
	
	jQuery.ajax({
		type 	: "post",
		url		: awr_ajax_obj.ajaxurl,
		cache	: false,
		data: {
			'action'	: 'awr_get_' + element_name + 's',
			'security'	: awr_ajax_obj.ajax_nonce
		},
		success: function(result){
			// console.log(result);
			result_in_json = JSON.parse(result);
			awr_display_list( result_in_json, element_name);
		},
		complete: function(){
			jQuery('#awr-custom-' + element_name + '_loading').hide();
		}
	});
}

function awr_display_list( array, element_name ) {

	if ( element_name == 'reset_configuration' ) {
		// Empty all existant configs
		jQuery('.awr-user-custom-reset-config').not('#awr-user-custom-reset-config-template').remove(); 
	}

	if ( element_name == 'snapshot' ) {
		// Empty all existant snapshots
		jQuery('.awr-snapshot').not('#awr-snapshot-template').remove(); 
	}

	if ( element_name == 'collection' ) {
		// Empty all existant snapshots
		jQuery('.awr-collection').not('#awr-collection-template').remove(); 
	}
	// Add the elements within array
	
	// console.log(element_name);
	// console.log(array);
	// console.log(array.length);
	// console.log(Array.isArray(array));
	if ( Array.isArray(array) && array.length > 0 ) {
		
		jQuery('#awr-no-custom-' + element_name ).hide();
		jQuery('#awr-header-' + element_name ).show();

		for (let index in array) { 
			array_item = array[index];
			awr_display_item( array_item, element_name );
		}

		jQuery('#awr-bulk-delete-' + element_name ).show();

	} else {
		jQuery('#awr-header-' + element_name ).hide();
		jQuery('#awr-no-custom-' + element_name ).show();
		jQuery('#awr-bulk-delete-' + element_name ).hide();
	}
}

function awr_format_bytes ( bytes ) {
	
	if (bytes === 0) {
		return '0 Bytes';
	}

	const k = 1024;
	const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];

	const i = Math.floor(Math.log(bytes) / Math.log(k));

	const formattedSize = parseFloat((bytes / Math.pow(k, i)).toFixed(2));

	return `${formattedSize} ${sizes[i]}`;
}

function awr_display_item(object_to_print, element_name ) {

	if ( element_name == 'reset_configuration' ) {
		
		id = object_to_print.id;
		name = object_to_print.name;
		time = object_to_print.time;

		detail = awr_reset_config_to_text(object_to_print);

		//console.log(detail);
		//blog_infos_array = JSON.stringify(object_to_print.blog_infos_array);
		

		var originalBlock = jQuery("#awr-user-custom-reset-config-template");
	    var clonedBlock = originalBlock.clone();

	    // The id of the cloned block
	    clonedBlock.attr("id", "awr-user-custom-reset-config-" + id);
	    clonedBlock.find(".awr-reset_configuration-bulk").val(id);

	    clonedBlock.find(".awpr-cc-toggle-icon").attr('data-target', element_name + '_row_' + id );
	    clonedBlock.find(".list-rows").attr('id', element_name + '_row_' + id );

	    // Modify the texts in the cloned block
	    //clonedBlock.find(".awr-custom-reset-name").text('#' + id + ' - ' + name + ' - ' + time);
	    clonedBlock.find(".awr-custom-reset-name").text(name);
	    clonedBlock.find(".awr-custom-reset-created").text(time);
	    clonedBlock.find(".awr-custom-reset-detail").html(detail);

	    // Modify the attributes of "delete" button in the cloned block
	    clonedBlock.find(".awr-reset-config-delete").attr('data-name', name);
	    clonedBlock.find(".awr-reset-config-delete").attr('data-id', id);

	    // Modify the attributes of "run" button in the cloned block
	    clonedBlock.find(".awr-reset-config-run").attr('data-name', name);
	    clonedBlock.find(".awr-reset-config-run").attr('data-id', id);
	    clonedBlock.find(".awr-reset-config-run").attr('id', id);

	    // Modify the attributes of "edit" button in the cloned block
	    //clonedBlock.find(".awr-reset-config-edit").data('name', name);
	    //clonedBlock.find(".awr-reset-config-edit").data('id', id);

	    // Add the cloned block after the original block
	    originalBlock.after(clonedBlock);
	    clonedBlock.show();
	
	}

	if ( element_name == 'snapshot' ) {
		
		id = object_to_print.id;
		name = object_to_print.data.name;
		time = object_to_print.data.time;
		wp_version = object_to_print.data.wp_version;
		tables = object_to_print.data.tbl_names;
		size = awr_format_bytes( object_to_print.data.tbl_size );

		var originalBlock = jQuery("#awr-snapshot-template");
	    var clonedBlock = originalBlock.clone();

	    // The id of the cloned block
	    clonedBlock.attr("id", "awr-snapshot-" + id);
	    clonedBlock.find(".awr-snapshot-bulk").val(id);

	    clonedBlock.find(".awpr-cc-toggle-icon").attr('data-target', element_name + '_row_' + id );
	    clonedBlock.find(".list-rows").attr('id', element_name + '_row_' + id );
	    
	    // Modify the texts in the cloned block
	    clonedBlock.find(".awr-snapshot-name").html(name);
	    clonedBlock.find(".awr-snapshot-created").text(time);
	    clonedBlock.find(".awr-snapshot-size").html(size);
	    
	    //clonedBlock.find(".awr-snapshot-date").html(time);

	    var tables_html = '<span>#' + id + '<span><br /><span>WP version: ' + wp_version + '</span><br />Tables<br /><ul>';

		// Iterate over the array and generate <li> elements
		for (var i = 0; i < tables.length; i++) {
		  tables_html += '<li> - ' + tables[i] + '</li>';
		}

		// Close the <ul> tag
		tables_html += '</ul>';

	    clonedBlock.find(".awr-snapshot-detail").html(tables_html);
	    clonedBlock.find(".awr-snapshot-bulk").val(id);

	    // Modify the attributes of "delete" button in the cloned block
	    clonedBlock.find(".awr-snapshot-delete").attr('data-name', name);
	    clonedBlock.find(".awr-snapshot-delete").attr('data-id', id);

	    // Modify the attributes of "run" button in the cloned block
	    clonedBlock.find(".awr-snapshot-restore").attr('data-name', name);
	    clonedBlock.find(".awr-snapshot-restore").attr('data-id', id);
	    clonedBlock.find(".awr-snapshot-restore").attr('data-wp-version', wp_version);

	    // Modify the attributes of "delete" button in the cloned block
	    clonedBlock.find(".awr-snapshot-compare").attr('data-name', name);
	    clonedBlock.find(".awr-snapshot-compare").attr('data-id', id);

	    // Modify the attributes of "edit" button in the cloned block
	   	clonedBlock.find(".awr-snapshot-download").attr('data-name', name);
	   	clonedBlock.find(".awr-snapshot-download").attr('data-id', id);
	    
	    // Add the cloned block after the original block
	    originalBlock.after(clonedBlock);
	    clonedBlock.show(); 

	    //console.log(object_to_print);

	    if ( tables.length > 10)
		    jQuery('#awr-notice-more-than-10-snapshot').show();
		else 
		    jQuery('#awr-notice-more-than-10-snapshot').hide();
	
	
	}

	if ( element_name == 'collection' ) {
		
		//console.log(object_to_print);

		id = object_to_print.id;
		name = object_to_print.data.name;
		tasks = object_to_print.data.tasks_names;
		time = object_to_print.time;
		periodicity = object_to_print.data.periodicity;
		
		var originalBlock = jQuery("#awr-collection-template");
	    var clonedBlock = originalBlock.clone();

	    // The id of the cloned block
	    clonedBlock.attr("id", "awr-collection-" + id);
	    clonedBlock.find(".awr-collection-bulk").val(id);

	    clonedBlock.find(".awpr-cc-toggle-icon").attr('data-target', element_name + '_row_' + id );
	    clonedBlock.find(".list-rows").attr('id', element_name + '_row_' + id );

	    // Modify the texts in the cloned block
	    clonedBlock.find(".awr-collection-name").html(name);
		clonedBlock.find(".awr-collection-created").text(time);
	    //clonedBlock.find(".awr-collection-date").html(time);

	    var tables_html = '';

		// Iterate over the array and generate <li> elements
		if ( Array.isArray(tasks) && tasks.length > 0 ) {
			for (var i = 0; i < tasks.length; i++) {
			  tables_html += '<li class="text-xs text-awpr-gray mb-0"> - ' + tasks[i] + '</li>';
			}
		}

	    clonedBlock.find(".collection-tasks").html(tables_html);

	    if ( periodicity == "ondemand" ) {
	    	clonedBlock.find(".awr-to-run-automatically").remove();	
	    } else {
	    	clonedBlock.find(".awr-to-run-on-demand").remove();
	    	clonedBlock.find(".awr-to-run-automatically-text").html(periodicity);
		}
		
		// Modify the attributes of "delete" button in the cloned block
	    clonedBlock.find(".awr-collection-delete").attr('data-name', name);
	    clonedBlock.find(".awr-collection-delete").attr('data-id', id);

	    // Modify the attributes of "run" button in the cloned block
	    clonedBlock.find(".awr-collection-run").attr('data-name', name);
	    clonedBlock.find(".awr-collection-run").attr('data-id', id);

	    // Modify the attributes of "delete" button in the cloned block
	    //clonedBlock.find(".awr-collection-edit").attr('data-name', name);
	    //clonedBlock.find(".awr-collection-edit").attr('data-id', id);
		
	    // Add the cloned block after the original block
	    originalBlock.after(clonedBlock);
	    clonedBlock.show(); 

		//console.log(object_to_print);
	} 
}

function awr_reset_config_to_text( object_to_print ) {

	object_detail = object_to_print.reset_detail;

	//console.log(object_detail);
	//let result = '- Reset type: <b>' + object_to_print.reset_type + '</b><br />';
	id = object_to_print.id;
	//time = object_to_print.time;

	let result = '#' + id + '<br />';
	//result += '- Creation: ' + time + '<br />';

	if (object_detail.keep_blog_info == "1" ) {
		result += '- Keep blog info<br />';
	} else if ( object_to_print.blog_info ){

		result += '- Blog infos<br />';

		result += '------ Name: ' + object_to_print.blog_info.name + '<br />';
		result += '------ Description: ' + object_to_print.blog_info.description + '<br />';
		result += '------ URL: ' + object_to_print.blog_info.url + '<br />';
		result += '------ Admin email: ' + object_to_print.blog_info.admin_email + '<br />';	
	}

	if (object_detail.keep_themes == "1" ) {
		result += '- Keep themes<br />';
	}
	else {
		if (object_detail.themes ) {

			let themes = object_detail.themes;

			result += '- Themes:<br />';

			themes.forEach( (theme) => {
			  result += '---- ' + theme.action + ' <b>' + theme.name + '</b><br />';
			});
		}
	}

	if (object_detail.keep_plugins == "1" ) {
		result += '- Keep plugins<br />';
	} else {

		if (object_detail.plugins ) {

			let plugins = object_detail.plugins;

			result += '- Plugins:<br />';

			plugins.forEach( (plugin) => {
			  result += '---- ' + plugin.action + ' <b>' + plugin.name + '</b><br />';
			});
		}
	}

	if (object_detail.keep_users == "1" ) {
		result += '- Keep users<br />';
	} else {
		if (object_detail.users ) {

			let users = object_detail.users;

			result += '- Users:<br />';

			users.forEach( (user) => {
			  result += '---- ' + user.action + ' <b>' + user.userlogin + '</b><br />';
			});
		}
	}

	if (object_detail.keep_plugin_configuration == "1" ) 
		result += '- Keep plugin configuration<br />'; 
	else {

		console.log(object_detail);
		result += '- Advanced WP Reset config.:<br />';

		if (object_detail.plugin_config.snapshots == "1" )
			result += '---- Keep the snapshots<br />';

		if (object_detail.plugin_config.custom_resets == "1" )
			result += '---- Keep the custom Resets<br />';

		if (object_detail.plugin_config.collections == "1" )
			result += '---- Keep the collections<br />';

		if (object_detail.plugin_config.visibility_settings == "1" )
			result += '---- Keep visibility settings<br />';
	}


	return result;

}

function awr_create_object ( object_type ) {


	// For snapshot, collection, or reset_configuration: action = awr_create_snapshot/collection/reset_configuration
	action = "awr_create_" + object_type;

	let original_object_type = object_type;
	// For collection create and run: action = awr_create_and_run_collection
	if (object_type == 'collection_and_run') {
		action = 'awr_create_and_run_collection';
		object_type = 'collection';
	}
		
	let data = {};
	data['name'] = jQuery('#awpr-add-' + object_type + '-name').val();
	
	if(data['name'] == "") {
		awr_show_error ( awr_ajax_obj.no_name_provided + ' for your ' + object_type ); 
		return;
	}

	if ( object_type == 'collection' ) {

		data['periodicity'] = jQuery("input[name='awr-collection-periodicity']:checked").val();
		if ( data['periodicity'] == '' ) {
			awr_show_error ( 'Please check when you want to run your collection' ); 
			return;
		}

		var tasks = [];

		jQuery(".collection-task:checked").each((index, option) => {
			tasks.push(option.name);
		});

		if ( !Array.isArray(tasks) || tasks.length <= 0 ) {
			awr_show_error ( 'No tool selected to run for your collection' ); 
			return;
		}
		data['tasks'] = tasks;
	}

	//console.log(data);

	let message = 'Creating the ' + object_type + ' ' + data['name'] + ' ...';
	let message_done = 'The ' + object_type + ' ' + data['name'] + ' has been created';

	if ( original_object_type == 'create_and_run' ) {
		message = 'Creating and running  the ' + object_type + ' ' + data['name'] + ' ...';
		message_done = 'The ' + object_type + ' ' + data['name'] + ' has been created and run';
	}

	awr_show_processing_msg_box( );
	
	jQuery.ajax({
		type	: "post",
		url		: awr_ajax_obj.ajaxurl,
		cache	: false,
		data	: {
			"action"			: action,
			"data"				: data,
			"security"			: awr_ajax_obj.ajax_nonce
		},
		success	: (response) => {

			if(response !== null){

				awr_show_success ( message_done ); 

				// Reset the form // 
				jQuery('#add-' + object_type + '-form').trigger("reset");

				// display_snapshot(JSON.parse(response));
				awr_load_list ( object_type );

				//const targetDiv = jQuery('#list-' + object_type);
        		//jQuery("html, body").animate({ scrollTop: targetDiv.offset().top }, "slow");

			}else{
				awr_show_error ( response.data ); 
			}

			jQuery('#awpr-add-' + object_type + '-form').trigger('reset');

		},
		error: function(jqXHR, textStatus, errorThrown) {
			awr_print_error( jqXHR );
		},
		complete: function () {
		}
	});
}

function awr_download_object ( object_type, id, name ) {
	
	// Show processing msg box
	awr_show_processing_msg_box( 'Downloading ...' );

	jQuery.ajax({
		type 	: "get",
		url		: awr_ajax_obj.ajaxurl,
		cache	: false,
		data: {
			'action'	: 'awr_download_' + object_type,
			'id'		: id,
			'security'	: awr_ajax_obj.ajax_nonce
		}, 
		success: function( response ) {
			
			// Convert the response to a Blob
			const blob = new Blob([response], { type: 'application/octet-stream' });

			// Create a temporary URL for the Blob
			const downloadUrl = URL.createObjectURL(blob);

			// Create a temporary anchor element to trigger the download
			const anchor = document.createElement('a');
			anchor.href = downloadUrl;
			anchor.download = name + '.sql'; // Replace with the desired filename and extension
			anchor.click();

			// Clean up the temporary URL and anchor
			URL.revokeObjectURL(downloadUrl);

			awr_show_success('The ' + object_type + ' has been downloaded');
			
		},
		error: function( jqXHR, textStatus, errorThrown ) {
			//alert('File download failed.');
			awr_print_error( jqXHR );
		}
	});
	
}

function awr_compare_object( object_type, id, name ) {

	// Show processing msg box
	awr_show_processing_msg_box( 'Comparing current ' + object_type + ' to ' + name + ' ...' );

	jQuery.ajax({
		type 	: "post",
		url		: awr_ajax_obj.ajaxurl,
		cache	: false,
		data: {
			'action'	: 'awr_compare_' + object_type,
			'id'		: id,
			'security'	: awr_ajax_obj.ajax_nonce
		}, 
		success: function(result) {
			//awr_show_success ();
			//awr_close_msg_box();

			result = JSON.parse(result);
			awr_show_comparison_hardcoded(result.current_only, result.snapshot_only, result.identical, result.differences); // ( result );

			//console.log(result);


			///jQuery("#snapshot_comparison").html( result );
		},
		error: function( jqXHR, textStatus, errorThrown ) {
			awr_show_error( awr_ajax_obj.unknown_error );
		}
	});
}

function awr_execute_object( jQuery_object, object_type, id, name ) {

	if ( !id ) {
		awr_show_error ( 'No ' + object_type + ' selected to run.' );
		return;
	}

	let params =  { message:awr_ajax_obj.custom_warning + '<br><br><b>Execute the ' + object_type + ' ' + name + '</b>', footer: "<font color='red'>" + awr_ajax_obj.irreversible_msg + "</font>" };
	
	if ( object_type == 'snapshot' ) {

		snapshot_wp_version = jQuery_object.data('wp-version');

		if ( jQuery_object.data('wp-version') == awr_ajax_obj.wp_version )
			params = { message:awr_ajax_obj.custom_warning + '<br><br><b>Restore the ' + object_type + ' ' + name + '</b>', footer: "<font color='red'>" + awr_ajax_obj.irreversible_msg + "</font>" };
		else 
			params = { message:awr_ajax_obj.custom_warning + '<br><br>The current version of WP ' + awr_ajax_obj.wp_version + ' is different from the snapshot one ' + snapshot_wp_version + '. It is recommended to switch to this version before restoring this snapshot.', footer: "<font color='red'>" + awr_ajax_obj.irreversible_msg + "</font>" };
	}
	
	awr_show_confimation ( params ).then( (result) => {

		// If the user clicked on "confirm", call reset function
		if( result.value ){

			// Show processing msg box
			awr_show_processing_msg_box( 'Running the ' + object_type + ' ' + name + ' ...' );

			jQuery.ajax({
				type 	: "post",
				url		: awr_ajax_obj.ajaxurl,
				cache	: false,
				data: {
					'action'	: 'awr_execute_' + object_type,
					'id'		: id,
					'security'	: awr_ajax_obj.ajax_nonce
				},
				success: function(result) {
					
					awr_show_success ( 'The ' + object_type + ' ' + name + ' has been executed' );
					
					//jQuery("#feedback_section").html( JSON.stringify(result) );

					result_in_json = JSON.parse(result);

					if(result_in_json.action == 'reload') {
						location.reload();
					}else if(result_in_json.action == 'redirect') {
						window.location.href = result_in_json.redirect_to;
					}else if (result_in_json.action == 'keep') {
						jQuery('#AWR_full_reset_form').trigger("reset");
						awr_load_list ('reset_configuration');
					}else {
						console.log('error');
						console.log(result_in_json);
					}

				},
				error: function(jqXHR, textStatus, errorThrown) {
					awr_print_error( jqXHR );
				}
			});
		}
	});
}

function awr_print_error ( jqXHR ) {
	//awr_show_error ( awr_ajax_obj.unknown_error );
	//empty_reset_confirmation_input();

    if ( jqXHR.hasOwnProperty('responseJSON') ) {
					
		result_in_json = jqXHR.responseJSON;

		if ( result_in_json.hasOwnProperty('message') ){
			awr_show_error ( result_in_json.message );
		} else {
			awr_show_error (JSON.stringify( result_in_json ))
		}

		return;
	} 

	if (jqXHR.hasOwnProperty('responseText') ) {
		awr_show_error(jqXHR.responseText);
		return ;
	} 

	if (jqXHR.status === 403) {
		awr_show_error ( 'Error 403, please refresh the page.' );
		return;
    }

	awr_show_error ( awr_ajax_obj.unknown_error );
}

// object_type is collection, snapshot
function awr_edit_object( object_type, id ) {
	
	// Reset the form // 
	jQuery('#update-' + object_type + '-form').trigger("reset");

	let coll_tr = jQuery('#coll-' + id);
	let element = coll_tr.data(object_type);
	
	jQuery('#update-' + object_type + '-name').val(element.name);
	jQuery('#update-' + object_type + '-id').val(id);
	
	for(let option in element) {

		if ( 'name' == option ) continue;

		jQuery('#update-' + option + '').prop( "checked", true );
		
		if(option === "wp-version") {
			//console.log('#wp_version_switch_' + object_type + '_update');
			//console.log(element[option]);
			jQuery('#wp_version_switch_' + object_type + '_update').val(element[option]);
		}
	}
	
	jQuery('#update-' + object_type + '-button').prop("disabled", false);
}

function awr_delete_object ( object_type, id, name ) {
	
	if ( !id ) {
		awr_show_error ( 'No ' + object_type + ' selected to delete.' );
		return;
	}

	let params = { message:awr_ajax_obj.custom_warning + '<br><br><b>Delete the ' + object_type + ' ' + name + '</b>', footer: "<font color='red'>" + awr_ajax_obj.irreversible_msg + "</font>" };
	
	awr_show_confimation ( params ).then( (result) => {

		// If the user clicked on "confirm", call reset function
		if( result.value ){

			awr_show_processing_msg_box( 'Deleting ' + object_type + ' ' + name + ' ...');

			jQuery.ajax({
				type 	: "post",
				url		: awr_ajax_obj.ajaxurl,
				cache	: false,
				data: {
					'action'				: 'awr_delete_' + object_type,
					'id'					: id,
					'security'				: awr_ajax_obj.ajax_nonce
				},
				success: function(result){
					
					if(result !== null){	
					// Show success/error message
					//if(result == 1) {
						awr_show_success( 'The ' + object_type + ' ' + name + ' has been deleted' );
						awr_load_list ( object_type );
					}else{
						awr_show_error( result.data );
					}
				
				},					
				error: function(jqXHR, textStatus, errorThrown) {
					awr_print_error( jqXHR );
				}
			});
		}

	});
}

function awr_bulk_delete_object ( object_type ) {
	
	var ids = [];

	jQuery('.awr-' + object_type + '-bulk:checked').each((index, input) => {
		ids.push(input.value);
	});

	if ( id.length <= 0 ) {
		awr_show_error ( 'No ' + object_type + ' selected to delete.' );
		return;
	}

	let params = { message:'Are you sure you want to delete these items?', footer: "<font color='red'>" + awr_ajax_obj.irreversible_msg + "</font>" };
	
	awr_show_confimation ( params ).then( (result) => {

		// If the user clicked on "confirm", call reset function
		if( result.value ){

			awr_show_processing_msg_box( 'Deleting ...');

			jQuery.ajax({
				type 	: "post",
				url		: awr_ajax_obj.ajaxurl,
				cache	: false,
				data: {
					'action'				: 'awr_bulk_delete_' + object_type,
					'ids'					: ids,
					'security'				: awr_ajax_obj.ajax_nonce
				},
				success: function(result){
					
					if(result !== null){	
					// Show success/error message
					//if(result == 1) {
						awr_show_success( 'Deleted' );
						awr_load_list ( object_type );
					}else{
						awr_show_error( result.data );
					}
				
				},					
				error: function(jqXHR, textStatus, errorThrown) {
					awr_print_error( jqXHR );
				}
			});
		}

	});
}

jQuery(document).ready(function(){

	jQuery("body").on("click", '.objects-action', function(e){
		
		e.preventDefault();
		
		let object_name = jQuery(this).data('object');
		let id = jQuery(this).data('id');
		let name = jQuery(this).data('name');
		let action = jQuery(this).data('action');

		/*if ( action == 'edit' ) {
			return awr_edit_object ( object_name, id );
		}else*/ if ( action == 'delete' ) {
			return awr_delete_object ( object_name, id, name );
		} else if ( action == 'execute' ) {
			return awr_execute_object ( jQuery(this), object_name, id, name );
		}else if ( action == 'download' ) {
			return awr_download_object ( object_name, id, name );
		}else if ( action == 'compare' ) {
			return awr_compare_object ( object_name, id, name );
		}


	});
});
