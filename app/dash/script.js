x = 0;
y = 0;
z = 0;
a = 0;
b = 0;
c = 0;
$(".b1").click(function() {
	if (a == 0) {
		setTimeout(function() {
			$(".sub2").addClass("fadeInUp");
			$(".main2").addClass("fadeInUp");
			$(".anidiv").css({ transform: "translate3d(100%, 0, 0)" });
		}, 2000);

		setTimeout(function() {
			$(".ntext1").addClass("slideInUp");
			$(".m1").addClass("slideInUp");
			$(".name1").addClass("c");
			$(".back1").css({ opacity: "1", display: "block" });
		}, 1000);

		setTimeout(function() {
			$(".n1").addClass("fadeIn");
			$(".anidiv").css({ "z-index": "2" });
			$(".aform").css({ opacity: "1" });
		}, 3000);
		$(".anidiv").addClass("anim1");
		$(".condiv1").addClass("anim1");
		a++;
	} else {
		$(".anidiv").css({ width: "100%" });
		setTimeout(function() {
			$(".condiv1").css({ transform: "translate3d(0%, 0, 0)" });
			$(".back1").css({ opacity: "1", display: "block" });
		}, 2000);
		setTimeout(function() {
			$(".anidiv").css({ transform: "translate3d(100%, 0, 0)" });
		}, 3500);
	}
});

$(".b2").click(function() {
	// if (b == 0) {
	// 	setTimeout(function() {
	// 		$(".sub3").addClass("fadeInUp");
	// 		$(".main3").addClass("fadeInUp");
	// 		$(".bankcards").addClass("fadeInUp");
	// 		$(".paybills").addClass("fadeInUp");
	// 		$(".anidiv").css({ transform: "translate3d(100%, 0, 0)" });
	// 	}, 2000);
	// 	setTimeout(function() {
	// 		$(".ntext2").addClass("slideInUp");
	// 		$(".m3").addClass("slideInUp");
	// 		$(".name2").addClass("c");
	// 		$(".anidiv").css({ "z-index": "4" });
	// 	}, 3000);

	// 	setTimeout(function() {
	// 		$(".n2").addClass("fadeIn");
	// 		// $(".anidiv").css({ "transform":"translate3d(0%, 0, 0)"})
	// 	}, 5000);
	// 	$(".anidiv").addClass("anim1");
	// 	$(".back2").css({ opacity: "1", display: "block" });
	// 	$(".condiv2").addClass("anim1");
	// 	b++;
	// } else {
	// 	$(".anidiv").css({ width: "100%" });
	// 	$(".condiv2").css({ width: "100%" });
	// 	$(".back2").css({ opacity: "1", display: "block" });
	// 	setTimeout(function() {
	// 		$(".condiv2").css({ transform: "translate3d(0%, 0, 0)" });
	// 	}, 2000);
	// 	setTimeout(function() {
	// 		$(".anidiv").css({ transform: "translate3d(100%, 0, 0)" });
	// 	}, 5500);
	// }
	window.location.href = "billing.php";
});

$(".b3").click(function() {
	window.location.href = "../store.php";
});

$(".b4").click(function() {
	window.location.href = "schedule.php";
});

$(".back1").click(function() {
	$(".anidiv").css({ transform: "translate3d(0%, 0, 0)" });
	setTimeout(function() {
		$(".condiv1").css({ transform: "translate3d(-100%, 0, 0)" });
		$(".anidiv").css({ transform: "translate3d(-100%, 0, 0)" });
	}, 2000);
	setTimeout(function() {
		$(".anidiv").removeClass("anim1");
		$(".anidiv").css({ width: "0" });
	}, 3500);
	setTimeout(function() {
		$(".anidiv").css({ transform: "translate3d(0%, 0, 0)" });
	}, 4200);
	$(".back1").css({ opacity: "1", display: "none" });
});

$(".back2").click(function() {
	$(".anidiv").css({ transform: "translate3d(0%, 0, 0)" });
	setTimeout(function() {
		$(".condiv2").css({ transform: "translate3d(-100%, 0, 0)" });
		$(".anidiv").css({ transform: "translate3d(-100%, 0, 0)" });
	}, 2000);
	setTimeout(function() {
		$(".anidiv").removeClass("anim1");
		$(".anidiv").css({ width: "0" });
	}, 3500);
	setTimeout(function() {
		$(".anidiv").css({ transform: "translate3d(0%, 0, 0)" });
	}, 4200);
	$(".back2").css({ opacity: "1", display: "none" });
});

