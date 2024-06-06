<div class="product-container">
    <div class="product1">
        <img src="{{$image1}}" alt="Product 1">
        <div class="product-name">{{$product1}}</div>
        <button class="buy-button" onclick="buy($id1, $amount1)">Buy</button>
        <div class="amount">{{$amount1}}</div>
    </div>
    <div class="product1">
        <img src="{{$image2}}" alt="Product 1">
        <div class="product-name">{{$product2}}</div>
        <button class="buy-button" onclick="buy($id2, $amount2)">Buy</button>
        <div class="amount">{{$amount2}}</div>
    </div>
</div>

<script>
    // Function to handle buy button click
    function buy(productId, amount) {
        // Redirect to next page with product ID and amount
        window.location.href = 'index.blade.php?product=' + productId + '&amount=' + amount;
    }
</script>