<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function logout() {
        jQuery.ajax({
            url: "{{ route('logout') }}",
            type: "POST",
            data: {

            },
            success: function(data) {
                location.reload();
            }
        });
    }

    function addToCart(item_id) {
        jQuery.ajax({
            url: "{{ route('cart.add') }}",
            type: "POST",
            data: {
                "item_id": item_id,
                "item_quantity": 1,
            },
            success: function(data) {
                // console.log(data);
                location.reload();
            }
        });
    }

    function removeFromCart(item_id) {
        jQuery.ajax({
            url: "{{ route('cart.remove') }}",
            type: "DELETE",
            data: {
                "item_id": item_id,
            },
            success: function(data) {
                // console.log(data);
                location.reload();
            }
        });
    }

    function changeItemQtInCart(item_id) {
        item_qt = document.querySelector('#qty_' + item_id);
        item_quantity = item_qt.value;
        jQuery.ajax({
            url: "{{ route('cart.changeQt') }}",
            type: "POST",
            data: {
                "item_id": item_id,
                "item_quantity": item_quantity,
            },
            success: function(data) {
                location.reload();
            }
        });
    }

    function makeOrder() {
        payment_method = document.querySelector('#payment');
        payment_method_id = payment_method.value;
        jQuery.ajax({
            url: "{{ route('order.make') }}",
            type: "POST",
            data: {
                "payment_method_id": payment_method_id,
            },
            success: function(data) {
                location.reload();
                // console.log(data);
            }
        });
    }

    function deleteOrder(order_id) {
        jQuery.ajax({
            url: "{{ route('order.delete') }}",
            type: "POST",
            data: {
                "order_id": order_id,
            },
            success: function(data) {
                location.reload();
            }
        });
    }
</script>
