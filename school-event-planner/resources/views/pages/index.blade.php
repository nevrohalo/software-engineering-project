@extends('layouts/standard-layout')

@section('content')
    <!-- Wrapper -->
    <section id="portal-wrapper-id" class="portal">
        <div class="portal-layer portal-layer-bottom">
            <div class="portal-layer-wrap">
                <div class="portal-layer-body">
                    <h2>Organizer Portal</h2>
                    <p>Log in through our organizer portal</p>
                </div>
                <div class="portal-layer-note">
                    <h2><a href="/organizer-portal">Click Here</a></h2>
                </div>
                <img class="portal-image" src="../pics/organizer-login-icon.png" alt="Icon not found">
            </div>        
        </div>

        <div class="portal-layer portal-layer-top">
            <div class="portal-layer-wrap">
                <div class="portal-layer-body">
                    <h2>Student Portal</h2>
                    <p>Log in through our student portal</p>
                </div>
                <div class="portal-layer-note">
                    <h2><a href="/student-portal">Click Here</a></h2>
                </div>
                <img class="portal-image" src="../pics/student-login-icon.png" alt="Icon not found">
            </div>
        </div>

        <div class="portal-handle"></div>
    </section>
    
    <!-- Footer -->
    <div class="portal-footer">
        <ul class="portal-footer-bar">
            <li><a id="footer-logo" href="https://github.com/nevrohalo/software-engineering-project" target="_blank">School Event Planner by Nevro Halo</a></li>
            <li><a href="/student-portal">Student Portal</a></li>
            <li><a href="/organizer-portal">Organizer Portal</a></li>
            <li><a href="/about">About Us</a></li>
        </ul>
    </div>

    <!-- TODO: Embedd script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let wrapper = document.getElementById('portal-wrapper-id');
            let layer = wrapper.querySelector('.portal-layer-top');
            let handle = wrapper.querySelector('.portal-handle');

            let skew = 0;
            let delta = 0;

            if (wrapper.className.indexOf('portal') != -1) {
                skew = 1000;
            }

            wrapper.addEventListener('mousemove', function(e) {
                delta = (e.clientX - window.innerWidth / 2) * 0.5;
                handle.style.left = e.clientX + delta + 'px';
                layer.style.width = e.clientX + delta + skew + 'px';
            });
        });
    </script>
@endsection