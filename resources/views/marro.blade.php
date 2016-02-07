<html>
<head>
    <script src="https://secure.na.tnspayments.com/checkout/version/32/checkout.js"
            data-error="errorCallback"
            data-cancel="cancelCallback">
    </script>

    <script type="text/javascript">
        function errorCallback(error) {
            console.log(JSON.stringify(error));
        }
        function cancelCallback() {
            console.log('Payment cancelled');
        }

        Checkout.configure({
            merchant: '<your_merchant_id>',
            order: {
                amount: function() {
                    //Dynamic calculation of amount
                    return 80 + 20;
                },
                currency: 'USD',
                description: 'Ordered goods',
                id: '<unique_order_id>'
            },
            interaction: {
                merchant: {
                    name: 'Your merchant name',
                    address: {
                        line1: '200 Sample St',
                        line2: '1234 Example Town'
                    }
                }
            }
        });
    </script>
</head>
<body>
...
<input type="button" value="Pay with Lightbox" onclick="Checkout.showLightbox();" />
<input type="button" value="Pay with Payment Page" onclick="Checkout.showPaymentPage();" />
...
</body>
</html>