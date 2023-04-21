</header>

<section class="py-5">
  <div class="container">
    <div class="card rounded-0 card-outline card-purple shadow px-4 px-lg-5 mt-5">
      <div class="row">
        <div class="card-body">
          <h4>Contact Us</h4>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62232.60063148448!2d74.76970504863283!3d12.873118900000009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35a499fbec1b5%3A0xe5c391506b7a1a96!2sSt%20Aloysius%20College%20(Autonomous)!5e0!3m2!1sen!2sin!4v1682010261574!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  $(document).scroll(function() { 
    $('#topNavBar').removeClass('bg-purple navbar-light navbar-dark bg-gradient-purple text-light')
    if ($(window).scrollTop() === 0) {
      $('#topNavBar').addClass('navbar-dark bg-purple text-light')
    } else {
      $('#topNavBar').addClass('navbar-dark bg-gradient-purple')
    }
  });
  
  $(function() {
    $(document).trigger('scroll');
  });
</script>
