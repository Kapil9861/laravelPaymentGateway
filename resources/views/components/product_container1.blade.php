<div class="product-container">
<div class="product1">
        <img src="{{$image1}}" alt="Product">
        <div class="product-name">{{$product1}}</div>
        <form action="/checkout" method="post">
            <div class="payButton">
            <@csrf
                <input type="hidden" name="product_name" value="{{$product1}}">
                <input type="hidden" name="amount" value="{{$amount1}}">
                <input type="hidden" name="product_id" value="{{$id1}}">
                <button type="submit" class="button">Buy</button>
        </form>  
        <div class="amount">${{$amount1}}</div>
            </div>
    
    </div>
    <div class="product1">
        <img src="{{$image2}}" alt="Product">
        <div class="product-name">{{$product2}}</div>
        <div class="payButton">
        <form action="/checkout" method="post">
        @csrf
                <input type="hidden" name="product_name" value="{{$product2}}">
                <input type="hidden" name="amount" value="{{$amount2}}">
                <input type="hidden" name="product_id" value="{{$id2}}">
                <button type="submit" class="button">Buy</button>
        </form>        
        <div class="amount">${{$amount2}}</div>
        </div>
    </div>
</div>
<script>
    // Function to handle buy button click
    function buy(productId, amount) {
        // Redirect to next page with product ID and amount
        window.location.href = 'index.blade.php?product=' + productId + '&amount=' + amount;
    }
</script>