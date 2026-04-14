<?php
// Remove the inline styles and use the existing CSS classes from index.css
?>

<div class="pay-body">
    <div class="pay">
        <h2>Payment Method</h2>

        <!-- ✅ Google Pay QR Code Section -->
        <div class="payment-info" style="text-align: center; margin-bottom: 15px;">
            <img src="images/gpay-qr.jpg" alt="Google Pay QR Code" style="width: 200px; height: 200px; object-fit: contain;">
            <p>Scan the QR code to pay using <strong>Google Pay</strong></p>
            <p style="color: red; font-weight: bold;">Please upload your payment receipt in the section below to confirm your order. Otherwise, your order will not be processed.</p>

        </div>

        <?php
        $sql = mysqli_query($conn, "SELECT * FROM product WHERE pid = $id");
        $check = mysqli_query($conn, "SELECT * FROM sale WHERE pid = $id");
        $pro = mysqli_fetch_assoc($sql);
        $sale = mysqli_fetch_assoc($check);
        ?>
        <div class="payment-info">
            <h4>Price: Rs. <?php echo mysqli_num_rows($check) == 0 ? $pro['price'] : $sale['sale_amt']; ?></h4>
        </div>

        <form action="buyForm.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="state">State</label>
                <select name="state" required>
                    <option value="" selected disabled>--Select State--</option>
                    <?php
                    $states = array("Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh","Goa","Gujarat","Haryana","Himachal Pradesh","Jharkhand","Karnataka","Kerala","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Odisha","Punjab","Rajasthan","Sikkim","Tamil Nadu","Telangana","Tripura","Uttar Pradesh","Uttarakhand","West Bengal"
);
                    
                    foreach($states as $states) {
                        echo "<option value=\"$states\">$states</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="district">District</label>
                <input type="text" name="districr" required>
            </div>

            <div class="form-group">
                <label for="tole">Village</label>
                <input type="text" name="tole" required>
            </div>

            <div class="form-group">
                <label for="ward">Ward No.</label>
                <input type="number" name="ward" min="1" required>
            </div>

            <div class="form-group">
                <label for="ph">Phone Number</label>
                <input type="number" name="ph" maxlength="10" required>
                <small>Format: 98XXXXXXXX</small>
            </div>

            <div class="form-group">
                <label for="image">Payment Receipt</label>
                <input type="file" name="image" accept="image/*" required>
                <small>Accepted formats: JPG, JPEG, PNG</small>
            </div>

            <input type="submit" name="pay" value="Confirm Payment">
        </form>
    </div>
</div>
