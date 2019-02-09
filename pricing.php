<?php include('header.php') ?>

<style>
/* Pricing Popup
} */

.QuoteModal {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: white;
  transition: opacity 300ms;
  visibility: hidden;
  opacity: 1;
}

.QuoteModal:target {
  visibility: visible;
  opacity: 1;
}

.popup_modal {
  position: relative;
  margin: -44px auto;
  padding: 14px;
  background: #23c38b;
  box-sizing: border-box;
  box-shadow: 10px 10px 10px 10px #eee;
  width: 289px;
  left: -37px;
}

.popup_modal .quoteclose {
  position: absolute;
  top: 20px;
  right: 30px;
  font-size: 20px;
  color: black;
}
    </style>


<div class="clearfix"></div>
<div style="min-height: calc(100vh - 130px);">


<div>


<div id="titlebar" style="background: #fff;">
<div class="container">


<div class="row">

<div class="col-md-12">



<h2>Get the most powerful set of business tools!</h2>

<p>Choose your perfect plan, host on your own server, unlimited Customers, no monthly fees, no license expiration.</p>

<!-- Breadcrumbs -->


</div>
</div>
</div>
</div>

<div class="section" style="padding-bottom: 55px;">

<div class="container">
<div class="row">

<div class="col-xl-12">

<!-- Billing Cycle  -->


<!-- Pricing Plans Container -->
<div class="pricing-plans-container">



<div class="pricing-plan ">
    
    <h3>Adeza (Subscription)</h3>
    <p style="margin-top: 4px;">Monthly Base</p>
    <div class="pricing-plan-label billed-monthly-label">
        
        <strong>₹200*</strong>
    </div>

    <div class="pricing-plan-features">
        <strong>Features</strong>
        <ul>
            <li>Lightweight CRM, Accounting and Billing Software and Payment Gateway</li>
        </ul>
    </div>

    <div>
    <a class="quote btn btn-lg btn-warning" href="#quote_modal" title="">Click for more details</a>
  </div>

  <!--Quote Popup Window like Modal-->

  <div id="quote_modal" class="QuoteModal">
    <div class="popup_modal">
      <div>
        <a href="#close" title="Close" class="quoteclose">X</a>
        <h3 class="text-center">Ask anything</h3>
      </div>
      <div>
        <form role="form" class="text-center">
          <div class="form-group">
            <input type="text" required class="form-control" placeholder="Name" tabindex="1">
          </div>
          <div class="form-group">
            <input type="email" required class="form-control" placeholder="Email" tabindex="2">
          </div>
          <div class="form-group">
            <textarea rows="10" required class="form-control" placeholder="Message" tabindex="3"></textarea>
          </div>
        </form>
      </div>
      <div>

        <button type="button" class="btn btn-warning">Send</button>
      </div>
    </div>
  </div>

    

</div>



<div class="pricing-plan recommended">
<div class="recommended-badge">Most popular</div> 
    <h3>Adeza</h3>
    <p style="margin-top: 4px;">One time fee</p>
    <div class="pricing-plan-label billed-monthly-label">
        
        <strong>₹10,000*</strong>
    </div>

    <div class="pricing-plan-features">
        <strong>Features</strong>
        <ul>
            <li>Lightweight CRM, Accounting and Billing Software and Payment Gateway</li>
        </ul>
    </div>

    <div>
    <a class="quote btn btn-lg btn-warning" href="#quote_modal" title="">Click for more details</a>
  </div>

  <!--Quote Popup Window like Modal-->

  <div id="quote_modal" class="QuoteModal">
    <div class="popup_modal">
      <div>
        <a href="#close" title="Close" class="quoteclose">X</a>
        <h3 class="text-center">Ask anything</h3>
      </div>
      <div>
        <form role="form" class="text-center">
          <div class="form-group">
            <input type="text" required class="form-control" placeholder="Name" tabindex="1">
          </div>
          <div class="form-group">
            <input type="email" required class="form-control" placeholder="Email" tabindex="2">
          </div>
          <div class="form-group">
            <textarea rows="10" required class="form-control" placeholder="Message" tabindex="3"></textarea>
          </div>
        </form>
      </div>
      <div>

        <button type="button" class="btn btn-warning">Send</button>
      </div>
    </div>
  </div>


    

