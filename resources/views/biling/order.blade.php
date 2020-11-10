@extends('customer.layout.app')
@section('content')
<br>
<br>
	<div class="bill-dt-bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="bill-detail">
						<div class="bill-dt-step">
              <img src="store/images/logo/faicon.png" style="width:100px">
              <br>
              <br>
							<div class="bill-title">
								<h4><span class="item_product">Suvidhaye.in</span></h4>
							</div>
							<div class="bill-descp">
                <span class="item-product">Plot No. 2202, Trimurti Nagar,Jabalpur (M.P.)</span>
                <span style="margin-left:350px">Date</span><br>
                <span class="item-product">0761-3590646 (Call)</span>
                <span style="margin-left:480px">Rental Number</span><br>
                <span class="item-product">7024027407 (Whatsapp)</span>
                <span style="margin-left: 460px">1234567890</span><br>
							</div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="bill-dt-step">
                        <div class="bill-title">
                            <div class="itm-ttl"><b>BILL TO</b></div>
                        </div>
                        <div class="bill-descp">
                            <p class="bill-address">Mr. Shashank Tiwari</p>
                            <p class="bill-address">Plot no. 665, Shivnagar, Damohnaka</p>
                            <p class="bill-address">1234567890</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bill-dt-step">
                        <div class="bill-title">
                            <div class="itm-ttl"><b>SHIP TO</b></div>
                        </div>
                        <div class="bill-descp">
                            <p class="bill-address">Mr. Shashank Tiwari</p>
                            <p class="bill-address">Plot no. 665, Shivnagar, Damohnaka</p>
                            <p class="bill-address">1234567890</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
               <div class="col-lg-11 col-md-11">
								<div class="card card-static-2 mt-30 mb-30">
						      <div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table">
												<thead>
													<tr>
                            <th style="text-align:center">Product Name</th>
                            <th style="text-align:center">Quantity</th>
                            <th style="text-align:center">Unit Price (Rs.)</th>
                            <th style="text-align:center">Total (Rs.)</th>
												</thead>
												<tbody>
													<tr>
                            <td style="text-align:center">A</td>
                            <td style="text-align:center">1</td>
                            <td style="text-align:center">145</td>
														<td style="text-align:center">145</td>
                          </tr>
                          <tr>
                            <td style="text-align:center">B</td>
                            <td style="text-align:center">1</td>
                            <td style="text-align:center">145</td>
														<td style="text-align:center">145</td>
                          </tr>
                          <tr>
                            <td style="text-align:center">B</td>
                            <td style="text-align:center">1</td>
                            <td style="text-align:center">145</td>
														<td style="text-align:center">145</td>
                          </tr>
												</tbody>
											</table>
										</div>
                  </div>
               </div>
             </div>
           </div>
           <div class="row justify-content-center">
             <div class="col-lg-12">
                 <div class="total-dt">
                    <div class="total-checkout-group">
                        <div class="cart-total-dil">
                            <h4>Sub Total</h4>
                            <span>&#x20b9 25</span>
                        </div>
                        <div class="cart-total-dil pt-3">
                            <h4>Delivery Charges</h4>
                            <span>40</span>
                        </div>
                    </div>
                    <div class="main-total-cart">
                        <h2>Total</h2>
                        <span>&#x20b9 25</span>
                    </div>
                </div>
             </div>
           </div>
           <div class="bill-dt-step">
		           <div class="bill-bottom">
		             <div class="thnk-ordr">Thanks for Ordering</div>
		               <a class="print-btn hover-btn" href="javascript:window.print();">Print</a>
		            </div>
		        </div>
			  </div>
		</div>
  </div>
  
@endsection