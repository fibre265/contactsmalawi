





       

@extends('layouts.generalLayout')
@section('content')

<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

  <!-- ======= Team Section ======= -->

<section id="team" class="team">

      <div class="container">
      <li>Region: {{ $region }}</li>
<div class="section-title" data-aos="fade-in" data-aos-delay="100">
  <h2>Phone Number:</h2>
  @foreach ($districts as $district)
  <a href="/search_in_district/{{ $district->id }}">
    <li>District: {{ $district->district }}</li>
    <li>Contacts: {{ $district->user->count() }}</li>
    <!-- <li>Contacts: {{ $district->id }}</li> -->
    </a>
    <hr>
  @endforeach
</div>
          
            If this is not the agent number you acre looking for,plese call 08867.. and you will be assisted as soon as possible if the number is register with us</p>
        </div>

        <div class="">

          <div class="col-lg-12 col-md-12">
            <div class="member" data-aos="fade-up">
          
              <div class="member-info">
                <h4>Contacts Malawi</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->
 

</x-guest-layout>
@endsection









 


