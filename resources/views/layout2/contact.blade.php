
@section('css')
  <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');



.contact-box {
  min-height: 100vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-image: url('frontend/image/layout/contack_background.webp');
  background-size: cover;
  background-position: center;
  position: relative;
}

.contact-box::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(0,0,0,0.5);
}

.co_section {
  position: relative;
  z-index: 3;
  padding-top: 50px;
  padding-bottom: 50px;
}

.co_container {
  max-width: 1080px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 20px;
  padding-right: 20px;
}

.section-header {
  margin-bottom: 50px;
  text-align: center;
}

.section-header .co_h2 {
  font-weight: bold;
  font-size: 3em;
  margin-bottom: 20px;
}

.section-header .co_p {
  color: #FFF;
}

.co_row  {
  display: flex;
  flwx-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}

.contact-info {
  width: 50%;
}

.contact-info-item {
  display: flex;
  margin-bottom: 30px;
}

.contact-info-icon {
  height: 40px;
  width: 40px;
  background-color: #fff;
  text-align: center;
  border-radius: 50%;
}

.contact-info-icon .co_i {
  font-size: 25px;
  line-height: 30px;
}

.contact-info-content {
  margin-left: 20px;
}

.contact-info-content .co_h4 {
  color: #1da9c0;
  font-size: 1.4em;
  margin-bottom: 5px;
}

.contact-info-content .co_p {
  color: #FFF;
  font-size: 1em;
}

.contact-form {
  background-color: #fff;
  padding: 40px;
  width: 45%;
  padding-bottom: 20px;
  padding-top: 20px;
}

.contact-form .co_h2 {
  font-weight: bold;
  font-size: 2em;
  margin-bottom: 10px;
}

.contact-form .input-box {
  position: relative;
  width: 100%;
  margin-top: 10px;
}

.contact-form .input-box .co_input,
.contact-form .input-box .co_textarea{
  width: 100%;
  padding: 5px 0;
  font-size: 16px;
  margin: 10px 0;
  border: none;
  border-bottom: 2px solid #333;
  outline: none;
  resize: none;
}

.contact-form .input-box .co_span {
  position: absolute;
  left: 0;
  padding: 5px 0;
  font-size: 16px;
  margin: 10px 0;
  pointer-events: none;
  transition: 0.5s;
  color: #666;
}

.contact-form .input-box .co_input:focus ~ .co_span,
.contact-form .input-box .co_textarea:focus ~ .co_span{
  color: #e91e63;
  font-size: 12px;
  transform: translateY(-20px);
}

.contact-form .input-box .co_input[type="submit"]
{
  width: 100%;
  background: #00bcd4;
  color: #FFF;
  border: none;
  cursor: pointer;
  padding: 10px;
  font-size: 18px;
  border: 1px solid #00bcd4;
  transition: 0.5s;
}

.contact-form .input-box .co_input[type="submit"]:hover
{
  background: #FFF;
  color: #00bcd4;
}

@media (max-width: 991px) {
  .co_section {
    padding-top: 50px;
    padding-bottom: 50px;
  }
  
  .co_row {
    flex-direction: column;
  }
  
  .contact-info {
    margin-bottom: 40px;
    width: 100%;
  }
  
  .contact-form {
    width: 100%;
  }
}
  </style>
  @endsection


<div class="contact-box">
  
  <section class="co_section">
    
    <div class="section-header">
      <div class="co_container">
        <h2 class="co_h2 text-white ">Contact Us</h2>
        <p class="co_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
    </div>
    
    <div class="co_container">
      <div class="co_row">
        
        <div class="contact-info">

          <div class="contact-info-item">
            <div class="contact-info-icon" style="display: grid; place-items:center;">
              <i class="fas fa-home co_i" ></i>
            </div>
            
            <div class="contact-info-content" style="width: 200px;">
              <h4 class="co_h4">Addressss</h4>
              <p class="co_p">{{$web_address}}</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon" style="display: grid; place-items:center;">
              <i class="fas fa-phone co_i" ></i>
            </div>
            
            <div class="contact-info-content">
              <h4 class="co_h4">Phone</h4>
              <p class="co_p">{{$web_phone1}}</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon" style="display: grid; place-items:center;">
              <i class="fas fa-envelope co_i" ></i>
            </div>
            
            <div class="contact-info-content">
              <h4 class="co_h4">Email</h4>
             <p class="co_p">{{$web_email}}</p>
            </div>
          </div>
        </div>
        
        <div class="contact-form">
          <form action="{{url('contact-us-post')}}" method="post" id="contact-form">
            @csrf
            <h2 class="co_h2 text_clr2">Send Message</h2>
            <div class="input-box">
              <input class="co_input" type="text" required="true" name="fullName">
              <span class="co_span">Full Name</span>
            </div>
            
            <div class="input-box">
              <input class="co_input" type="email" required="true" name="email">
              <span class="co_span">Email</span>
            </div>
            
            <div class="input-box">
              <textarea class="co_textarea" required="true" name="messages"></textarea>
              <span class="co_span">Type your Message...</span>
            </div>
            
            <div class="input-box">
              <input class="co_input" type="submit"  name="">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </section>
  
</div>