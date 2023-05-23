@extends('Doctor_Data.Doctor_dashpord_layout')
@vite(["resources/css/liberary.css"])
@section('add_subject')
<section class="all-body">
    <div class="container">
        <div class="lib_titel">
            <h2>Doctor Library</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card" style="width: 18rem">
                    <img src="./imges/software.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Software Engineer</h5>

                        <a href="add_subjects" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card" style="width: 18rem">
                    <img src="./imges/Chat-bot-bro.png" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Software Engineer</h5>

                        <a href="add_subjects" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card" style="width: 18rem">
                    <img src="./images.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Software Engineer</h5>

                        <a href="add_subjects" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection