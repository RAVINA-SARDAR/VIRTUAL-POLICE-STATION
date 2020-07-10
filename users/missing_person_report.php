<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>missing Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dcalendar.picker.css" rel="stylesheet">
<style type="text/css">
#deceased{
    background-color:#FFF3F5;
	padding-top:10px;
	margin-bottom:10px;
}
.remove_field{
	float:right;	
	cursor:pointer;
	position : absolute;
}
.remove_field:hover{
	text-decoration:none;
}



/*!Don't remove this!
 * jQuery DCalendar and DCalendar Picker plugin styles
 * 
 * Author: Dionlee Uy
 * Email: dionleeuy@gmail.com
 *
 * Date: Mon Mar 2 2013
 */
.calendar {
    position: relative;
	font-family: 'Century Gothic','Segoe UI', Calibri, Arial;
	font-size: 12px;
	border-collapse: collapse;
	margin: 0; padding: 0;
	z-index: 4;
	border:1px solid rgba(0,0,0,0.08);
	width: 250px;
	color: #000;
	text-align: center;
	background-color: #FFF;
}
.calendar th,
.calendar td {
	text-align: center;
	-webki-ttransition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.calendar th:first-child,
.calendar td:first-child {
	margin-left: 5px;
}
.calendar span {
	padding: 6px 4px; 
	display: block;
}
.calendar .month {
	padding: 15px;
}

.calendar .pMDate, .calendar .nMDate { color: #AAA; }
.calendar .date, .calendar .pMDate, .calendar .nMDate, .calendar .month { cursor: pointer; }
.calendar .date:hover, .calendar .pMDate:hover, .calendar .nMDate:hover, .calendar .month:hover { background-color: #E2E2E2; }
.calendar .date:active, .calendar .pMDate:active, .calendar .nMDate:active, .calendar .month:active { background-color: #22A7F0; color: #FFF; }
.calendar .selected {
	background-color: #22A7F0 !important;
	color: #FFF !important;
}

.calendar tr:first-child th {
	background-color: #FFF;
	padding: 4px;
	padding-top: 8px;
	font-size: 14px;
}
.calendar tr:first-child th { cursor: pointer; color:#000; }
.calendar tr:first-child th:hover { color:#22A7F0; }
.calendar tr:first-child th:active { color: #22A7F0; }
.calendar thead tr:nth-child(2) th { color: #555; padding: 8px 3px; }
.calendar #prev, .calendar #next {
	font-family: 'Times New Roman';
	font-size: 20px;
	padding: 0;
}
.calendar #today {
	text-align: center; cursor: pointer;
	color: #22A7F0; padding: 10px 6px;
}
.calendar #today:hover { color: #80A7DD; }
.calendar #today:active { color: #000; }
.calendar #currDay { color:#22A7F0; }
.datepicker {
	background: #ffffff url('https://cdn4.iconfinder.com/data/icons/small-n-flat/24/calendar-128.png') no-repeat right top;
	background-size: 30px 30px;;
}

</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/dcalendar.picker.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script type='text/javascript'>
	$(function() {
		//calendar call function
		$('.datepicker').dcalendar();
		$('.datepicker').dcalendarpicker();

		    var max_fields = 10; //maximum input boxes allowed
		    var x = 1; //initlal text box count
		
		$('#add').click(function () {		   
			if(x < max_fields){ //max input box allowed
			    x++; //text box increment
			    $("#addblock").before('<div class="col-md-12 col-sm-12" id="deceased">	<a href="#" class="remove_field" title="Remove">X</a>	<div class="form-group col-md-3 col-sm-3">            <label for="name">Name*</label>            <input type="text" class="form-control input-sm" id="name" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="gender">Gender*</label>            <input type="text" class="form-control input-sm" id="gender" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="age">Age*</label>            <input type="text" class="form-control input-sm" id="age" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="DOB">Date of Birth or Exact Birth Year*</label>            <input type="text" class="form-control input-sm datepicker" id="DOB'+x+'" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="DOD">Date of Death or Exact Death Year*</label>             <input type="text" class="form-control input-sm datepicker" id="DOD'+x+'" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="mother">Deceased Person\'s Mother Name*</label>            <input type="text" class="form-control input-sm" id="mother" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="father">Deceased Person\'s Father Name*</label>            <input type="text" class="form-control input-sm" id="father" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">	    <label for="photo">Upload Photo*</label>	    <input type="file" id="photo">	    <p class="help-block">Please upload individual photo. Group photo is not acceptable.</p>	</div></div>');

				$('.datepicker').dcalendarpicker();
			}  else{
				alert("Only 10 Names Allowed");
			}  
		});
		$(document).on('click', '.remove_field', function(e){
		        e.preventDefault(); 
			$(this).parent('div').remove(); 
			x--;
		});

		
	});
	</script>
  </head>
  <body>
<div class="panel panel-warning" style="margin:20px;">
	<div class="panel-heading">
        	<h3 class="panel-title">Missing Person Report </h3>
	</div>
<div class="panel-body">
    <form>
	<center><h4 >Missing Person Details </h4> <center>
	<hr>
<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-6 col-sm-6">
            <label for="name">Name*	</label>
            <input type="text" class="form-control input-sm" id="name" placeholder="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="email">Email*</label>
            <input type="email" class="form-control input-sm" id="email" placeholder="">
        </div>

        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Mobile*</label>
            <input type="text" class="form-control input-sm" id="mobile" placeholder="">
        </div>

	<div class="form-group col-md-6 col-sm-6">
	      <label for="address">Address*</label>
	      <textarea class="form-control input-sm" id="address" rows="3"></textarea>
	   </div>
	
	<div class="form-group col-md-6 col-sm-6">
            <label for="city">City*</label>
            <input type="text" class="form-control input-sm" id="city" placeholder="">
        </div>
	
	<div class="form-group col-md-6 col-sm-6">
            <label for="state">State*</label>
            <input type="text" class="form-control input-sm" id="state" placeholder="">
        </div>

	<div class="form-group col-md-6 col-sm-6">
            <label for="country">Country*</label>
            <input type="text" class="form-control input-sm" id="country" placeholder="">
        </div>

	<div class="form-group col-md-6 col-sm-6">
            <label for="pincode">Pincode</label>
            <input type="text" class="form-control input-sm" id="pincode" placeholder="">
        </div>
		<div class="form-group col-md-6 col-sm-6">
            <label for="pincode">Age</label>
            <input type="text" class="form-control input-sm" id="pincode" placeholder="">
        </div>
<div class="form-group col-md-6 col-sm-6">
            <label for="pincode">Gender</label>
            <input type="text" class="form-control input-sm" id="pincode" placeholder="">
        </div>
		<div class="form-group col-md-6 col-sm-6">
            <label for="pincode">color</label>
            <input type="text" class="form-control input-sm" id="pincode" placeholder="">
        </div>
		<div class="form-group col-md-6 col-sm-6">
            <label for="pincode">Height</label>
            <input type="text" class="form-control input-sm" id="pincode" placeholder="">
        </div>
		<div class="form-group col-md-6 col-sm-6">
            <label for="arrival"> Date of Birth</label>
            <input type="text" class="form-control input-sm datepicker" id="arrival" placeholder="">
        </div>
		<div class="form-group col-md-6 col-sm-6">
            <label for="pincode">Date of missing</label>
            <input type="text" class="form-control input-sm" id="pincode" placeholder="">
        </div>
		<div class="form-group col-md-6 col-sm-6">
            <label for="pincode">last place seen at</label>
            <input type="text" class="form-control input-sm" id="pincode" placeholder="">
        </div>
		<div class="form-group col-md-6 col-sm-6">
            <label for="pincode">What clothes last worn ?</label>
	      <textarea class="form-control input-sm" id="address" rows="3"></textarea>
        </div>
		<div class="form-group col-md-6 col-sm-6">
            <label for="pincode">What accessories were there ?</label>
	      <textarea class="form-control input-sm" id="address" rows="3"></textarea>
        </div>
		<div class="form-group col-md-6 col-sm-6">
            <label for="pincode">any possible reason for missing?</label>
	      <textarea class="form-control input-sm" id="address" rows="3"></textarea>
        </div>
	
</div>
<div class="col-md-12 col-sm-12" id="deceased">
<div class="form-group col-md-3 col-sm-3">
            <label for="gender">your name*</label>
            <input type="text" class="form-control input-sm" id="gender" placeholder="">
        </div>
	<div class="form-group col-md-3 col-sm-3">
            <label for="age">your relation with the missing person*</label>
            <input type="text" class="form-control input-sm" id="age" placeholder="">
        </div>
	<div class="form-group col-md-3 col-sm-3">
            <label for="DOB">your contact number*</label>
            <input type="text" class="form-control input-sm" id="age" placeholder="">
        </div>
	
	<div class="form-group col-md-3 col-sm-3">
	<label for="photo">Upload Photo of missing person *</label>
	    <input type="file" id="photo">
	    <p class="help-block">Please upload individual photo. Group photo is not acceptable.</p>
	
        </div>
		<div class="form-group col-md-3 col-sm-3">
	<label for="photo">Upload another Photo of missing person *</label>
	    <input type="file" id="photo">
	    <p class="help-block">Please upload individual photo. Group photo is not acceptable.</p>
	
        </div>
		<div class="form-group col-md-3 col-sm-3">
	<label for="photo">Upload id proof of missing person *</label>
	    <input type="file" id="photo">
	    <p class="help-block">Please upload individual photo. Group photo is not acceptable.</p>
	
        </div>
	
</div>


<hr>
<div class="col-md-6 col-sm-6">
	<div class="form-group col-md-3 col-sm-3 pull-right" >
			<input type="submit" class="btn btn-primary" value="Submit"/>
	</div>
</div>
<div >
	<div class="form-group col-md-3 col-sm-3 pull-right" >
			<input type="reset" class="btn btn-danger" value="Cancel"/>
	</div>
</div>
</form>

<script> /* -- DO NOT REMOVE --
 * jQuery DCalendar 1.1 and DCalendar Picker 1.1 plugin
 * 
 * Author: Dionlee Uy
 * Email: dionleeuy@gmail.com
 *
 * Date: Sat Mar 2 2013
 *
 * @requires jQuery
 * -- DO NOT REMOVE --
 */
if (typeof jQuery === 'undefined') { throw new Error('DCalendar.Picker: This plugin requires jQuery'); }
 
+function ($) {

    Date.prototype.getDays = function() { return new Date(this.getFullYear(), this.getMonth() + 1, 0).getDate(); };
	var months = ['January','February','March','April','May','June','July','August','September','October','November','December'],
		short_months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
		daysofweek = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'],

		DCalendar = function(elem, options) {
		    this.calendar = $(elem);
			this.today = new Date();	//system date
			this.date = this.today;		//current selected date, default is today
			this.viewMode = 'days';
			this.options = options;
			this.selected = (this.date.getMonth() + 1) + "/" + this.date.getDate() + "/" + this.date.getFullYear();
			
			if(options.mode === 'calendar')
				this.tHead = $('<thead><tr><th id="prev">‹</th><th colspan="5" id="currM"></th><th id="next">›</th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead>');
			else if (options.mode === 'datepicker')
				this.tHead = $('<thead><tr><th id="prev">‹</th><th colspan="5" id="currM"></th><th id="next">›</th></tr><tr><th>S</th><th>M</th><th>T</th><th>W</th><th>T</th><th>F</th><th>S</th></tr></thead>');
			this.tHead.find('#currM').text(months[this.today.getMonth()] +" " + this.today.getFullYear());
			this.calendar.prepend(this.tHead);
			var that = this;

			this.calendar.on('click', '#next', function() { initCreate('next'); })
				.on('click', '#prev', function() { initCreate('prev'); })
				.on('click', '#today', function() {
					that.viewMode = 'days';
					var curr = new Date(that.date),
						sys = new Date(that.today);
					if(curr.toString() != sys.toString()) { that.date = sys; }
					that.create('days');
				}).on('click', '.date, .pMDate, .nMDate', function() {
					var tClass = $(this).attr('class'),
						sdate = $(this).text(),
						cmonth = that.date.getMonth(),
						cyear = that.date.getFullYear();

					/* Calculate year */
					if(tClass === 'pMDate') { cyear = (cmonth === 0 ? cyear - 1 : cyear); }
					else if(tClass === 'nMDate') { cyear = (cmonth + 2 === 13 ? cyear + 1 : cyear); }
					/* Calculate month */
					if(tClass === 'pMDate'){ cmonth = (cmonth === 0 ? '12' : cmonth); }
					else if (tClass === 'nMDate') { cmonth = (cmonth + 2 === 13 ? '1' : cmonth + 2); }
					else { cmonth = cmonth + 1; }

					// Selected date
					that.selected = cmonth + '/' + sdate + '/' + cyear;

					if(that.options.mode === 'datepicker') {
						that.calendar.find('td').removeClass('selected');
						$(this).addClass('selected');
					}
					selectDate();
					return true;
				}).on('click', '#currM', function(){
					that.viewMode = 'months';
					that.create(that.viewMode);
				}).on('click', '.month', function(e){
					that.viewMode = 'days';
					var curr = new Date(that.date), y = that.calendar.find('#currM').text();
					curr.setMonth($(e.currentTarget).attr('num'));
					that.date = curr;
					that.create(that.viewMode);
				});

			function selectDate () {
				var newDate = formatDate(that.options.format);
				var e = $.Event('selectdate', {date: newDate});
				that.calendar.trigger(e);
			}

			function formatDate (format) {
				var d = new Date(that.selected), day = d.getDate(), m = d.getMonth(), y = d.getFullYear();
				return format.replace(/(yyyy|yy|mmmm|mmm|mm|m|dd|d)/gi, function (e) {
					switch(e.toLowerCase()){
						case 'd': return day;
						case 'dd': return (day < 10 ? "0"+day: day);
						case 'm': return m+1;
						case 'mm': return (m+1 < 10 ? "0"+(m+1): (m+1));
						case 'mmm': return short_months[m];
						case 'mmmm': return months[m];
						case 'yy': return y.toString().substr(2,2);
						case 'yyyy': return y;
					}
				});
			}

			function initCreate(o){
				var curr = new Date(that.date),
					currMonth = curr.getMonth(),
					currYear = curr.getFullYear();
				curr.setDate(1);
				if(that.viewMode === 'days') {
					curr.setMonth(currMonth + (o === 'next' ? 1 : -1));
				} else {
					curr.setFullYear(currYear + (o === 'next' ? 1 : - 1));
				}
				that.date = curr;
				that.create(that.viewMode);
			}

			this.create(this.viewMode);
		}

	DCalendar.prototype = {

		constructor : DCalendar, 

		//setDate : function(){},

		create : function(mode){
			var that = this, cal = [], tBody = $('<tbody></tbody>'), d = new Date(that.date), days = that.date.getDays(), day = 1, nStartDate = 1, selDate = that.selected.split('/');
			that.calendar.empty();
			if(mode === "days") {
				if(that.options.mode === 'calendar') {
					that.tHead = $('<thead><tr><th id="prev">‹</th><th colspan="5" id="currM"></th><th id="next">›</th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead>');
				} else if (that.options.mode === 'datepicker') {
					that.tHead = $('<thead><tr><th id="prev">‹</th><th colspan="5" id="currM"></th><th id="next">›</th></tr><tr><th>S</th><th>M</th><th>T</th><th>W</th><th>T</th><th>F</th><th>S</th></tr></thead>');
				}
				that.tHead.find('#currM').text(months[that.date.getMonth()] +" " + that.date.getFullYear());
				that.calendar.append(that.tHead);

				for(var i = 1; i <= 6; i++){
					var temp = [$('<td></td>'),$('<td></td>'),$('<td></td>'),$('<td></td>'),$('<td></td>'),$('<td></td>'),$('<td></td>')];

					while(day <= days){
						d.setDate(day);
						var dayOfWeek = d.getDay();
						if(day === that.today.getDate() 
							&& d.getMonth() === that.today.getMonth() 
							&& d.getFullYear() === that.today.getFullYear()) {
							temp[dayOfWeek].attr('id', 'currDay');
						} 
						if(that.options.mode === 'datepicker'
							&& (((d.getMonth() + 1) + "/" + day + "/" + d.getFullYear()) === (selDate[0] + "/" + selDate[1] + "/" + selDate[2]))) {
							temp[dayOfWeek].addClass('selected');
						}
						if(i === 1 && dayOfWeek === 0){
							break;
						} else if(dayOfWeek < 6){
							temp[dayOfWeek].html('<span>'+(day++)+'</span>').addClass('date');
						} else {
							temp[dayOfWeek].html('<span>'+(day++)+'</span>').addClass('date');
							break;
						}
					}
					/* For days of previous and next month */
					if (i === 1 || i > 4) {
						var p = new Date(that.date);
						// First week
						if (i === 1) {
							var pMonth = p.getMonth(), pDays = 0;
							p.setDate(1);
							p.setMonth(pMonth - 1);
							pDays = p.getDays();
							for (var a = 6; a >= 0; a--) {
								if (temp[a].text() === ''){
									temp[a].html('<span>' + (pDays--) + '</span>').addClass('pMDate');
									if (that.options.mode === 'datepicker' 
										&& (((d.getMonth()) + "/" + (pDays + 1) + "/" + d.getFullYear()) === (selDate[0] + "/" + selDate[1] + "/" + selDate[2]))) {
										temp[a].addClass('selected');
									}
								}
							}
						} 
						// Last week
						else if (i > 4) {
							for (var a = 0; a <= 6; a++) {
								if (temp[a].text() === ''){
									temp[a].html('<span>' + (nStartDate++) + '</span>').addClass('nMDate');
									if (that.options.mode === 'datepicker' 
										&& (((d.getMonth()+2) + "/" + (nStartDate - 1) + "/" + d.getFullYear()) === (selDate[0] + "/" + selDate[1] + "/" + selDate[2]))) {
										temp[a].addClass('selected');
									}
								}
							}
						}
					}
					cal.push(temp);
				}

				$.each(cal, function(i, v){
					var row = $('<tr></tr>'), l = v.length;
					for(var i = 0; i < l; i++) { row.append(v[i]); }
					tBody.append(row);
				});

				var sysDate = "Today: " + daysofweek[that.today.getDay()] + ", " + months[that.today.getMonth()] + " " + that.today.getDate() + ", " + that.today.getFullYear();
				tBody.append('<tr><td colspan="7" id="today">' + sysDate + '</td></tr>').appendTo(that.calendar);
			} else {
				this.tHead = $('<thead><tr><th id="prev">‹</th><th colspan="2" id="currM"></th><th id="next">›</th></tr>');
				that.tHead.find('#currM').text(that.date.getFullYear());
				that.tHead.appendTo(that.calendar);
				var currI = 0;
				for (var i = 0; i < 3; i++) {
					var row = $('<tr></tr>');
					for (var x = 0; x < 4; x++) {
						var col = $('<td align="center"></td>');
						var m = $('<span class="month" num="' + currI + '">' + short_months[currI] + '</span>');
						col.append(m).appendTo(row);
						currI++;
					}
					tBody.append(row);
				}
				var sysDate = "Today: " + daysofweek[that.today.getDay()] + ", "+ months[that.today.getMonth()] + " " + that.today.getDate() + ", " + that.today.getFullYear();
				tBody.append('<tr><td colspan="4" id="today">' + sysDate + '</td></tr>').appendTo(that.calendar);
			}
		}
	}

	/* DEFINITION FOR DCALENDAR */
	$.fn.dcalendar = function(opts){
		return $(this).each(function(index, elem){
			var that = this;
 			var $this = $(that),
 				data = $(that).data('dcalendar'),
 				options = $.extend({}, $.fn.dcalendar.defaults, $this.data(), typeof opts === 'object' && opts);
 			if(!data){
 				$this.data('dcalendar', (data = new DCalendar(this, options)));
 			}
 			if(typeof opts === 'string') data[opts]();
		});
	}

	$.fn.dcalendar.defaults = {
		mode : 'calendar',
		format: 'dd/mm/yyyy',
	};

	$.fn.dcalendar.Constructor = DCalendar;

	/* DEFINITION FOR DCALENDAR PICKER */
	$.fn.dcalendarpicker = function(opts){
		return $(this).each(function(){
			var that = $(this);
			var cal = $('<table class="calendar"></table>'), hovered = false, selectedDate = false;
			that.wrap($('<div class="datepicker" style="position:relative;"></div>'));
			cal.css({
				position:'absolute',
				left:0, display:'none',
				'box-shadow':'0 4px 6px 1px rgba(0, 0, 0, 0.14)',
				width:'230px',
			}).appendTo(that.parent());
			if(opts){
				opts.mode = 'datepicker';
				cal.dcalendar(opts);
			} else{
				cal.dcalendar({mode: 'datepicker'});
			}
			cal.hover(function(){
				hovered = true;
			}, function(){
				hovered = false;
			}).on('click', function(){
				if(!selectedDate)
					that.focus();
				else {
					selectedDate = false;
					$(this).hide();
				}
			}).on('selectdate', function(e){
				that.val(e.date).trigger('onchange');
			    that.trigger($.Event('dateselected', {date: e.date, elem: that}));
				selectedDate = true;
			});
			that.on('keydown', function(e){ if(e.which) return false; })
				.on('focus', function(){
					$('.datepicker').find('.calendar').not(cal).hide();
					cal.show();
				})
				.on('blur', function(){ if(!hovered) cal.hide(); });
		});
	}

}(jQuery);</script>

</div>
</body>
</html>