</div>


<div class="pricing-plan ">
    
    <h3>Business Suite</h3>
    <p style="margin-top: 22px;">Monthly Base</p>
    <div class="pricing-plan-label billed-monthly-label">
        
        <strong>₹1000*</strong>
    </div>

    <div class="pricing-plan-features">
        <strong>Features</strong>
        <ul>
            <li>Lightweight CRM, HRM
    </li><li>Supporting System
    </li><li>Payment Gateway</li>
        </ul>
    </div>

    <div>
    <a class="quote btn btn-lg btn-warning" href="#quote_modal" title="">Click for more details</a>
  </div>

  <!--Quote Popup Window like Modal-->

  <div id="quote_modal" class="QuoteModal">
    <div class="popup_modal">
      <div>
        <a href="#close" title="Close" class="quoteclose">X</a>
        <h3 class="text-center">Ask anything</h3>
      </div>
      <div>
        <form role="form" class="text-center">
          <div class="form-group">
            <input type="text" required class="form-control" placeholder="Name" tabindex="1">
          </div>
          <div class="form-group">
            <input type="email" required class="form-control" placeholder="Email" tabindex="2">
          </div>
          <div class="form-group">
            <textarea rows="10" required class="form-control" placeholder="Message" tabindex="3"></textarea>
          </div>
        </form>
      </div>
      <div>

        <button type="button" class="btn btn-warning">Send</button>
      </div>
    </div>
  </div>

</div>


<div class="pricing-plan  recommended ">
        <div class="recommended-badge">Most popular</div> 
    <h3>Business Suite</h3>
    <p style="margin-top: 20px;">One time fee</p>
    <div class="pricing-plan-label billed-monthly-label">
        
        <strong>₹25,000*</strong>
    </div>

    <div class="pricing-plan-features">
        <strong>Features</strong>
        <ul>
        <li>Lightweight CRM, HRM
        </li><li>Supporting System
        </li><li>Payment Gateway</li>
        </ul>
    </div>

    <div>
    <a class="quote btn btn-lg btn-warning" href="#quote_modal" title="">Click for more details</a>
  </div>

  <!--Quote Popup Window like Modal-->

  <div id="quote_modal" class="QuoteModal">
    <div class="popup_modal">
      <div>
        <a href="#close" title="Close" class="quoteclose">X</a>
        <h3 class="text-center">Ask anything</h3>
      </div>
      <div>
        <form role="form" class="text-center">
          <div class="form-group">
            <input type="text" required class="form-control" placeholder="Name" tabindex="1">
          </div>
          <div class="form-group">
            <input type="email" required class="form-control" placeholder="Email" tabindex="2">
          </div>
          <div class="form-group">
            <textarea rows="10" required class="form-control" placeholder="Message" tabindex="3"></textarea>
          </div>
        </form>
      </div>
      <div>

        <button type="button" class="btn btn-warning">Send</button>
      </div>
    </div>
  </div>    

</div>



</div>

</div>

</div>
</div>

</div>

<div class="section" style="padding-bottom: 55px;">

<div class="container">
<div class="row">

<div class="col-xl-12">

<h2 class="font-weight-light">Questions?</h2>
<h3 class="font-weight-light" style="margin-top: 10px;">Let's talk about how Adeza can help you, We’ll put you on the right path.</h3>
<p style="margin-top: 10px;">Ask about our products, pricing, implementation, or anything else — We are standing by, ready to help.</p>

<a href="javascript:;" class="button ripple-effect button-sliding-icon" style="margin-top: 10px; width: 164.344px;" onclick="chatOpen();">Chat with us <i class="icon-feather-message-square"></i></a>

</div>

</div>
</div>

</div>

</div>

</div>




