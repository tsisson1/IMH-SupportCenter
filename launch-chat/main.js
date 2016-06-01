function showNextButton(){
	$('html, body').animate({
		scrollTop: $('#after_asr').offset().top
                }, 3000);
}





var ajaxSearchTimeout = 5;
var launchChatIn = 3;






function fetch_ajax_search_results()
{

	//START - cc additions
	var selectDept = $('#rdid').val();
	//console.log("Value of rdid is: ", selectDept);

	if (selectDept == "sales") {
		var salesDept = $('#rdid2').val()
		//console.log("Value of rdid2 is: ", salesDept);
		
		var o = new Option("Sales", salesDept);
		$(o).html("Sales");
		$("#rdid").append(o);


		$('#rdid').val( salesDept );


		var selectDept2 = $('#rdid').val();
		//console.log("New Value of rdid is: ", selectDept2);
	}

        var selectDept2 = $('#rdid3').val();
    if (selectDept2 == "AMP") {
        //console.log("Value of rdid2 is: ", salesDept);

        $('#rdid').val( '1621843185299383618' );


        var selectDept2 = $('#rdid').val();
        //console.log("New Value of rdid is: ", selectDept2);
    }

	//END - cc additions

	// required fields
	rf = requiredFields();
        if( rf != true ){
                alert(rf);
		return false;
	}

	// ajax search only on support/billing
        var dep = $('#rdid').val();
        if(dep != "1621843185299383618" && dep != "2324923566971164486")
        {
                docprechat('insert',function(){
                        noResultsFound("Thank you.");
                        }
                );
                return;
        }

	// reset interface
	$('#asr').slideUp('slow');
	$('#asr_help').slideUp('slow');

	// timeout countdown
	var stime = ajaxSearchTimeout;
	$('#find_fast_support').slideDown('slow');
	$('#loading_asr').html("Searching... <img src='loading.gif' /> <span name='stime' id='stime'>" + stime + "</span>");
	// $('#loading_asr').slideDown('slow');

	$('#loading_asr').slideDown('slow',function() {
                $('html, body').animate({
                        scrollTop: $('#after_asr').offset().top
                        }, 3000);
	});

        var stime_counter = setInterval(countdownStime, 1000);
        function countdownStime()
        {
                stime = stime - 1;
                $('#stime').html(stime);
                if(stime <= 0)
                        clearInterval(stime_counter);
        }

	// run ajax and get results
	var user_question = $("#iq").val();
	user_question = user_question.substring(0,1000);
        var user_question_stripped_out_special_characters = user_question.replace(/[^\w\s!?,.~:;/=#-]/g,'');
        var user_question_url_encoded = encodeURIComponent(user_question_stripped_out_special_characters);
	$.ajax({
		url: 'https://www.inmotionhosting.com/support/gadgets/search/?searchword=' + user_question_url_encoded + '&rf=json',
		dataType: 'json',
		success: function(data) {
			processAjaxResults(data);
		},
		error: function(data, jqXHR, status, errorThrown){
			if(errorThrown == "timeout" || jqXHR == "timeout" || status == "timeout"){
				docprechat('timeout',function(){
					noResultsFound("Search results are taking too long.");
					}
				);
			}
			else{
				var data_as_string = JSON.stringify(data);
				// alert("jqXHR: " + jqXHR + " status: " + status + " error: " + errorThrown);
				doc_error("jqXHR: " + jqXHR + " status: " + status + " error: " + errorThrown + " data: " + data_as_string,function(){
					noResultsFound("No results found.");
					}
				);
			}
		},
		timeout: ajaxSearchTimeout * 1000
	});
}






function docprechat(task,callback)
{
	dp_n = jQuery('#vn').val();
	dp_e = jQuery('#ve').val();
	dp_d = jQuery('#vdn').val();
	dp_dep = jQuery('#rdid').val();
	dp_dep2 = jQuery('#rdid2').val();
	dp_q = jQuery('#iq').val();
	dp_id = jQuery('#timestamp_n_id').val();
	dp_ip = jQuery('#ip').val();
	dp_rc = jQuery('#ulsresults').children().length;
	dp_rhtml = jQuery('#ulsresults').html();


$(document).ready(function(){

        $("#rdid").click(function(){

            var text = $("#test").val();
            var comparingText = "hi";

            if (text == comparingText){

                alert( $("#test").val());

            }

        });
    });

	jQuery.post("https://www.inmotionhosting.com/support/includes/prechat.php",
	{
		dpv_n:dp_n,
                dpv_e:dp_e,
                dpv_d:dp_d,
                dpv_dep:dp_dep,
                dpv_q:dp_q,
		dpv_task:task,
		dpv_id:dp_id,
		dpv_rc:dp_rc,
		dpv_ip:dp_ip,
		dpv_rhtml:dp_rhtml
	},
	function(data,status){
		callback && callback();
		return true;
	});
}






function launchChat(){
	rf = requiredFields();
	if( rf != true )
		alert(rf);
	else{
		jQuery('#vn').val(toTitleCase(jQuery('#vn').val()));
		a = docprechat('launchChat', function(){
			initialQuestion = jQuery('#iq').val();
			new_iq = "\nEMAIL: " + jQuery('#ve').val() + "\nDOMAIN: " + jQuery('#vdn').val() + "\nQUESTION:\n" + initialQuestion.substring(0,1000);
	                jQuery('#iq').val(new_iq);
        	        document.getElementById("prechatform").submit();
                	// alert('launching chat...');
                	}
		);
	}
}
function launchChatCS(){
    rf = requiredFields();
    if( rf != true )
        alert(rf);
    else{
        jQuery('#vn').val(toTitleCase(jQuery('#vn').val()));
        a = docprechat('launchChat', function(){
            initialQuestion = jQuery('#iq').val();
            new_iq = "\nEMAIL: " + jQuery('#ve').val() + "\nDOMAIN: " + jQuery('#vdn').val() + "\nVERIFICATION: " + jQuery('#vdn').val() + "\nQUESTION:\n" + initialQuestion.substring(0,1000);
                    jQuery('#iq').val(new_iq);
                    document.getElementById("prechatform").submit();
                    // alert('launching chat...');
                    }
        );
    }
}


function launchChatSup(){
        rf = requiredFields();
        if( rf != true )
                alert(rf);
        else{
                jQuery('#vn').val(toTitleCase(jQuery('#vn').val()));
                a = docprechat('launchChat', function(){
                        initialQuestion = jQuery('#iq').val();
                        new_iq = "\nEMAIL: " + jQuery('#ve').val() + "\nDOMAIN: " + jQuery('#vdn').val() + "\nVERIFICATION: " + jQuery('#vver').val()  + "\nSupport Category: " + jQuery("#rdid3").val() + "\nQUESTION:\n" + initialQuestion.substring(0,1000);
                        jQuery('#iq').val(new_iq);
                        document.getElementById("prechatform").submit();
                        // alert('launching chat...');
                        }
                );
        }
}





function clickResult(){
	docprechat('clickResult');
}






function requiredFields(){
	dp_n = jQuery('#vn').val().trim();
        dp_e = jQuery('#ve').val().trim();
        dp_dep = jQuery('#rdid').val().trim();
	dp_q = jQuery('#iq').val().trim();

	if(dp_n.length < 1)
		return "Please enter a name";
	if(dp_e.length < 1)
		return "Please enter your email address";
	if(dp_e.indexOf("@") == -1 || dp_e.indexOf(".") == -1)
		return "Your email address does not appear to be formatted correctly";
	if(dp_dep.length < 1)
		return "Please choose a department";
	if(dp_q.length < 1)
		return "Please type in a question";

	return true;
}



function noResultsFoundSales(mg){
    $('html, body').animate({scrollTop: $('#after_asr').offset().top}, 3000);
    var lcs_count = launchChatIn;
    var lcs_counter = setInterval(lcs_timer, 1000);
    $('#loading_asr').html(mg + " Launching chat in <span name='lcs' id='lcs'>" + lcs_count + "</span> seconds...");
    function lcs_timer(){
        lcs_count = lcs_count - 1;
        $('#lcs').html(lcs_count);
        if(lcs_count <= 0){
            clearInterval(lcs_counter);
            launchChat();
        }
    }
}

function noResultsFound(mg){
	$('html, body').animate({scrollTop: $('#after_asr').offset().top}, 3000);
	var lcs_count = launchChatIn;
	var lcs_counter = setInterval(lcs_timer, 1000);
	$('#loading_asr').html(mg + " Launching chat in <span name='lcs' id='lcs'>" + lcs_count + "</span> seconds...");
	function lcs_timer(){
		lcs_count = lcs_count - 1;
		$('#lcs').html(lcs_count);
		if(lcs_count <= 0){
			clearInterval(lcs_counter);
			launchChat();
		}
	}
}
function processAjaxResults(data) {
	var result_count = 0;
	var results_html = "";
        for(var key in data) {
        	var obj = data[key];
                results_html = results_html + "<li><a href='" + obj['url'] + "?tsrc=prechat' onClick=\"clickResult(); window.open('" + obj['url']  + "',null,'status=1,menubar=1,resizable=1,toolbar=1,scrollbars=1,width=950,height=600'); return false;\">" + obj['title'] + "</a><br />" + obj['description'] + "</li>";
                result_count++;
	}
	if( result_count > 0 ) {
		results_html = "<ul class='sresults' name='ulsresults' id='ulsresults'>" + results_html + "</ul>";
		document.getElementById('asr').innerHTML = results_html;
		$('#asr_help').fadeIn('slow');
		$('#loading_asr').slideUp("slow");
		$('#asr').slideDown('slow',function() {
		$('html, body').animate({
			scrollTop: $('#after_asr').offset().top
			}, 3000);
			docprechat('insert');
		});
	}
	else
	{
		docprechat('insert',function(){
			noResultsFound("No results found.");
			}
		);
	}
}






function searchAgain()
{
	$('#find_fast_support').slideUp('slow');
	$('#asr').slideUp('slow');
	$('#asr_help').slideUp('slow');

	$('#loading_asr').html("<input type='button' value='Next step' onclick='fetch_ajax_search_results();' class='blue_button'>");
	$('#loading_asr').slideDown('slow');

	var new_research_count = +$("#research_count").val() + 1;
	$("#research_count").val(new_research_count);
	timestamp_id_value = +$('#timestamp_n_id').val();

	if( new_research_count == "1" )
		new_id = (timestamp_id_value * 100) + (1*1);
	else
		new_id = timestamp_id_value + (1*1);
	$('#timestamp_n_id').val(new_id);
}






function doc_error(errorThrown,callback)
{
	dp_n = jQuery('#vn').val();
        dp_e = jQuery('#ve').val();
        dp_d = jQuery('#vdn').val();
        dp_dep = jQuery('#rdid').val();
        dp_q = jQuery('#iq').val();
        dp_id = jQuery('#timestamp_n_id').val();
        dp_ip = jQuery('#ip').val();
        dp_rc = jQuery('#ulsresults').children().length;

        jQuery.post("https://www.inmotionhosting.com/support/includes/prechat.php",
        {
                dpv_n:dp_n,
                dpv_e:dp_e,
                dpv_d:dp_d,
                dpv_dep:dp_dep,
                dpv_q:dp_q,
                dpv_id:dp_id,
                dpv_rc:dp_rc,
                dpv_ip:dp_ip,
		dpv_task:'log_error',
		dpv_error:errorThrown
        },
        function(data,status){
                callback && callback();
                return true;
        });
}






function toTitleCase(str)
{
    return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}
