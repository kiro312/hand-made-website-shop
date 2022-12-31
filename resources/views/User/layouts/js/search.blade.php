@vite(['resources/css/app.css', 'resources/js/app.js'])
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

<script>
    function search(key) {
        if (event.key === 'Enter') {
            jQuery.ajax({
                url: "{{ route('main.search', ' + key + ') }}",
                type: "Get",
                success: function(data) {}
            });
        }
    }
</script>
