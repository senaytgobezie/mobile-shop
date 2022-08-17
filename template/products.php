  <!-- product  -->
  <?php
$item_id=$_GET['item_id']??1;
foreach($product->getData() as $item)
{ if($item['item_id']==$item_id)
    {
  ?>
  <section id="product" class="py-3">
<div class="container">
    <div class="row">
        <div class="col-sm-6">
<img src="<?php echo $item['item_image']??"assets/products/1.png";?>" alt="product" class="img-fluid">
<div class="form-row pt-4 font-size-16 font-baloo">
    <div class="col">
<button type="submit" class="btn btn-danger form-control">Proceed to buy</button>

    </div>
    <div class="col">
        <button type="submit" class="btn btn-warning form-control"> Add to cart</button>
        
            </div>
</div>
        </div>
        <div class="col-sm-6 py-5">
            <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ??"unknown";?></h5>
            <small>by <?php echo $item['item_brand'] ??"unknown";?></small>
            <div class="d-flex">
                <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                </div>
                <a href="#" class="px-2 font-rale font-size-12">20,345 ratings|1000+ answered questions</a>
            </div>
            <hr class="m-0"/>
<!-- price  -->
<table class="my-3">
    <tr class="font-rale font-size-14">
        <td>M.R.P.</td>
        <td> <strike>$162.00</strike></td>
    </tr>
    <tr class="font-rale font-size-14">
        <td>Deal price</td>
        <td class="font-size-20 text-danger"> $ <span><?php echo $item['item_price'] ??0;?></span> <small class="text-dark"> &nbsp;&nbsp;inclusive all tasks</small></td>
    </tr>
    <tr class="font-rale font-size-14">
        <td>you save</td>
        <td ><span class="font-size-16 text-danger">$152.0</span> </td>
    </tr>
</table>
<!-- price  -->
<!-- policy  -->
<div id="policy">
<div class="d-flex">
    <div class="return mr-5 text-center">
    <div class="font-size-20 color-second my-2">
        <span><i class="fas fa-retweet border p-3 rounded-pill"></i></span>
    </div>
    <a href="#" class="font-size-12 font-rale">10 days <br>Deliver</a>
</div>
<div class="return mr-5 text-center">
    <div class="font-size-20 color-second my-2">
        <span><i class="fas fa-truck border p-3 rounded-pill"></i></span>
    </div>
    <a href="#" class="font-size-12 font-rale">daily <br>tuition</a>
</div>
<div class="return mr-5 text-center">
    <div class="font-size-20 color-second my-2">
        <span><i class="fas fa-check-double border p-3 rounded-pill"></i></span>
    </div>
    <a href="#" class="font-size-12 font-rale">one year <br> warrantee</a>
</div>
</div> 
</div>
<!-- policy  -->

                <!-- order-details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by : Mar 29  - Apr 1</small>
                    <small>Sold by <a href="#">Daily Electronics </a>(4.5 out of 5 | 18,198 ratings)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                </div>
                <!-- !order-details -->
                <div class="row">
                    <div class="col-6">
                        <!-- color -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!-- !color -->
                    </div>
                    <div class="col-6">
                        <!-- product qty section -->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- !product qty section -->
                    </div>
                </div>
                <!-- size -->
                <div class="size my-3">
                    <h6 class="font-baloo">Size :</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">4GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">6GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">8GB RAM</button>
                        </div>
                    </div>
                </div>
                <!-- !size -->
        </div>
<div class="col-12">
    <h6 class="font rubik">Product Description</h6>
    <hr>
    <p class="font-rale cont-size-14">Lorem ipsum 
        dolor sit amet consectetur, adipisicing elit. 
        Cupiditate ducimus quisquam libero officia harum nesciunt 
        tempore sed dolores corrupti reiciendis.Lorem ipsum 
        dolor sit amet consectetur, adipisicing elit. 
        Cupiditate ducimus quisquam libero officia harum nesciunt 
        tempore sed dolores corrupti reiciendis.</p>
        <p class="font-rale cont-size-14">Lorem ipsum 
            dolor sit amet consectetur, adipisicing elit. 
            Cupiditate um nesciunt 
            tempore sed dolores corrupti reiciendis.</p>
</div>
    </div>
</div>
    </section>
    <?php
    }}
 ?>
    <!-- product  -->