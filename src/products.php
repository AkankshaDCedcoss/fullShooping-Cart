<?php
session_start();
// session_destroy();
?>



<!DOCTYPE html>
<html>

<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {


			$("#addtocart0").click(function() {
				console.log("In add to cart 1");
				$.ajax({
					url: 'function.php',
					type: 'POST',
					data: {
						id: '101',
						name: 'Basket Ball',
						image: 'basketball.png',
						price: '150',
						action: 'add'
					},
					dataType: 'JSON',
					success: function(data) {

						display(data);
					}
				});
			})

			$("#addtocart1").click(function() {

				$.ajax({
					url: "function.php",

					type: "post",

					data: {
						id: 102,
						name: 'football',
						image: 'football.png',
						price: '120 ',
						action: 'add'

					},
					dataType: 'JSON',
					success: function(data) {

						display(data);

					}
				});
			}); //add function


			$("#addtocart2").click(function() {

				$.ajax({
					url: "function.php",

					type: "post",

					data: {
						id: 103,
						name: 'soccer',
						image: 'soccer.png',
						price: '110',
						action: 'add'

					},
					dataType: 'JSON',
					success: function(data) {

						display(data);

					}
				});
			}); //add function


			$("#addtocart3").click(function() {

				$.ajax({
					url: "function.php",

					type: "post",

					data: {
						id: 104,
						name: 'table-tennis',
						image: 'table-tennis.png',
						price: '150',
						action: 'add'

					},
					dataType: 'JSON',
					success: function(data) {

						display(data);

					}
				});
			}); //add function


			$("#addtocart4").click(function() {

				$.ajax({
					url: "function.php",
					type: "post",
					data: {
						id: 105,
						name: 'tennis',
						image: 'tennis.png',
						price: '130',
						action: 'add'
					},
					dataType: 'JSON',
					success: function(data) {
						display(data);
					}
				});
			});
			//Buy Now
			$("#buynow0").click(function() {
				console.log("In add to buy 1");
				$.ajax({
					url: 'function.php',
					type: 'POST',
					data: {
						id: '101',
						name: 'Basket Ball',
						image: 'basketball.png',
						price: '150',
						action: 'addbuy'
					},
					dataType: 'JSON',
					success: function(data) {

						displayBuy(data);
					}
				});
			})

			$("#buynow1").click(function() {

				$.ajax({
					url: "function.php",

					type: "post",

					data: {
						id: 102,
						name: 'football',
						image: 'football.png',
						price: '120 ',
						action: 'addbuy'

					},
					dataType: 'JSON',
					success: function(data) {

						displayBuy(data);

					}
				});
			}); //add function


			$("#buynow2").click(function() {

				$.ajax({
					url: "function.php",

					type: "post",

					data: {
						id: 103,
						name: 'soccer',
						image: 'soccer.png',
						price: '110',
						action: 'addbuy'

					},
					dataType: 'JSON',
					success: function(data) {

						displayBuy(data);

					}
				});
			}); //add function


			$("#buynow3").click(function() {

				$.ajax({
					url: "function.php",

					type: "post",

					data: {
						id: 104,
						name: 'table-tennis',
						image: 'table-tennis.png',
						price: '150',
						action: 'addbuy'

					},
					dataType: 'JSON',
					success: function(data) {

						displayBuy(data);

					}
				});
			}); //add function


			$("#buynow4").click(function() {

				$.ajax({
					url: "function.php",
					type: "post",
					data: {
						id: 105,
						name: 'tennis',
						image: 'tennis.png',
						price: '130',
						action: 'addbuy'
					},
					dataType: 'JSON',
					success: function(data) {
						displayBuy(data);
					}
				});
			});

			//Wish list


			$("#wishlist0").click(function() {
				console.log("In add to buy 1");
				$.ajax({
					url: 'function.php',
					type: 'POST',
					data: {
						id: '101',
						name: 'Basket Ball',
						image: 'basketball.png',
						price: '150',
						action: 'addwish'
					},
					dataType: 'JSON',
					success: function(data) {

						displayWish(data);
					}
				});
			})

			$("#wishlist1").click(function() {

				$.ajax({
					url: "function.php",

					type: "post",

					data: {
						id: 102,
						name: 'football',
						image: 'football.png',
						price: '120 ',
						action: 'addwish'

					},
					dataType: 'JSON',
					success: function(data) {

						displayWish(data);

					}
				});
			}); //add function


			$("#wishlist2").click(function() {

				$.ajax({
					url: "function.php",

					type: "post",

					data: {
						id: 103,
						name: 'soccer',
						image: 'soccer.png',
						price: '110',
						action: 'addwish'

					},
					dataType: 'JSON',
					success: function(data) {

						displayWish(data);

					}
				});
			}); //add function


			$("#wishlist3").click(function() {

				$.ajax({
					url: "function.php",

					type: "post",

					data: {
						id: 104,
						name: 'table-tennis',
						image: 'table-tennis.png',
						price: '150',
						action: 'addwish'

					},
					dataType: 'JSON',
					success: function(data) {

						displayWish(data);

					}
				});
			}); //add function


			$("#wishlist4").click(function() {

				$.ajax({
					url: "function.php",
					type: "post",
					data: {
						id: 105,
						name: 'tennis',
						image: 'tennis.png',
						price: '130',
						action: 'addwish'
					},
					dataType: 'JSON',
					success: function(data) {
						displayWish(data);
					}
				});
			});




		}); //ready function



		function display(data) {
			console.log(data);



			html = "<table><tr><th>ID</th><th>Image</th><th>Name</th><th>Price</th><th>Quantity</th></tr>";

			for (var i = 0; i < data.length; i++) {
				html += "<tr><td>" + data[i][0] + "</td><td>" + data[i][1] + "</td><td>" + data[i][2] + "</td><td>" + data[i][3] + "</td><td>" + data[i][4] + "</td><td><input type='text' id='text" + i + "'></td><td><input type='button' value='Edit' onclick='edit1(" + i + ")'></td><td><input type='button'  value='delete'  onclick='deleteData1(" + i + ")'></td><td><input type='button' value='move TO BUY' onclick='move1(" + i + ")'></td><td><input type='button' value='move TO Wish'  onclick='move2(" + i + ")'></td></tr>";


			}
			html += "</table>";
			document.getElementById("display").innerHTML = html;


		}


		function displayBuy(data) {
			console.log(data);
			html = "<table><tr><th>ID</th><th>Image</th><th>Name</th><th>Price</th><th>Quantity</th></tr>";

			for (var i = 0; i < data.length; i++) {
				html += "<tr><td>" + data[i][0] + "</td><td>" + data[i][1] + "</td><td>" + data[i][2] + "</td><td>" + data[i][3] + "</td><td>" + data[i][4] + "</td><td><input type='text' id='text" + i + "'></td><td><input type='button' value='Edit' onclick='edit2(" + data[i][0] + "," + i + ")'></td><td><input type='button'  value='delete'  onclick='deleteData2(" + i + ")'></td><td><input type='button' value='move TO Cart' onclick='move3(" + i + ")'></td><td><input type='button' value='move TO Wish' onclick='move4(" + i + ")'></td></tr>";


			}
			html += "</table>";
			document.getElementById("displaybuynow").innerHTML = html;


		}

		function displayWish(data) {
			console.log(data);
			html = "<table><tr><th>ID</th><th>Image</th><th>Name</th><th>Price</th><th>Quantity</th></tr>";

			for (var i = 0; i < data.length; i++) {
				html += "<tr><td>" + data[i][0] + "</td><td>" + data[i][1] + "</td><td>" + data[i][2] + "</td><td>" + data[i][3] + "</td><td>" + data[i][4] + "</td><td><input type='text' id='text" + i + "'></td><td><input type='button' value='Edit' onclick='edit3(" + data[i][0] + "," + i + ")'></td><td><input type='button'  value='delete'  onclick='deleteData3(" + i + ")'></td><td><input type='button' value='move TO Cart' onclick='move5(" + i + ")' ></td><td><input type='button' value='move TO Buy' onclick='move6(" + i + ")'></td></tr>";


			}
			html += "</table>";
			document.getElementById("displaywishlist").innerHTML = html;


		}










		//edit in Cart

		function edit1(y) {


			var val2 = y;
			// console.log(val2);

			var val3 = $("#text" + val2).val();
			// console.log(val3);




			$.ajax({
				url: "function.php",
				type: "post",
				data: {
					val: val2,
					quant: val3,
					action: 'edit1'
				},
				dataType: 'JSON',
				success: function(data) {
					console.log(data);

					display(data);


				}


			})
		}

		//delete in cart

		function deleteData1(x) {

			var val1 = x;
			$.ajax({
				url: "function.php",
				type: "post",
				data: {
					valD: val1,

					action: 'delete1'
				},
				dataType: 'JSON',
				success: function(data) {
					// console.log(data);
					display(data);
				}
			})
		}




		function edit2(y) {
			var val2 = y;
			var val3 = $("#text" + val2).val();
			$.ajax({
				url: "function.php",
				type: "post",
				data: {
					val: val2,
					quant: val3,
					action: 'edit2'
				},
				dataType: 'JSON',
				success: function(data) {
					displayBuy(data);


				}
			})
		}

		//delete in cart

		function deleteData2(x) {
			var val1 = x;
			$.ajax({
				url: "function.php",
				type: "post",
				data: {
					valD: val1,

					action: 'delete2'
				},
				dataType: 'JSON',
				success: function(data) {
					// console.log(data);
					displayBuy(data);
				}
			})
		}



		function edit3(y) {


			var val2 = y;
			var val3 = $("#text" + val2).val();
			$.ajax({
				url: "function.php",
				type: "post",
				data: {
					val: val2,
					quant: val3,
					action: 'edit3'
				},
				dataType: 'JSON',
				success: function(data) {
					console.log(data);
					displayWish(data);
				}
			})
		}

		//delete in cart

		function deleteData3(x) {

			var val1 = x;
			$.ajax({
				url: "function.php",
				type: "post",
				data: {
					valD: val1,

					action: 'delete3'
				},
				dataType: 'JSON',
				success: function(data) {
					// console.log(data);
					displayWish(data);
				}
			})
		}
















		//move cart item in buy

		function move1(x) {

			var val1 = x;
			$.ajax({
				url: "function.php",
				type: "post",
				data: {
					key: val1,

					action: 'move1'
				},
				dataType: 'JSON',
				success: function(data) {

					displayBuy(data);

				}
			})

			$.ajax({
				url: "function2.php",
				type: "post",
				data: {
					key: val1,

					action: 'move1'
				},
				dataType: 'JSON',
				success: function(data) {

					display(data);
				}
			})










		}



		function move2(x) {

			var val1 = x;
			$.ajax({
				url: "function.php",
				type: "post",
				data: {
					key: val1,

					action: 'move2'
				},
				dataType: 'JSON',
				success: function(data) {

					displayWish(data);

				}
			})

			$.ajax({
				url: "function2.php",
				type: "post",
				data: {
					key: val1,

					action: 'move2'
				},
				dataType: 'JSON',
				success: function(data) {

					display(data);

				}
			})

		}

		function move3(x) {

			var val1 = x;
			$.ajax({
				url: "function.php",
				type: "post",
				data: {
					key: val1,

					action: 'move3'
				},
				dataType: 'JSON',
				success: function(data) {

					display(data);

				}
			})

			$.ajax({
				url: "function2.php",
				type: "post",
				data: {
					key: val1,

					action: 'move3'
				},
				dataType: 'JSON',
				success: function(data) {

					displayBuy(data);

				}
			})
		}

		function move4(x) {

			var val1 = x;
			$.ajax({
				url: "function.php",
				type: "post",
				data: {
					key: val1,

					action: 'move4'
				},
				dataType: 'JSON',
				success: function(data) {


					displayWish(data);

				}
			})


			$.ajax({
				url: "function2.php",
				type: "post",
				data: {
					key: val1,

					action: 'move4'
				},
				dataType: 'JSON',
				success: function(data) {


					displayBuy(data);

				}
			})


		}

		function move5(x) {

			var val1 = x;
			$.ajax({
				url: "function.php",
				type: "post",
				data: {
					key: val1,

					action: 'move5'
				},
				dataType: 'JSON',
				success: function(data) {
					// console.log(data);

					displayBuy(data);
					// display(data);
				}
			})



			$.ajax({
				url: "function2.php",
				type: "post",
				data: {
					key: val1,

					action: 'move5'
				},
				dataType: 'JSON',
				success: function(data) {
					// console.log(data);

					displayWish(data);
					// display(data);
				}
			})
		}

		function move6(x) {

			var val1 = x;
			$.ajax({
				url: "function.php",
				type: "post",
				data: {
					key: val1,

					action: 'move6'
				},
				dataType: 'JSON',
				success: function(data) {
					// console.log(data);

					display(data);
					// display(data);
				}
			})



			$.ajax({
				url: "function2.php",
				type: "post",
				data: {
					key: val1,

					action: 'move5'
				},
				dataType: 'JSON',
				success: function(data) {
					// console.log(data);

					displayWish(data);
					// display(data);
				}
			})
		}
	</script>




</head>

<body>
	<div id="main">


		<?php
		include 'header.php';
		?>



		<?php
		include 'config.php';

		echo "<div id='main'>";


		$j = 0;
		foreach ($products as $key => $value) {
			echo "<div id='div2' class='productList'>
    <img src='images/" . $value['image'] . " width='20px'>
    <h3 class='title'><a href='#'>Product" . $value["id"] . "</a></h3>
    <span>Price : $ " . $value['price'] . "</span>
    <input type='submit' value='add to cart' id='addtocart" . $j . "' name='addtocart" . $j . "'>
	<input type='submit' value='Buy Now' id='buynow" . $j . "' name='buynow" . $j . "'>
	<input type='submit' value='Wish List' id='wishlist" . $j . "' name='wishlist" . $j . "'>
    
    
    </div>
    ";
			$j++;
		}

		?>

	</div>
	<h1>Add To Cart</h1>


	<div id="display">

	</div>

	<h1>BUY NOw</h1>


	<div id="displaybuynow">

	</div>


	<h1>Wish List</h1>


	<div id="displaywishlist">

	</div>






	<?php
	include 'footer.php';
	?>
	</div>


</body>

</html>