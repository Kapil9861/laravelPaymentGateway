<div class="product-container">
    <div class="product">
        <img src="{{$image1}}" alt="Product 1">
        <div class="product-name">{{$product1}}</div>
        <div class="payButton">
        <form action="/checkout" method="post">
        @csrf
                <input type="hidden" name="product_name" value="{{$product1}}">
                <input type="hidden" name="amount" value="{{$amount1}}">
                <input type="hidden" name="product_id" value="{{$id1}}">
                <button type="submit" class="button">Buy</button>
        </form>  
        <div class="amount">${{$amount1}}</div>
        </div>
    </div>
    <div class="product">
        <img src="{{$image2}}" alt="Product 1">
        <div class="product-name">{{$product2}}</div>
        <div class="payButton">
        <form action="/checkout" method="post">
            @csrf
            @csrf
                <input type="hidden" name="product_name" value="{{$product2}}">
                <input type="hidden" name="amount" value="{{$amount2}}">
                <input type="hidden" name="product_id" value="{{$id2}}">
                <button type="submit" class="button">Buy</button>
        </form>        
        <div class="amount">${{$amount2}}</div>
        </div>
    </div>
    <div class="product">
        <img src="{{$image3}}" alt="Product 1">
        <div class="product-name">{{$product3}}</div>
        <div class="payButton">
        <form action="/checkout" method="post">
        @csrf
                <input type="hidden" name="product_name" value="{{$product3}}">
                <input type="hidden" name="amount" value="{{$amount3}}">
                <input type="hidden" name="product_id" value="{{$id3}}">
                <button type="submit" class="button">Buy</button>
        </form>        
        <div class="amount">${{$amount3}}</>
        </div>
        
    </div>
</div>