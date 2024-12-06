@section('main')
<div class="container">
    <div class="row d-md-flex justify-content-end">
        <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
            <span class="subheading">Booking an Appointment</span>
            <form action="https://formspree.io/f/xzzprkqe" method="POST" class="appointment">
                <div class="row">
                 <div class="col-md-12">
                  <div class="form-group">
                   <div class="form-field">
                    <div class="select-wrap">
                     <div class="icon"><span class="fa fa-chevron-down"></span></div>
                     <select name="service" id="service" class="form-control">
                      <option value="">Select services</option>
                      <option value="Plumbering">Plumbering</option>
                      <option value="Electronic Repairs">Electronic Repairs</option>
                      <option value="Door Lock Fitting">Door Lock Fitting</option>
                      <option value="Car and Bike Repairs">Car and Bike Repairs</option>
                      <option value="Computer and Phone Repairs">Computer and Phone Repairs</option>
                      <option value="Air Conditioning repair and Maintenance">Air Conditioning repair and Maintenance</option>
                      <option value="Other Services">Other Services</option>
                     </select>
                    </div>
                   </div>
                  </div>
                 </div>
                 <div class="col-md-6">
                  <div class="form-group">
                   <input type="text" name="name" class="form-control" placeholder="Your Name">
                  </div>
                 </div>
                 <div class="col-md-6">
                  <div class="form-group">
                   <input type="text" name="location" class="form-control" placeholder="Your Location">
                  </div>
                 </div>
                 <div class="col-md-6">
                  <div class="form-group">
                   <div class="input-wrap">
                    <div class="icon"><span class="fa fa-calendar"></span></div>
                    <input type="text" name="date" class="form-control appointment_date" placeholder="Date">
                   </div>
                  </div>
                 </div>
                 <div class="col-md-6">
                  <div class="form-group">
                   <div class="input-wrap">
                    <div class="icon"><span class="fa fa-clock-o"></span></div>
                    <input type="text" name="time" class="form-control appointment_time" placeholder="Time">
                   </div>
                  </div>
                 </div>
                 <div class="col-md-12">
                  <div class="form-group">
                   <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                  </div>
                 </div>
                 <div class="col-md-12">
                  <div class="form-group">
                   <input type="submit" value="Send message" class="btn btn-light py-3 px-4">
                  </div>
                 </div>
                </div>
               </form>
        </div>
    </div>
</div>
</section>
@endsection
