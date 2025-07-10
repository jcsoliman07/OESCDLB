<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<title></title>

	<style>
		body {
  			font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
		}
	</style>
</head>
<body>


<script>
	let timerInterval
	Swal.fire({
	  title: 'Confirming',
	  html: 'Loading. . .',
	  timer: 3000,
	  timerProgressBar: true,
	  didOpen: () => {
	    Swal.showLoading()
	    const b = Swal.getHtmlContainer().querySelector('b')
	    timerInterval = setInterval(() => {
	      b.textContent = Swal.getTimerLeft()
	    }, 100)
	  },
	  willClose: () => {
	    clearInterval(timerInterval)
	  }
	}).then((result) => {
	  /* Read more about handling dismissals below */
	  if (result.dismiss === Swal.DismissReason.timer) {
	    window.location.href = 'Student/Grade/mainframe.php';
	  }
})
</script>
</body>
</html>