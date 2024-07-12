
	
	$(document).on('click', '.section_faq_wrap_item', function(event){
	//предотвращаем скрытие меню, по нажатии на кнопку и на само меню
	$('.section_faq_wrap_item').removeClass('open');
  $(this).addClass('open');
   event.stopPropagation();
	
})
$(document).on('click', '.section_faq_wrap_item.open', function(event){
  $(this).removeClass('open');
   event.stopPropagation();
	
})

if ($(window).width() < 992){
$('#nav-trigger, .bg-hide').on('click', function(){
	$(this).toggleClass("active");
	$('header_nav').toggleClass('active');
	$('body').toggleClass('menu-active');
	$('header_nav li').removeClass('active');
	$('body').removeClass('sub-menu-active');
	//return false;
});
$('li.parent').on('click', function(){
	$(this).toggleClass("active");
	//return false;
});

};


$(document).ready( function () {


    // VARIABLES
    // ----------------------------------------------------------

    var amount, percent, result, creditsum, credittime, creditprocent, monthprice;
    var calculator = $('.calculator');
    var calculatorBill = calculator.find('.calculator__price'); // общая сумма
    var calculatorTip = calculator.find('.calculator__tip'); // процент первого взноса
    var calculatorPrice = calculator.find('#price'); 
    var calculatorName = calculator.find('#namevalue'); 
    var calculatorResult = calculator.find('.calculator__result');
    var tipAmount = calculator.find('.tip-amount');
    var timeAmount = calculator.find('.time-amount');
	var calculatorTime = calculator.find('.calculator__time'); // тайм
	var calculatorMarka = calculator.find('#marka');
	var calculatorTarget = calculator.find('#target');
	var choise = calculator.find('#choise');
	var calcsubmit = calculator.find('#calcsubmit');

	

	// ((общая сумма - первый взнос) умножить на ((100 + процент*тайм/12)%/100)/тайм


    // INIT BILL
    // ----------------------------------------------------------

    $(window).on('DOMContentLoaded', function () {
        tipAmount.text( calculatorTip.val() + '%' );
        amount = calculatorBill.val() * 1;
        percent = calculatorTip.val() * 1;
        result = amount + amount * ( percent / 100 );
      //  calculatorResult.text( result.toFixed(2) + ' ₽' );



        timeAmount.text( calculatorTime.val() + 'мес' );
        credittime = calculatorTime.val() * 1;
        percentt = calculatorTip.val() * 1;
        resultt = amountt + amountt * ( percentt / 100 );
       // calculatorResult.text( resultt.toFixed(2) + ' ₽' );
		creditsum = amount - amount * ( percent / 100 );
		creditprocent = 17;
		monthprice = ( creditsum * (( 100 + creditprocent * credittime / 12 ) / 100 )) / credittime;
		calculatorResult.text( 'от' + monthprice.toFixed(2) + ' ₽' );

    });


    // RANGE FUNCTION
    // ----------------------------------------------------------

    calculatorTip.on('change', function () {

        if ( calculatorBill.val() === '' || isNaN( calculatorBill.val() ) ) {
            alert('Enter bill amount, please!')
        } else {
            amount = calculatorBill.val() * 1;
			credittime = calculatorTime.val() * 1;
			percentt = calculatorTip.val() * 1;
        percent = calculatorTip.val() * 1;
			
        }


		tipAmount.text( calculatorTip.val() );

		creditsum = amount - amount * ( percent / 100 );
		creditprocent = 17;
		monthprice = ( creditsum * (( 100 + creditprocent * credittime / 12 ) / 100 )) / credittime;
		calculatorResult.text( '' + monthprice.toFixed(0).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ') + ' ₽' );

    });
    calculatorPrice.on('change', function () {

        if ( calculatorBill.val() === '' || isNaN( calculatorBill.val() ) ) {
            alert('Enter bill amount, please!')
        } else {
            amount = calculatorBill.val() * 1;
			credittime = calculatorTime.val() * 1;
			percentt = calculatorTip.val() * 1;
        percent = calculatorTip.val() * 1;
			
        }


		tipAmount.text( calculatorTip.val() );

		creditsum = amount - amount * ( percent / 100 );
		creditprocent = 17;
		monthprice = ( creditsum * (( 100 + creditprocent * credittime / 12 ) / 100 )) / credittime;
		calculatorResult.text( '' + monthprice.toFixed(0).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ') + ' ₽' );

    });
    calculatorTime.on('change', function () {

        if ( calculatorBill.val() === '' || isNaN( calculatorBill.val() ) ) {
            alert('Enter bill amount, please!')
        } else {
			amount = calculatorBill.val() * 1;
			credittime = calculatorTime.val() * 1;
			percentt = calculatorTip.val() * 1;
			percent = calculatorTip.val() * 1;
        }

		timeAmount.text( calculatorTime.val()  );
		creditsum = amount - amount * ( percent / 100 );
		creditprocent = 17;
		monthprice = ( creditsum * (( 100 + creditprocent * credittime / 12 ) / 100 )) / credittime;
		calculatorResult.text( '' + monthprice.toFixed(0).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ') + ' ₽' );
    });




	calculatorMarka.on('change', function () {
		let choisevalue = document.getElementById("marka").value; 
		document.getElementById("choise").innerHTML = choisevalue;
	});
	calculatorTarget.on('change', function () {
		let pointvalue = document.getElementById("target").value; 
		document.getElementById("point").innerHTML = pointvalue;
	});
	calculatorName.on('change', function () {
		let pricevalue = document.getElementById("price").value; 
		let monthlyprice = document.getElementById("monthlypricevalue").innerHTML; 
		let pointvalue = document.getElementById("target").value; 
		let choisevalue = document.getElementById("marka").value; 
		let tipvalue = document.getElementById("tip").value; 
		let timevalue = document.getElementById("time").value; 

		$('#pricevalue').prop("value", pricevalue); 
		$('#monthlyprice').prop("value", monthlyprice); 
		$('#choise').prop("value", choisevalue); 
		$('#point').prop("value", pointvalue); 
		$('#tipvalue').prop("value", tipvalue); 
		$('#timevalue').prop("value", timevalue); 
	});


});


const sliderEl = document.querySelector("#time")
const sliderElTip = document.querySelector("#tip")
const sliderValue = document.querySelector("span.time-amount")
const sliderValueTip = document.querySelector("span.tip-amount")

sliderEl.addEventListener("input", (event) => {
  const tempSliderValue = event.target.value; 
  sliderValue.textContent = tempSliderValue;
 progress = 0;
 otstup = 0;
  
  if (tempSliderValue == 12) { progress = 0} 
  else if (tempSliderValue == 24) { progress = 25,  otstup = 4} 
  else if (tempSliderValue == 36) { progress = 50,  otstup = 7} 
  else if (tempSliderValue == 48) { progress = 75,  otstup = 10} 
  else if (tempSliderValue == 60) { progress = 100,  otstup = 14} 
  else {   progress = (( 10 * sliderEl.max ) / tempSliderValue)  ;}
  sliderEl.style.background = `linear-gradient(to right, #0475de ${progress}%, #fff ${progress}%)`;
  sliderValue.style.left = `calc( ${progress}% - ${otstup}px)`;
})
sliderElTip.addEventListener("input", (event) => {
  const tempSliderValueTip = event.target.value; 
  sliderValueTip.textContent = tempSliderValueTip;
 progressTip = 0;
 otstupTip = 2;
  
  if (tempSliderValueTip == 15) { progressTip = 0} 
  else if (tempSliderValueTip == 20) { progressTip = 14.3,  otstupTipn = 2} 
  else if (tempSliderValueTip == 25) { progressTip = 28.6,  otstupTipn = 4} 
  else if (tempSliderValueTip == 30) { progressTip = 42.9,  otstupTipn = 6} 
  else if (tempSliderValueTip == 35) { progressTip = 57.2,  otstupTipn = 8} 
  else if (tempSliderValueTip == 40) { progressTip = 71.5,  otstupTipn = 10} 
  else if (tempSliderValueTip == 45) { progressTip = 85.8,  otstupTipn = 12} 
  else if (tempSliderValueTip == 50) { progressTip = 100,  otstupTipn = 14} 
  else {   progressTip = (( 10 * sliderElTip.max ) / tempSliderValueTip)  ;}
  sliderElTip.style.background = `linear-gradient(to right, #0475de ${progressTip}%, #fff ${progressTip}%)`;
  sliderValueTip.style.left = `calc( ${progressTip}% - ${otstupTipn}px)`;
})