@extends('layouts.app')


@section('content')



<link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <!-- Contact Page-->
    <div class="header-section">
        <h2 class="dark big">Contact Owner</h2>
        <hr>
    </div> 
    <div class="container">
        <form action="action_page.php">
          <div class="row">
            <div class="col-25">
              <label for="fname">First Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
            </div>
          </div>


          <div class="row">
            <div class="col-25">
              <label for="lname">Last Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            </div>
          </div>

          <div class="row">
            <div class="col-25">

              <label for="email">Email</label>
            </div>
            <div class="col-75">
              <input type="text" id="email" name="email" placeholder="Your email adress..">
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="lname">Contact No.</label>
            </div>
            <div class="col-75">
              <input type="text" id="contact" name="contact" placeholder="Your Contact No...">
            </div>
          </div>


          <div class="row">
            <div class="col-25">
              <label for="country">Request For</label>
            </div>
            <div class="col-75">
              <select id="request" name="request">
                <option value="Flat-Visit">Flat Visit</option>
                <option value="contact">Contact Owner</option>
                <option value="Vacancy">Vacant Information</option>
              </select>
            </div>
          </div>


          <div class="row">
            <div class="col-25">
              <label for="subject">Description (if any)</label>
            </div>
            <div class="col-75">
              <textarea id="description" name="description" placeholder="Write something.." style="height:200px"></textarea>
            </div>
          </div>
          <div class="row">
            <input type="submit" value="Submit">
          </div>
        </form>
      </div>


@endsection