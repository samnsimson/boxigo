$(document).ready(function(){
  $('#smartwizard').smartWizard({
  	transitionEffect: 'fade', // Effect on navigation, none/slide/fade
    transitionSpeed: '400'
  });
});

$(function () {
    $('.btn-radio-1').click(function(e) {
        $('.btn-radio-1').not(this).removeClass('active btn-success')
    		.siblings('input').prop('checked',false)
    	$(this).addClass('active btn-success')
            .siblings('input').prop('checked',true)
    });
    $('.btn-radio-2').click(function(e) {
        $('.btn-radio-2').not(this).removeClass('active btn-success')
    		.siblings('input').prop('checked',false)
    	$(this).addClass('active btn-success')
            .siblings('input').prop('checked',true)
    });
    $('.btn-radio-3').click(function(e) {
        $('.btn-radio-3').not(this).removeClass('active btn-success')
    		.siblings('input').prop('checked',false)
    	$(this).addClass('active btn-success')
            .siblings('input').prop('checked',true)
    });
    $('.btn-radio-4').click(function(e) {
        $('.btn-radio-4').not(this).removeClass('active btn-success')
    		.siblings('input').prop('checked',false)
    	$(this).addClass('active btn-success')
            .siblings('input').prop('checked',true)
    });
    $('.btn-radio-5').click(function(e) {
        $('.btn-radio-5').not(this).removeClass('active btn-success')
    		.siblings('input').prop('checked',false)
    	$(this).addClass('active btn-success')
            .siblings('input').prop('checked',true)
    });

});

var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

$('#dp,#dp2').datepicker({
	onRender: function(date) {
    	return date.valueOf() < now.valueOf() ? 'disabled' : '';
  	},
	format:"dd/mm/yyyy"
});