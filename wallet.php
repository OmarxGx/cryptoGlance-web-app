<?php
$jsArray = array();

require_once("includes/header.php");
?>
       
<!-- ### Below is the Wallet page which contains wallet balances for children addresses, and allows for adding new addresses, and editing/deleting the entire wallet
      
-->
         
      <div id="wallet-wrap" class="container sub-nav">

        <div id="wallet-details" class="panel panel-primary panel-overview">
           <h1>Wallet</h1>
           <div class="panel-heading">
              <a href="#goDirectlyToHelpPageAnchor"><button type="button" class="panel-header-button"><i class="icon icon-question-sign"></i></button></a>
              <h2 class="panel-title"><img src="images/icon-bitcoin.png" /> {{WALLET_NAME}}</h2>
           </div>
           <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-hover table-striped table-wallet">
                 <thead>
                    <tr>
                       <th>Address Name</th>
                       <th>Public Key</th>
                       <th>Total Tx</th>
                       <th>Balance</th>
                       <th>Remove?</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                      <td>Middlecoin Receiver</td>
                      <td>9a898fg9gf98aggfs9dfg9gsd9dgf9sag</td>
                      <td>19</td>
                      <td>2.00234974 BTC</td>
                      <td><a href="#removeWallet"><span class="red"><i class="icon icon-remove"></i></span></a></td>
                    </tr>
                    <tr>
                      <td>CleverMining Receiver</td>
                      <td>0d0d7f0a70f70s9a7f070320kl23j4lkh</td>
                      <td>6</td>
                      <td>1.39495933 BTC</td>
                      <td><a href="#removeWallet"><span class="red"><i class="icon icon-remove"></i></span></a></td>
                    </tr>
                    <tr>
                      <td>TradeMyBit Receiver</td>
                      <td>32ihoih50hsd8fy98y203h5ih08sdf8hn</td>
                      <td>4</td>
                      <td>0.37349673 BTC</td>
                      <td><a href="#removeWallet"><span class="red"><i class="icon icon-remove"></i></span></a></td>
                    </tr>
                 </tbody>
                </table>
              </div>
           </div><!-- / .panel-body -->
           <div class="panel-footer">
              <div class="pull-left">
                 <h3 class="helpful-tip"><i class="icon icon-info-sign"></i> table scrolls horizontally</h3>
              </div>
              <div class="pull-right">
                 <button type="button" class="btn btn-default btn-updater" data-type="all"><i class="icon icon-refresh"></i> Update Now</button>
              </div>
           </div>
        </div>
        
        <div id="readme" class="panel panel-default">
          <h1>Wallet Details</h1>
          <div class="panel-heading">
              <h2 class="panel-title"><i class="icon icon-walletalt"></i></h2>
          </div>
          <div class="panel-body">
            <div id="alert-saved-wallet" class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Success!</strong> You've updated your wallet.
            </div>  
            <form class="form-horizontal" role="form">       
             <div class="form-group">
               <label for="inputWalletName" class="control-label col-sm-4">Wallet Name:</label>
               <div class="col-sm-7">
                 <input type="text" class="form-control" id="inputWalletName">
               </div>
             </div>
             <div class="form-group">
               <label for="inputWalletCurrency" class="control-label col-sm-4">Currency:</label>
               <div class="col-sm-5">
                 <select class="form-control">
                   <option>Bitcoin (BTC)</option>
                   <option>Litecoin (LTC)</option>
                   <option>Dogecoin (DOGE)</option>
                 </select>
               </div>
             </div>
             <div class="form-group">
               <label class="control-label col-sm-4">Add Address:</label>
               <div class="col-sm-7">
                 <input type="text" class="form-control" id="inputNewAddress" placeholder="Add new address...">
               </div>
             </div>
             <div class="form-group">
               <div class="col-sm-offset-4 col-sm-5">
                 <button type="button" class="btn btn-lg btn-success" id="btnSaveWallets"><i class="icon icon-save-floppy"></i> Save Wallet</button>
                 <button type="button" class="btn btn-lg btn-danger" id="btnDeleteWallet"><i class="icon icon-circledelete"></i> Remove Wallet</button>
               </div>
             </div>
            </form>
            <br>
          </div>
        </div>
      </div>
      <!-- /container -->

      <?php require_once("includes/footer.php"); ?>
      </div>
      <!-- /page-container -->
      
      <?php require_once("includes/scripts.php"); ?>
   </body>
</html>