<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="ABOUT.php">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="BLOG.php">Tačni odgovori</a></li>
				<?php if(empty($_SESSION['ulogovaniRadnik'])){
                  ?>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="CONTACT.php">Contact</a></li>
				<?php } ?>
              </ul>
            </div>
            
           
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="https://www.facebook.com/"><img src="slike/facebook.png" alt="facebook"></a>
                    <a href="https://twitter.com/"><img src="slike/twitter.png" alt="twitter"></a>
                    <a href="https://linkedin.com/"><img src="slike/linkedin.png" alt="linkedin"></a>
                    <a href="https://www.instagram.com/"><img src="slike/instagram.png" alt="instagram"></a>
            </div>

             <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                    <p><b>Quiz Elab</b><br>
                    <span class="glyphicon glyphicon-map-marker"></span> Jove Ilica 150, Belgrade<br>
                    <span class="glyphicon glyphicon-envelope"></span> quizElab.com<br>
                    <span class="glyphicon glyphicon-earphone"></span> (123) 456-7890</p>
            </div>
            <div class="col-lg-3 col-sm-3">
                    <h4> Copyright</h4>
                    <p class="copyright">© Tijana, Djurdjina & Maja, Belgrade 2020</p>
                        </div>
        </div>



</div></div>




<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form class="" role="form">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
      </form>          
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='register.php'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->



</body>
</html>



