<!-- Start Footer -->
<footer class="footer bg-dark text-white" style="margin-top: 15px">
    <div id="social-media" class="social-media">

        <a href="#"> <i id="i-instagram" class="fab fa-instagram"></i> </a>
        <a href="#"> <i id="i-facebook" class="fab fa-facebook-square"></i> </a>
        <a href="#"> <i id="i-github" class="fab fa-github"></i> </a>
    </div>
    <hr>
    <div class="container">
        
        <div class="row">
            <div class="col-md-6 float-sm-left">
                <ul>
                    Adres:<a href="http://"> <li>Merkez/Bartın</li> </a>
                    TEL:<a href="http://"> <li>+90531 894 6704</li> </a>
                    Mail:<a href="http://"> <li>furkan74er@gmail.com</li> </a>
                </ul>
            </div>
            <div class="col-md-6">
                <form action="">
                    <div class="form-group ">
                        <input type="text" name="ad" id="" placeholder="Adınızı giriniz.." class="form-control" required>     
                    </div>
                    <div class="form-group"> 
                        <input type="text" name="soyad" id="" placeholder="Soyadınızı giriniz.." class="form-control"required>
                    </div>
                    <div class="form-group"> 
                        <input type="tel" name="tel" id="" placeholder="Telefon giriniz.." class="form-control"required>
                    </div>
                    <div class="form-group">
                        <textarea name="desc" id="" cols="10" class="form-control" placeholder="Açıklama giriniz..." required></textarea> 
                    </div>   
                    <div class="btn-group">
                        <input type="reset" value="Temizle" class="btn btn-outline-danger">
                        <input type="submit" value="Gönder" class="btn btn-outline-warning">
                    </div>
                </form>
            </div>
                
        </div>
    </div>
    <hr>
    <div class="col-md-12 text-white" style="background-color: black; text-align: center; padding: 1rem;">
        &copy;Tüm haklar saklıdır.
    </div>
</footer>


<!-- Finished Footer -->



<!--Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<script type="text/javascript">
        $ (document) .ready (function () { 
                $ (window) .scroll (function () {   
                    if ($ (this) .scrollTop ()> 5) { 
                        $ ('.menu').addClass ('sabitleme'); 
                    } else {
                        $('.menu').removeClass('sabitleme');
                    }
                });
    }); </script>


</body>
</html>