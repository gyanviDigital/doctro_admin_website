<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<main>
<h1>Pay with Razorpay</h1>
    <form id="paymentForm">
        <input type="number" id="amount" placeholder="Enter amount" required>
        <button type="button" id="payButton">Pay Now</button>
    </form>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        const razorpayKey = "{{ $razorpayKey }}";

        document.getElementById('payButton').onclick = function () {
            const amount = document.getElementById('amount').value;

            fetch('{{ route('payment.process') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ amount }),
            })
            .then(response => response.json())
            .then(data => {
                const options = {
                    key: razorpayKey,
                    amount: amount * 100,
                    currency: 'INR',
                    name: 'Saurabh ray',
                    description: 'Payment Gateway Integration',
                    order_id: data.orderId,
                    handler: function (response) {
                        fetch('{{ route('payment.success') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            },
                            body: JSON.stringify(response),
                        })
                        .then(response => response.json())
                        .then(data => alert(data.message))
                        .catch(error => console.error(error));
                    },
                    theme: {
                        color: '#3399cc',
                    },
                };
                const razorpay = new Razorpay(options);
                razorpay.open();
            })
            .catch(error => console.error(error));
        };
    </script>
    </main>
</body>
</html>