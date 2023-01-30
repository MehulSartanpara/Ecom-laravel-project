 <!-- footer start -->
 <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="{{ url('/') }}"><img width="210" src="{{ url('frontend/images/logo.png') }}" alt="#" /></a>
                      </div>
                      <div class="information_f">
                        <p><strong>ADDRESS:</strong> 428 Green Plaza, Varachha, Surat City, India</p>
                        <p><strong>TELEPHONE:</strong> +91 987 654 3210</p>
                        <p><strong>EMAIL:</strong> webunity@gmail.com</p>
                      </div>
                   </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href="{{ url('/') }}" @if(url()->current() == url('/')) style="color: red;" @endif>Home</a></li>
                           <li><a href="#">About</a></li>
                           <li><a href="#">Services</a></li>
                           <li><a href="#">Testimonial</a></li>
                           <li><a href="#">Blog</a></li>
                           <li><a href="#">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Account</h3>
                        <ul>
                           <li><a href="#">Account</a></li>
                           <li><a href="#">Checkout</a></li>
                           <li><a href="#">Login</a></li>
                           <li><a href="#">Register</a></li>
                           <li><a href="{{ url('/collections/all') }}" @if(url()->current() == url('/collections/all')) style="color: red;" @endif>Shopping</a></li>
                           <li><a href="#">Widget</a></li>
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>     
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>Newsletter</h3>
                        <div class="information_f">
                          <p>Subscribe by our newsletter and get update protidin.</p>
                        </div>
                        <div class="form_sub">
                           <form>
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="Enter Your Mail" name="email" />
                                    <input type="submit" value="Subscribe" />
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
       <!-- Logout Modal-->
       <div class="modal fade" id="userlogoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Logout?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ url('/logout') }}">Logout</a>
                    </div>
                </div>
            </div>
        </div>
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://webunityinfotech.com/">WebUnity Infotech</a><br>
         </p>
      </div>
      <!-- jQery -->
      <script src="{{ url('frontend/js/jquery-3.4.1.min.js') }}"></script>
      <!-- popper js -->
      <script src="{{ url('frontend/js/popper.min.js') }}"></script>
      <!-- bootstrap js -->
      <script src="{{ url('frontend/js/bootstrap.js') }}"></script>
      <!-- custom js -->
      <script src="{{ url('frontend/js/custom.js') }}"></script>

      <script>
         $('.product-qty-manager .btnqty').on('click', function(){
            var qty = parseInt($(this).parent('.product-qty-manager').find('.quantity-input').val());
            if($(this).hasClass('qtyplus')) {
               qty++;
            }else {
               if(qty > 1) {
               qty--;
               }
            }
            qty = (isNaN(qty))?1:qty;
            $(this).parent('.product-qty-manager').find('.quantity-input').val(qty);
         });
      </script>

   </body>
</html>