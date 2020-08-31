@extends('layouts.dashboard.admin')

@section('content')
    <div class="col-md-10">
        <div class="col-md-12 mt-4 mb-4">
            <div class="row">
                <div class="col-md-9">
                    <label for="exampleFormControlInput1 " style="font-size: 20px; color: #666; font-weight: 500;">Statement:</label>
                    <div class="form-inline ">
                        <select class="form-control col-md-4" style="height: 45px; border-radius: 0px;">
                            <option selected="">Sort</option>
                            <option>New</option>
                            <option>Old</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="exampleFormControlInput1 " style="font-size: 20px; color: #666; font-weight: 500;">Month:</label>
                    <div class="form-inline ">
                        <select class="form-control" style="height: 40px; border-radius: 0px; width: 100%;">
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card m-0 p-0">
                <canvas id="myChart" width="700" height="300"></canvas>
            </div>
        </div>
    </div>
@endsection


@push('scripts')


<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    
    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        } else {
        dropdownContent.style.display = "block";
        }
        });
    }
</script>


<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Visitors', 'Transactions', 'Sales', 'Inquiry'],
            datasets: [{
                // label: '# of Votes',
                data: [12, '{{ $transactions }}', '{{ $sales }}', '{{ $messages }}'],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>


@endpush
