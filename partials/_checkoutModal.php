<!-- Checkout Modal -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="checkoutModal">Enter Your Correct Details:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="partials/_manageCart.php" method="post">
                <div class="form-group">
                    <b><label for="address">Permanent Address:</label></b>
                    <input class="form-control" id="address" name="address" placeholder="Ex. Purok1, Sirawan, Toril, Davao City" type="text" required minlength="3" maxlength="500">
                </div>
                <div class="form-group">
                    <b><label for="address1">Province:</label></b>
                    <input class="form-control" id="address1" name="address1" placeholder="Ex. Davao Del Sur" type="text">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <b><label for="phone">Phone No:</label></b>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon">+63</span>
                        </div>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="xxxxxxxxxx" required pattern="[0-9]{11}" maxlength="11">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <b><label for="zipcode">Zip Code:</label></b>
                        <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="xxxxxx" required pattern="[0-9]{4}" maxlength="4">                    
                    </div>
                </div>
                <div class="form-group">
                    <b><label for="password">Password:</label></b>    
                    <input class="form-control" id="password" name="password" placeholder="Enter Password" type="password" required minlength="4" maxlength="21" data-toggle="password">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <input type="hidden" name="amount" value="<?php echo $totalPrice ?>">
                    <button type="submit" name="checkout" class="btn btn-success" style="background-color:#910808; border: .5px solid transparent;">Order</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>