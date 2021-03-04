<link rel="stylesheet" type="text/css" href="{{url('/')}}/pago/css/alfonso.css">
<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>

  <script src="{{url('/')}}/pago/js/alfonso.js" ></script>


<body class="cover" style="background-image: url(./pago/alfonso.png);">
  <div class="login-logo">
                <a href="{{ url('/master') }}"><b>Tecno</b>Soport</a>
            </div><!-- /.login-logo -->
<div class="modal">
    <div class="modal__container">
      <div class="modal__featured">
        <button type="button" class="button--transparent button--close">
          <svg class="nc-icon glyph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
            <g><path fill="#ffffff" d="M1.293,15.293L11,5.586L12.414,7l-8,8H31v2H4.414l8,8L11,26.414l-9.707-9.707 C0.902,16.316,0.902,15.684,1.293,15.293z"></path> </g></svg>
          <span class="visuallyhidden">Return to Product Page</span>
        </button>
        <div class="modal__circle"></div>
        <img src="{{url('/')}}/pago/pago.jpg" class="modal__product" />
      </div>
      <div class="modal__content">
        <h2>Sus detalles de pago</h2>

        <form>
          <ul class="form-list">
            <li class="form-list__row">
              <label>NOMBRE</label>
              <input type="text" name="" required="" />
            </li>
            <li class="form-list__row">
              <label>NÚMERO DE TARJETA</label>
              <div id="input--cc" class="creditcard-icon">
                <input type="text" name="cc_number" required="" />
              </div>
            </li>
            <li class="form-list__row form-list__row--inline">
              <div>
                <label>FECHA DE CADUCIDAD</label>
                <div class="form-list__input-inline">
                  <input type="text" name="cc_month" placeholder="MM"  pattern="\\d*" minlength="2" maxlength="2" required="" />
                  <input type="text" name="cc_year" placeholder="YY"  pattern="\\d*" minlength="2" maxlength="2" required="" />
                </div>
              </div>
              <div>
                <label>
                  CVC

                  <a href="#cvv-modal" class="button--transparent modal-open button--info">
                    <svg class="nc-icon glyph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16"><g> <path fill="#35a4fb" d="M8,0C3.6,0,0,3.6,0,8s3.6,8,8,8s8-3.6,8-8S12.4,0,8,0z M8,13c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1s1,0.4,1,1 C9,12.6,8.6,13,8,13z M9.5,8.4C9,8.7,9,8.8,9,9v1H7V9c0-1.3,0.8-1.9,1.4-2.3C8.9,6.4,9,6.3,9,6c0-0.6-0.4-1-1-1 C7.6,5,7.3,5.2,7.1,5.5L6.6,6.4l-1.7-1l0.5-0.9C5.9,3.6,6.9,3,8,3c1.7,0,3,1.3,3,3C11,7.4,10.1,8,9.5,8.4z"></path> </g></svg>
                    <span class="visuallyhidden">What is CVV?</span>
                  </a>
                </label>
                <input type="text" name="cc_cvc" placeholder="123" pattern="\\d*" minlength="3" maxlength="4" required="" />
              </div>
            </li>
            <li class="form-list__row form-list__row--agree">
              <label>
                <input type="checkbox" name="save_cc" checked="checked">
                Guarde mi tarjeta para futuras compras
              </label>
            </li>
            <li>
             <center><button class="button"> <a href="{{ url('/register') }}">Continuar</a></button></center> 
            </li>
          </ul>
        </form>
      </div> <!-- END: .modal__content -->
    </div> <!-- END: .modal__container -->
  </div> <!-- END: .modal -->
</body>