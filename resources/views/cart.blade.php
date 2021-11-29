@extends('layouts.app')

@section('konten')
<div class="container">
  <br></br>
  <div class="row">
    <div class="col-md-12">
      <div class="cart-view-area">
        <div class="cart-view-table">
          <form action="">
            <div class="table-responsive">
               <table class="table">
               <thead>
                   <tr>
                     <th></th>
                     <th></th>
                     <th>Produk</th>
                     <th>Harga</th>
                     <th>Jumlah</th>
                     <th>Total</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                     <td><a href="#"><img class="bd-placeholder-img" width="100px" src="{{asset('frontend/image/product-img/MSI GL66 11UDK - 442ID PULSE.jpg')}}" alt="img"></a></td>
                     <td>MSI GL66 11UDK - 442ID PULSE<a class="aa-cart-title" href="#"></a></td>
                     <td>Rp 19.999.999</td>
                     <td><input class="aa-cart-quantity" type="number" value="1"></td>
                     <td>Rp 19.999.999</td>
                   </tr>
                   <tr>
                     <td colspan="6" class="aa-cart-view-bottom text-center">
                       <div class="aa-cart-coupon">
                         <input class="aa-coupon-code" type="text" placeholder="Coupon">
                         <input class="aa-cart-view-btn btn-success" type="submit" value="Apply Coupon">
                         <input class="aa-cart-view-btn btn-dark" style="margin-left: 2rem" type="submit" value="Update Cart">
                       </div>
                     </td>
                   </tr>
                   </tbody>
               </table>
             </div>
          </form>

          <!-- Cart Total view -->
          <div class="row cart-view-total justify-content-center text-center">
            <h4>Total Keranjang Belanja</h4>
            <table class="aa-totals-table">
              <div class = "container align-self-center">
              <tbody>
                <tr>
                  <th>Subtotal</th>
                  <td>Rp 19.999.999</td>
                </tr>
                <tr>
                  <th>Total</th>
                  <td>Rp 19.999.999</td>
                </tr>
              </tbody>
            </table>
          </div> 
          <br></br>
           
          </div>
          <div class="row" style="padding-left: 25rem; padding-right:25rem;">
            <button type="button" class="btn btn-success">Checkout<a href="checkout"></a></button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br></br>
</div>
@endsection