  <!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <title>Generate Voucher</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Google Font -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">



    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">



    <!-- FontAwesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">



     <link rel="stylesheet" href="{{ asset('assets/css/headerfooter.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/voucher.css') }}">

  



</head>



<body>



    {{-- Header --}}

    @include('partials.header')



   <div class="main d-flex justify-content-center align-items-center">

     <div class="form-container ">

        <h2>Generate Fee Voucher</h2>

     @if(session('success'))
     <script> 
        alert("{{session('success')}}")
     </script>
     @endif

        <form method="post" action="/voucher">

            @csrf

            <div class="form-grid">



                



                <div class="form-group">

                    <label>Student ID</label>

                    <input type="text" name="studentid" placeholder="Enter Student ID" required>

                </div>



                <div class="form-group">

                    <label>Full Name</label>

                    <input type="text" name="fullname" placeholder="Enter Full Name" required>

                </div>



                <div class="form-group">

                    <label>Phone Number</label>

                    <input type="text" name="number" placeholder="Enter Phone Number">

                </div>



                <div class="form-group full-width">

                    <label>Address</label>

                    <textarea rows="2" name="address" placeholder="Enter Address"></textarea>

                </div>



                <div class="form-group">

                    <label>Date</label>

                    <input type="date" name="date" required>

                </div>



                <div class="form-group">

                    <label>Payment Method</label>

                    <select name="paymentmethod" required>

                        <option value="">Select Method</option>

                        <option value="cash">Cash</option>

                        <option value="online">Online</option>

                        <option value="cheque">Cheque</option>

                    </select>

                </div>



                <div class="form-group">

                    <label>Transaction ID / Cheque / Cash</label>

                    <input type="text" name="paymentid" placeholder="Enter Transaction ID" required>

                </div>



                <div class="form-group">

                    <label>Amount</label>

                    <input type="number" name="amount" placeholder="Enter Amount" required>

                </div>



            </div>



            <button class="voucher-btn" type="submit" >Generate Voucher</button>

        </form>

    </div>

   </div>



     {{-- Footer --}}

    @include('partials.footer')



</body>



</html>