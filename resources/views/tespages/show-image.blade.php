@if($gambar)
<img src="{{ Storage::url($gambar) }}" height="75" width="75" alt="" />
@else
<img src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="" height="75" width="75">
@endif