

<div class="row mt-5">
    <div class="col-md-12">
        <div class="mb-3">
            <label for="price">Unit Price in AED  <span class="text-muted font-weight-light">&#40;do not use any number format&#41;</span></label>
            <input
                type="number"
                name="price"
                class="form-control
                @error('price') border border-solid border-danger  @enderror"
                id="price"
                placeholder="0"
                value="{{ old('price') }}"
                style="font-size: 24px;"
                min="0"            >
            @error('price')
                <div class="text-danger text-xs">{{ $message }}</div>
            @enderror
        </div>
    </div>

</div>

<div id="validatedSection">
<div class="row mt-5">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="price">Dubai Land Department &#40;DLD&#41; Fees </label>
            <input
                type="number"
                name="dld_fees"
                class="form-control
                @error('dld_fees') border border-solid border-danger  @enderror"
                id="dld_fees"
                value="{{ old('dld_fees') }}"
                step="0.01"
                disabled
            >
            <span class="text-muted font-weight-light pt-2">&#40;do not use any number format&#41;</span>
            @error('dld_fees')
                <div class="text-danger text-xs">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="price">Admin Fees <span class="text-muted font-weight-light pt-2">&#40;including VAT&#41;</span></label>
            <input
                type="number"
                name="admin_fees"
                class="form-control
                @error('oqood') border border-solid border-danger  @enderror"
                id="admin_fees"
                value="{{ old('admin_fees') }}"
                disabled
            >
            <span class="text-muted font-weight-light pt-2">&#40;do not use any number format&#41;</span>
            @error('admin_fees')
                <div class="text-danger text-xs">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

{{-- <input type="number" id="hiddenOutstandingBalance" value="0"> --}}

