<form action="/checkout" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="button" class="btn btn-primary w-50 w-md-25">
      Buy Design
    </button>
</form>