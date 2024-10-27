<style>
    .check_available {
        position: relative;
    }

    .check_available .alert {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        margin: 0 auto;
        width: 100%;
        max-width: 600px;
    }

    .alert.show {
        opacity: 1;
        transform: translateY(-172px);
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .close {
        position: absolute;
        top: 10px;
        right: 15px;
        background: none;
        border: none;
        font-size: 20px;
        color: #000;
        cursor: pointer;
        opacity: 0.8;
    }

    .close:hover {
        opacity: 1;
    }


    .alert-dismissible {
        margin: 0 auto;
    }

    @media (max-width: 768px) {
        .alert {
            font-size: 14px;
            padding: 12px 15px;
        }
    }
</style>
<div class="hero-area-bg" id="home">
    <div class="hero-area d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="hero-content text-center">
                        <h4>The Best Luxyry Hotel</h4>
                        <h1>The Best Luxurius</h1>
                        <h2>Hotel In UK</h2>
                        <div class="hero-button">
                            <a href="{{url('about_us')}}">Explore more <i class="fi fi-ts-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </di>

    <section class="booking-section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9">

                    <div class="check_available">
                        @if(session()->has('messages'))
                            <div class="alert alert-success alert-dismissible show" role="alert">
                                {{ session()->get('messages') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>

                    <form action="{{ url('check_booking')}}" method="post" class="booking-form">
                        @csrf
                        <ul>
                            <li>
                                <div class="booking-field p-relative c-name">
                                    <label>CHECK-IN</label>
                                    <input type="date" id="check_in" name="check_in" class="datepicker" required>
                                </div>
                            </li>
                            <li>
                                <div class="booking-field p-relative c-name">
                                    <label>CHECK-OUT</label>
                                    <input type="date" id="check_out" name="check_out" class="datepicker" required>
                                </div>
                            </li>
                            <li>
                                <div class="booking-field p-relative c-name">
                                    <label>Adult</label>
                                    <select name="adults" id="adults" required>
                                        <option value="">Select Adults</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="booking-field p-relative c-name">
                                    <label>Children</label>
                                    <select name="children" id="children">
                                        <option value="">Select Children</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="slider-btn">
                                    <button type="submit" class="btn check-btn">Check Availability</button>
                                </div>
                            </li>
                        </ul>
                    </form>

                </div>
            </div>
        </div>

    </section>