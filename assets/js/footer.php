<!--<footer class="">
      <div class="row">
        <div class="col-md-6">
          <div class="footer-content footer-content-left">
            <h6>About Us</h6><br>
            <p>USA for UNHCR helps and protects refugees and people displaced by violence, conflict and persecution. Supporting UNHCR — the UN Refugee Agency — and its partners, your gift provides lifesaving essentials including shelter, water, food, safety and protection. Around the world, we help refugees survive, recover and build a better future. <br><br> As a USA for UNHCR donor, you’ll receive updates on how your gift is helping.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="footer-content footer-content-right">
            <h6>Trusted and respected</h6><br>
            <p>USA for UNHCR meets all 20 BBB charity standards and is a GuideStar Platinum Participant - GuideStar’s highest level of recognition.</p>
            <br>
            <div class="footer-image">
              <img src="assets/img/bbb-logo-173x87.png" alt="" class="footer-image-one">
              <img src="assets/img/guide-star-platinum.png" alt="" class="footer-image-two">
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <div class="footer-bottom">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-bottom-image">
              <img src="assets/img/unhcr-horizontal-white.png" alt="">
              <span>1775 K Street, NW Suite 580 Washington, DC 20006 1-(855)-808-6427 EIN 52-1662800 Privacy Policy ©2020 USA for UNHCR</span>
            </div>
          </div>
        </div>
      </div>
    </footer> -->
    <div class="footer-bottom-copy-right p-3">
      <p class="text-center text-danger"> Design and Development by Women in Digital</p>
    </div>
<button onclick="topFunction()" id="myBtn" title="Donate"><span class="donate_btn_scroll">Donate</span></button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'demo_sandbox_client_id',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'large',
      color: 'blue',
      shape: 'pill',
      label: 'checkout',
      tagline: 'true'
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
    
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
        window.alert('Thank you for your purchase!');
      });
    }
  }, '#paypal-button');

</script>
   


  </body>
</html>