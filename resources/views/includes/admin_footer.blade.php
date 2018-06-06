
    <!--   Core JS Files   -->
    <script src="/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="/js/demo.js"></script>
	<script>
			$('.alert').delay(3000).slideUp(500);
	</script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	// $.notify({
            // 	icon: 'ti-gift',
            // 	message: "Welcome to <b>RM Audios Dashboard</b> - You Can Manage here Everthing on this Application."

            // },{
            //     type: 'success',
            //     timer: 4000
            // });

			$("li#act").click(function () {
               $(this).toggleClass("active");
			// alert('fgd');
            });

			

			  
    	});


		
		
	</script>

</html>