<div class="row mt-4">
    <div class="card-body">
        <h4 class="card-title mb-4">Milestones</h4>


        <div class="row" id="disabledSection">
            
            <div class="mb-3 col-lg-3">
                <label for="milestone">Opening Balance</label>
                <input type="text" id="hiddenOutstandingBalance_0" name="hiddenOutstandingBalance_0" class="form-control form-control-sm" value="0" style="opacity: 0.6; pointer-events: none; ">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="milestone">Description</label>
                <input type="text" id="milestone_0" name="group_a[0][milestone]" class="form-control form-control-sm" value="Downpayment" disabled>
            </div>

            <div class="mb-3 col-lg-3">
                <label for="percentage">Percentage (%)</label>
                <input type="number" id="percentage_0" name="group_a[0][percentage]" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="amount" id="amnt">Amount</label>
                <input type="number" id="amount_0" name="group_a[0][amount]" value="" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-lg-3">
                <label for="milestone">Remaining Balance</label>
                <input type="text" id="hiddenOutstandingBalance_1" name="hiddenOutstandingBalance_1" class="form-control form-control-sm" value="0" style="opacity: 0.6; pointer-events: none; ">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="milestone">Description</label>
                <input type="text" id="milestone_1" name="group_a[1][milestone]" class="form-control form-control-sm" value="" disabled>
            </div>

            <div class="mb-3 col-lg-3">
                <label for="percentage">Percentage (%)</label>
                <input type="number" id="percentage_1" name="group_a[1][percentage]" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="amount" id="amnt">Amount</label>
                <input type="number" id="amount_1" name="group_a[1][amount]" value="" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>
        </div>


        <div class="row">
            <div class="mb-3 col-lg-3">
                <label for="milestone">Remaining Balance</label>
                <input type="text" id="hiddenOutstandingBalance_2" name="hiddenOutstandingBalance_2" class="form-control form-control-sm" value="0" style="opacity: 0.6; pointer-events: none; ">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="milestone">Description</label>
                <input type="text" id="milestone_2" name="group_a[2][milestone]" class="form-control form-control-sm" value="" disabled>
            </div>

            <div class="mb-3 col-lg-3">
                <label for="percentage">Percentage (%)</label>
                <input type="number" id="percentage_2" name="group_a[2][percentage]" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="amount" id="amnt">Amount</label>
                <input type="number" id="amount_2" name="group_a[2][amount]" value="" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-lg-3">
                <label for="milestone">Remaining Balance</label>
                <input type="text" id="hiddenOutstandingBalance_3" name="hiddenOutstandingBalance_3" class="form-control form-control-sm" value="0" style="opacity: 0.6; pointer-events: none; ">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="milestone">Description</label>
                <input type="text" id="milestone_3" name="group_a[3][milestone]" class="form-control form-control-sm" value="" disabled>
            </div>

            <div class="mb-3 col-lg-3">
                <label for="percentage">Percentage (%)</label>
                <input type="number" id="percentage_3" name="group_a[3][percentage]" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="amount" id="amnt">Amount</label>
                <input type="number" id="amount_3" name="group_a[3][amount]" value="" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-lg-3">
                <label for="milestone">Remaining Balance</label>
                <input type="text" id="hiddenOutstandingBalance_4" name="hiddenOutstandingBalance_4" class="form-control form-control-sm" value="0" style="opacity: 0.6; pointer-events: none; ">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="milestone">Description</label>
                <input type="text" id="milestone_4" name="group_a[4][milestone]" class="form-control form-control-sm" value="" disabled>
            </div>

            <div class="mb-3 col-lg-3">
                <label for="percentage">Percentage (%)</label>
                <input type="number" id="percentage_4" name="group_a[4][percentage]" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="amount" id="amnt">Amount</label>
                <input type="number" id="amount_4" name="group_a[4][amount]" value="" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-lg-3">
                <label for="milestone">Remaining Balance</label>
                <input type="text" id="hiddenOutstandingBalance_5" name="hiddenOutstandingBalance_5" class="form-control form-control-sm" value="0" style="opacity: 0.6; pointer-events: none; ">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="milestone">Description</label>
                <input type="text" id="milestone_5" name="group_a[5][milestone]" class="form-control form-control-sm" value="" disabled>
            </div>

            <div class="mb-3 col-lg-3">
                <label for="percentage">Percentage (%)</label>
                <input type="number" id="percentage_5" name="group_a[5][percentage]" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="amount" id="amnt">Amount</label>
                <input type="number" id="amount_5" name="group_a[5][amount]" value="" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-lg-3">
                <label for="milestone">Remaining Balance</label>
                <input type="text" id="hiddenOutstandingBalance_6" name="hiddenOutstandingBalance_6" class="form-control form-control-sm" value="0" style="opacity: 0.6; pointer-events: none; ">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="milestone">Description</label>
                <input type="text" id="milestone_6" name="group_a[6][milestone]" class="form-control form-control-sm" value="" disabled>
            </div>

            <div class="mb-3 col-lg-3">
                <label for="percentage">Percentage (%)</label>
                <input type="number" id="percentage_6" name="group_a[6][percentage]" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="amount" id="amnt">Amount</label>
                <input type="number" id="amount_6" name="group_a[6][amount]" value="" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-lg-3">
                <label for="milestone">Remaining Balance</label>
                <input type="text" id="hiddenOutstandingBalance_7" name="hiddenOutstandingBalance_7" class="form-control form-control-sm" value="0" style="opacity: 0.6; pointer-events: none; ">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="milestone">Description</label>
                <input type="text" id="milestone_7" name="group_a[7][milestone]" class="form-control form-control-sm" value="" disabled>
            </div>

            <div class="mb-3 col-lg-3">
                <label for="percentage">Percentage (%)</label>
                <input type="number" id="percentage_7" name="group_a[7][percentage]" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="amount" id="amnt">Amount</label>
                <input type="number" id="amount_7" name="group_a[7][amount]" value="" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-lg-3">
                <label for="milestone">Remaining Balance</label>
                <input type="text" id="hiddenOutstandingBalance_8" name="hiddenOutstandingBalance_8" class="form-control form-control-sm" value="0" style="opacity: 0.6; pointer-events: none; ">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="milestone">Description</label>
                <input type="text" id="milestone_8" name="group_a[8][milestone]" class="form-control form-control-sm" value="" disabled>
            </div>

            <div class="mb-3 col-lg-3">
                <label for="percentage">Percentage (%)</label>
                <input type="number" id="percentage_8" name="group_a[8][percentage]" class="form-control form-control-sm" min=0 disabled step="0.01">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="amount" id="amnt">Amount</label>
                <input type="number" id="amount_8" name="group_a[8][amount]" value="" class="form-control form-control-sm" min=0 disabled step="0.01">
            </div>
        </div>


        <div class="row">
            <div class="mb-3 col-lg-3">
                <label for="milestone">Remaining Balance</label>
                <input type="text" id="hiddenOutstandingBalance_9" name="hiddenOutstandingBalance_9" class="form-control form-control-sm" value="0" style="opacity: 0.6; pointer-events: none; ">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="milestone">Description</label>
                <input type="text" id="milestone_9" name="group_a[9][milestone]" class="form-control form-control-sm" value="" disabled>
            </div>

            <div class="mb-3 col-lg-3">
                <label for="percentage">Percentage (%)</label>
                <input type="number" id="percentage_9" name="group_a[9][percentage]" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="amount" id="amnt">Amount</label>
                <input type="number" id="amount_9" name="group_a[9][amount]" value="" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-lg-3">
                <label for="milestone">Remaining Balance</label>
                <input type="text" id="hiddenOutstandingBalance_10" name="hiddenOutstandingBalance_10" class="form-control form-control-sm" value="0" style="opacity: 0.6; pointer-events: none; ">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="milestone">Description</label>
                <input type="text" id="milestone_10" name="group_a[10][milestone]" class="form-control form-control-sm" value="" disabled>
            </div>

            <div class="mb-3 col-lg-3">
                <label for="percentage">Percentage (%)</label>
                <input type="number" id="percentage_10" name="group_a[10][percentage]" class="form-control form-control-sm" min=0 disabled step="0.01">
            </div>

            <div class="mb-3 col-lg-3">
                <label for="amount" id="amnt">Amount</label>
                <input type="number" id="amount_10" name="group_a[10][amount]" value="" class="form-control form-control-sm"  min=0 disabled step="0.01">
            </div>
        </div>
        
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

    $(document).ready(function() {
        // Function to check the value of the trigger input
        $('#price').on('keyup', function() {
            // Get the value of the specific input field
            var inputValue = $(this).val() // Trim any whitespace

            // Check if the input value matches the specific condition (e.g., "enable")
            if (inputValue > 0) {
                // Enable the section of input fields
                $('#disabledSection input').prop('disabled', false);
                $('#validatedSection input').prop('disabled', false);

                var price = parseFloat($('#price').val());
                var dldVal = parseFloat(price * 0.04);
                var adminFeeVal = parseFloat(3150);
                $('#dld_fees').val(dldVal);
                $('#admin_fees').val(adminFeeVal);
                $('#hiddenOutstandingBalance_0').val(price);
                
            } else {
                // Disable the section of input fields
                $('#disabledSection input').prop('disabled', true);
                $('#validatedSection input').prop('disabled', true);
            }
        });


        $('input[id^="percentage_"]').on('blur', function() {
            // Extract the index from the ID
            var index = $(this).attr('id').split('_')[1];
            
            // Call the function when the focus is lost from the percentage field
            getCurrentIndex2(index);
        });

    });

    function getCurrentIndex2(index) {
        $(document).ready(function() {
            var percentage = '#percentage_' + index;
            var amount = '#amount_' + index;
            var outstandingBalanceIndex = '#hiddenOutstandingBalance_' + index;

            console.log('initial balance index ' + outstandingBalanceIndex);

            // GET PRICE
            var price = parseFloat($('#price').val());

            // GET OUTSTANDING BALANCE
            var outstandingBalance = parseFloat($(outstandingBalanceIndex).val());
            console.log('initial balance value ' + outstandingBalance);

            // GET ENTERED PERCENTAGE
            var percentageValue = parseFloat($(percentage).val());

            // If the percentageValue is not a valid number, return early
            if (isNaN(percentageValue)) return;

            // CALCULATE FINAL AMOUNT
            var finalAmount = (percentageValue * outstandingBalance) / 100;

            // GET THE NEW OUTSTANDING BALANCE
            var newOutstandingBalance = outstandingBalance - finalAmount;

            // ASIGN THE AMOUNT TO 02 DECIMALS
            $(amount).val(finalAmount.toFixed(2));

            // INCREMENT THE INDEX BY ONE
            var newIndex = parseInt(index)+1;
            console.log('INDEX INCREMENT ' + newIndex);

            var newIndexString = newIndex.toString();
            console.log('INCREMENTED INDEX TO STRING ' + newIndexString);
            
            var nextOutstandingBalance = '#hiddenOutstandingBalance_' + newIndex;
            console.log('ID OF THE NEXT HIDDEN BALANCE ' + nextOutstandingBalance);

            // Update the hidden outstanding balance field
            $(nextOutstandingBalance).val(newOutstandingBalance.toFixed(2)); // Fixed to 2 decimal places
        });
    }

</script>