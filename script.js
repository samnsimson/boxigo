$(document).ready(function(){
  $('#smartwizard').smartWizard({
  	transitionEffect: 'fade', // Effect on navigation, none/slide/fade
    transitionSpeed: '400',
    useURLhash:false,
  	showStepURLhash:false
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


(function($,undefined){
  '$:nomunge'; // Used by YUI compressor.

  $.fn.serializeObject = function(){
    var obj = {};

    $.each( this.serializeArray(), function(i,o){
      var n = o.name,
        v = o.value;

        obj[n] = obj[n] === undefined ? v
          : $.isArray( obj[n] ) ? obj[n].concat( v )
          : [ obj[n], v ];
    });

    return obj;
  };

})(jQuery);


var formItems = [];
$("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
	if(stepNumber == 0 ){
		var formoneitem = $('.form-one').serializeObject();
		formItems.formone = formoneitem;
	}
	if(stepNumber == 1){
		var formtwoitem = $('.form-two').serializeObject();
		formItems.formtwo = formtwoitem;
	}
	console.log(formItems);
});


function consoleOutput(){
	var consoleArray = {};
	var consoleitem = $('.form-one').serializeObject();
	consoleArray.formOne = consoleitem;
	console.log(consoleArray);
}