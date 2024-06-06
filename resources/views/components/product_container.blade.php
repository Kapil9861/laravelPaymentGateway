<div class="product-container">
    <div class="product">
        <img src="{{$image1}}" alt="Product 1">
        <div class="product-name">{{$product1}}</div>
        <form action="/checkout" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit" onclick="buy($id1, $amount1)">Buy</button>
</form>  
        <div class="amount">{{$amount1}}</div>
    </div>
    <div class="product">
        <img src="{{$image2}}" alt="Product 1">
        <div class="product-name">{{$product2}}</div>
        <form action="/checkout" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit" onclick="buy($id2, $amount2)">Buy</button>
</form>        
<div class="amount">{{$amount2}}</div>
    </div>
    <div class="product">
        <img src="{{$image3}}" alt="Product 1">
        <div class="product-name">{{$product3}}</div>
        <form action="/checkout" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit" onclick="buy($id3, $amount3)">Buy</button>
</form>        
<div class="amount">{{$amount3}}</div>
    </div>
</div>

<script>
    // Function to handle buy button click
    function buy(productId, amount) {
        // Redirect to next page with product ID and amount
        window.location.href = 'index.blade.php?product=' + productId + '&amount=' + amount;
    }
</script>