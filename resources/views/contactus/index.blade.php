@extends('layouts.app')

@section('content')
<div class="contact_section layout_padding">
    <div class="container">
       <h1 class="contact_taital">Request A Call Back</h1>
       <div class="email_text">
          <div class="form-group">
             <input type="text" class="email-bt" placeholder="Name" name="Email">
          </div>
          <div class="form-group">
             <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
          </div>
          <div class="form-group">
             <input type="text" class="email-bt" placeholder="Email" name="Email">
          </div>
          <div class="form-group">
             <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
          </div>
          <div class="send_btn"><a href="#">SEND</a></div>
       </div>
    </div>
 </div>
@endsection
