@extends('UserDashboard.Layout.userBaseView')
<style>
.icon {
    float: right;
    font-size: 500%;
    position: absolute;
    top: 0rem;
    right: -0.3rem;
    opacity: .16;
}



#user-container {
    width: 1200px;
    display: flex;
}

#web-container {
    width: 1200px;
    display: flex;
}

#booking-container {
    width: 1200px;
    display: flex;
}

.grey-dark {
    background: #495057;
    color: #efefef;
}

.red-gradient {
    background: linear-gradient(180deg, rgba(207, 82, 82, 1) 0%, rgba(121, 9, 9, 1) 80%);
    color: #fff;
}

.red {
    background: red;
    color: #fff;
}

.purple {
    background: purple;
    color: #fff;
}

.orange {
    background: orange;
    color: #fff;
}

.kpi-card {
    overflow: hidden;
    position: relative;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
    display: inline-block;
    padding: 1em;
    border-radius: 0.3em;
    font-family: sans-serif;
    width: 240px;
    min-width: 100px;
    margin-left: 0.5em;
    margin-top: 0.5em;
}

.card-value {
    display: block;
    font-size: 200%;
    font-weight: bolder;
}

.card-text {
    display: block;
    font-size: 70%;
    padding-left: 0.2em;
}
</style>
@section('dashContent')
<div class="container mt-2">
    <h6>Booking KPI</h6><br>
    <div id="booking-container">
        <div class="kpi-card purple">
            <span class="card-value">{{$data['totalBookings']}}</span>
            <span class="card-text">Total Bookings</span>
            <i class="bi bi-journal-plus icon"></i>
        </div>
        <div class="kpi-card purple">
            <span class="card-value">{{$data['completedBookings']}}</span>
            <span class="card-text">Completed Bookings</span>
            <i class="bi bi-journal-check icon"></i>
        </div>
    </div>
</div>

@endsection
