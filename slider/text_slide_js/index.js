////////////////////////////
// Twitter: @mikedevelops
////////////////////////////

// add as many adjectives as you like!
var adjs = ["very cool Take a look under the hood", "really exciting Take a look under the hood", "Take a look under the hood super awesome", " Take a look under the hood jQuery sliding"],
	sentence = $('#sentence'),
	adjList = $('#adjList'),
	stop = false;

// function to return the most up-to-date
// version of our adjective list
function getList() {
	return $('.adj');
}

// function to build the adjective list
// args: adjective array
function build(arr) {
	for (i=0; i<arr.length; i++) {
		var item = "<li class='adj'>";
		$(adjList).append(item + arr[i] + "</li>");
	}
}

// function to resize adjective list
// args: adjective list item
function resize(el) {
	$(adjList).animate({
		width: $(el).width(),
	}, 200);
}

// function to add slide-in transition
// args: element that needs to slide
function slideIn(el) {
	// duration slide is on screen
	var hold = 1000;
	// resize area to sliding element
	resize($(el));
	// add slide-in class
	$(el).addClass('slide-in');	
	// after 'hold' duration slide-out current item
	// then slide in next item
	setTimeout(function(){
		// check to see if loop should continue
		if (stop === true) {
			stop = false;
			return;
		}
		// slide current element out
		slideOut(el);
		// slide in next element in queue
		slideIn($(el).next());
	}, hold);
}

// function to add slide-out transition
// args: element that needs to slide
function slideOut(el) {
	// remove current class and add slide-out transition
	$(el).removeClass('slide-in').addClass('slide-out');
	// wait for slide tramsition to finish then
	// call 'change' function
	setTimeout(function(){
		change();
	}, 200);
}

// function to re-arrange adjective list
function change() {	
	// store last item index
	var i = adjs.length - 1;
	// detach element that has slide-out class
	// put to the bottom of the list after
	// the last item
	$('.adj:eq(' + i + ')').after($('.slide-out').detach());
	// remove class to send element back to original position
	$('.adj').removeClass('slide-out');
}

// build slider
build(adjs);
// init loop
slideIn(getList()[0]);

$('#stop').click(function(){
	// stop/start loop
	if ($(this).html() === "Start") {
		$(this).html("Stop");
		slideIn(getList()[0]);
	} else {
		stop = true;
		$(this).html("Start");	
	}
});