$(".back3").click(function() {
	$(".anidiv").css({ transform: "translate3d(0%, 0, 0)" });
	setTimeout(function() {
		$(".condiv3").css({ transform: "translate3d(-100%, 0, 0)" });
		$(".anidiv").css({ transform: "translate3d(-100%, 0, 0)" });
	}, 2000);
	setTimeout(function() {
		$(".anidiv").removeClass("anim1");
		$(".anidiv").css({ width: "0" });
	}, 3500);
	setTimeout(function() {
		$(".anidiv").css({ transform: "translate3d(0%, 0, 0)" });
	}, 4200);
	$(".back3").css({ opacity: "1", display: "none" });
});

$(".n1").click(function() {
	console.log(x);
	if (x == 0) {
		$(".m1").removeClass("slideInUp");
		$(".m1").addClass("slideOutUp");
		$(".m2").addClass("slideOutUp");
	}
	x++;
	if (x == 2) {
		window.location = "create-group.php";
	}
});
$(".n2").click(function() {
	if (y == 0) {
		$(".m3").removeClass("slideInUp");
		$(".m3").addClass("slideOutUp");
		$(".m4").addClass("slideOutUp");
		x++;
	}
	if (y == 1) {
	}
});

$(".paybills").click(function() {
	if (z == 0) {
		$(".green").css({ left: "50%" });
		$(".tax").css({ color: "#fff" });
		$(".bills").css({ color: "#333" });
		z = 1;
	} else {
		$(".green").css({ left: "0%" });
		$(".tax").css({ color: "#333" });
		$(".bills").css({ color: "#fff" });
		z = 0;
	}
});

$(".bankcards .card1").click(function() {
	$(".page1").css({ transform: "translate(0, -100%)" });
	setTimeout(function() {
		$(".visa").addClass("fadeInUp");
		$(".main5").addClass("fadeInUp");
		$(".backup").addClass("fadeInUp");
		$(".show").addClass("fadeInUp");
	}, 1500);
});

$(".bankcards .card2").click(function() {
	$(".page2").css({ transform: "translate(0, -100%)" });
	setTimeout(function() {
		$(".main6").addClass("fadeInUp");
		$(".for1").addClass("fadeInUp");
		$(".backup2").addClass("fadeIn");
		$(".n3").addClass("fadeIn");
	}, 1500);
});
$(".bankcards .card3").click(function() {
	$(".page3").css({ transform: "translate(0, -100%)" });
	setTimeout(function() {
		$(".main7").addClass("fadeInUp");
		$(".for2").addClass("fadeInUp");
		$(".backup3").addClass("fadeIn");
		$(".n4").addClass("fadeIn");
	}, 1500);
});

$(".bankcards .card4").click(function() {
	$(".page4").css({ transform: "translate(0, -100%)" });
	setTimeout(function() {
		$(".main8").addClass("fadeInUp");
		$(".passbook").addClass("fadeInUp");
		$(".dabbe").addClass("fadeInUp");
		$(".backup4").addClass("fadeIn");
	}, 1500);
});

$(".backup1").click(function() {
	$(".page1").css({ transform: "translate(0, -0%)" });
});

$(".backup2").click(function() {
	$(".page2").css({ transform: "translate(0, -0%)" });
});

$(".backup3").click(function() {
	$(".page3").css({ transform: "translate(0, -0%)" });
});

$(".backup4").click(function() {
	$(".page4").css({ transform: "translate(0, -0%)" });
});

$(".show").click(function() {
	var cvv = $("#hid-cvv").val();
	$(".cvv-no").html(cvv);
});

$("#transfer-sub").submit(function(e) {
	e.preventDefault();
	var dataStr =
		"amount=" +
		document.getElementById("amount").value +
		"&accountno=" +
		document.getElementById("accountno").value +
		"&pass=" +
		document.getElementById("pass").value;
	$.ajax({
		url: "transfer.php",
		data: dataStr,
		type: "POST",
		success: function(p) {
			console.log(p);
		}
	});
});

function newSchedule(e) {
	var no_inputs = e.value;
	var newstr = "";
	for (var i = 0; i < no_inputs; i++) {
		var j = i + 1;
		newstr +=
			"<label>Please select Day " +
			j +
			"</label> <br><select class='input'><option>Monday</option><option>Tuesday</option><option>Wednesday</option><option>Thursday</option><option>Friday</option><option>Saturday</option><option>Sunday</option></select><br>";
	}
	document.getElementById("day-inputs").innerHTML += newstr;
}
