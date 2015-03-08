

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Company &copy; Mittal Electronics</p>
                </div>
            </div>
        </div>
    </footer>


  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" data-remote="contact.html" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
	<div class="modal-content">
  		<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    		<h4 class="modal-title" id="myModalLabel">Modal title</h4>
  		</div>
  		<div class="modal-body">

  		</div>
  	<div class="modal-footer">
    	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    	<button type="button" class="btn btn-primary">Save changes</button>
  	</div>
	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$(function() {

    // intiliaze the modal but don't show it yet
    $("#myModal").modal('hide');

    $('a[data-target="#myModal"]').click(function(event) {
        event.preventDefault();
        var myModal = $('#myModal').
            modalBody = myModal.find('.modal-body');
        // load content into modal
        modalBody.load('/contact.html');
        // display modal
        myModal.modal('show');
    });

});
</script>
</body>

</html>

</body>

</html>